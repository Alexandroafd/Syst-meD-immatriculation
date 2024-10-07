<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPlaqueRequest;
use App\Models\Plaque;
use Illuminate\Http\Request;

class SearchPlaqueController extends Controller
{
    public function index(SearchPlaqueRequest $request)
{
    // On commence par créer une requête de base
    $query = Plaque::query();

    // On filtre par immatriculation si le champ est rempli
    if (!empty($request->immatriculation)) {
        $query->where('immatriculation', 'like', "%{$request->immatriculation}%");
    }

    // On récupère les résultats paginés, triés par date de création
    $plaques = $query->orderBy('created_at', 'desc')->paginate(25);

    // On renvoie la vue avec les résultats
    return view('admin.plaque.search', [
        'plaques' => $plaques,
        'input' => $request->validated()
    ]);
}


public function show(string $slug, Plaque $plaque)
{
    // Vérifie si le slug passé dans l'URL correspond à celui du modèle
    $expectedSlug = $plaque->getSlug();

    // Si les slugs ne correspondent pas, redirige vers le bon slug
    if ($slug !== $expectedSlug) {
        return redirect()->route('plaque.show', ['slug' => $expectedSlug, 'plaque' => $plaque->id]);
    }

    // Retourne la vue avec la plaque
    return view('admin.plaque.show', [
        'plaque' => $plaque
    ]);
}

}
