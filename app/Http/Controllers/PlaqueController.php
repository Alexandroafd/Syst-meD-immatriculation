<?php

namespace App\Http\Controllers;

use App\Models\Plaque;
use App\Http\Requests\StorePlaqueRequest;
use App\Http\Requests\UpdatePlaqueRequest;

class PlaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.plaques.index', [
            'plaques' => Plaque::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plaque = new Plaque();
        
        return view ('admin.plaques.form', [
            'plaque' => $plaque
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlaqueRequest $request)
    {
        // Crée la plaque en utilisant les données validées
        $plaque = Plaque::create($request->validated());
    
        // Vérifie si une image a été téléchargée
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            // Génère un nom unique pour l'image
            $imageName = time() . '-' . $image->getClientOriginalName();
            
            // Déplace l'image vers le dossier public/profil_pic
            $image->move(public_path('profil_pic'), $imageName);
            
            // Enregistre le nom de l'image dans la base de données
            $plaque->image = $imageName;
            
            // Sauvegarde les modifications
            $plaque->save();
        }
    
        return redirect()->route('admin.plaque.index')->with('success', 'Nouvel enregistrement effectué');
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plaque $plaque)
    {
        return view ('admin.plaques.form', [
            'plaque' => $plaque
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
public function update(UpdatePlaqueRequest $request, Plaque $plaque)
{
    // Met à jour les données validées, sauf pour l'image
    $plaque->update($request->validated());

    // Vérifie si une nouvelle image a été téléchargée
    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Génère un nom unique pour l'image
        $imageName = time() . '-' . $image->getClientOriginalName();

        // Déplace l'image vers le dossier public/profil_pic
        $image->move(public_path('profil_pic'), $imageName);

        // Met à jour le nom de l'image dans la base de données
        $plaque->image = $imageName;
        $plaque->save();  // Sauvegarde les modifications
    }

    return redirect()->route('admin.plaque.index')->with('success', 'Enregistrement modifié');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plaque $plaque)
    {
        $plaque ->delete();
        return redirect()->route('admin.plaque.index')->with('success', 'Enregistrement supprimé');
    }
}
