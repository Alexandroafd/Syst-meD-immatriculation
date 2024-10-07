@extends('admin.admin')

@section('title', $plaque->exists ? "Editer un enregistrement" : "Enregistrer une nouvelle plaque")

@section('content')

<h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($plaque->exists ? 'admin.plaque.update' : 'admin.plaque.store', $plaque) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method($plaque->exists ? 'put' : 'post')

        <div class="row">
            @include('label.input', ['class' => 'col', 'label' => 'Nom', 'name' => 'name', 'value' => $plaque->name])
        </div>
        <div class="row">
            @include('label.input', ['class' => 'col', 'label' => 'Prénoms', 'name' => 'prenom', 'value' => $plaque->prenom])
        </div>
        <div class="col row">
            @include('label.input', ['class' =>'col', 'label' => 'Age', 'name' => 'age', 'value' => $plaque->age])
            @include('label.input', ['class' =>'col', 'type' => 'numeric', 'label' => 'Téléphone', 'name' => 'phone', 'value' => $plaque->phone])
        </div>
        <div class="row">
            @include('label.input', ['class' =>'col', 'label' => 'Profession', 'name' => 'profession', 'value' => $plaque->profession])
        </div>
        <div class="row">
            @include('label.input', ['class' => 'col', 'label' => 'Addresse', 'name' => 'address', 'value' => $plaque->address])
            @include('label.input', ['class' => 'col', 'label' => 'Ville', 'name' => 'city', 'value' => $plaque->city])
        </div>
        <div class="row">
            @include('label.input', ['class' => 'col', 'label' => 'Type', 'name' => 'type', 'value' => $plaque->type])
            @include('label.input', ['class' => 'col', 'label' => 'Immatriculation', 'name' => 'immatriculation', 'value' => $plaque->immatriculation])
        </div>
        <div class="row">
            <label class="col">Sexe :</label>
            <div class="col">
                <input type="radio" id="homme" name="sexe" value="Homme" {{ $plaque->sexe === 'Homme' ? 'checked' : '' }}>
                <label for="homme">Homme</label>
            </div>
            <div class="col">
                <input type="radio" id="femme" name="sexe" value="Femme" {{ $plaque->sexe === 'Femme' ? 'checked' : '' }}>
                <label for="femme">Femme</label>
            </div>
        </div>
        <div class="row">
            @include('label.input', ['type' => 'file', 'id' => 'image', 'class' => 'col', 'label' => 'Photo', 'name' => 'image', 'value' => $plaque->image])
        </div>
        <div>
            <button class="btn btn-primary">
                @if ($plaque->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>
    </form>
@endsection
