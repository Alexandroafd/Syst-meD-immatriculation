@extends('admin.admin')

@section('title', 'Accueil')

@section('content')

    @if (Session::has('success'))
    <div class="bg-success py-4 mb-4 rounded">
        <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('success') }} </p>
    </div>
    @endif

    @if (Session::has('error'))
    <div class="bg-danger py-4 mb-4 rounded">
        <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('error') }} </p>
    </div>
    @endif

    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{route('admin.plaque.create')}}" class="btn btn-primary">Enregistrer une nouvelle plaque</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Ville</th>
                <th>Type</th>
                <th>Immatriculation</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plaques as $plaque)
            <tr>
                <td>{{ $plaque->name}}</td>
                <td>{{ $plaque->prenom }}</td>
                <td>{{ $plaque->city }}</td>
                <td>{{ $plaque->type }}</td>
                <td>{{ $plaque->immatriculation }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route ('admin.plaque.edit', $plaque) }}" class="btn btn-primary">Editer</a>
                        <form method="post" action="{{ route('admin.plaque.destroy', $plaque) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $plaques->links() }}
@endsection
