@extends('admin.admin')

@section('title', $plaque->immatriculation)

@section('content')
    <div class="container mt-4">
    @if ($plaque->image)
        <img src="{{ asset('profil_pic/' . $plaque->image) }}" alt="photo" style="width: 200px">
    @else
        <p>Aucune image disponible.</p>
    @endif
        <p><strong>Nom :</strong> {{ $plaque->name }}</p>
        <p><strong>Prénoms :</strong> {{ $plaque->prenom }}</p>
        <p><strong>Âge :</strong> {{ $plaque->age }} ans</p>
        <p><strong>Sexe :</strong> {{ $plaque->sexe }}</p>
        <p><strong>Ville :</strong> {{ $plaque->city }}</p>
        <p><strong>Adresse :</strong> {{ $plaque->address }}</p>
        <p><strong>Téléphone :</strong> {{ $plaque->phone }}</p>
        <p><strong>Profession :</strong> {{ $plaque->profession }}</p>
        <p><strong>Type :</strong> {{ $plaque->type }}</p>
    </div>
@endsection
