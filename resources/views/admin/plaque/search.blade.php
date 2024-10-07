@extends("admin.admin")

@section('title', 'Faire une recherche')

@section('content')

    <h1>@yield('title')</h1>

        <form method="get" action="">
            <div class="row">
                <input type="text" placeholder="immatriculation"  class="form-control" name="immatriculation" value="{{ request('immatriculation', $input['immatriculation'] ?? '') }}">            </div>
            <button class=" mt-2 btn btn-primary">Rechercher</button>
        </form>
        <div class="container mt-3">
            <div class="row">
                @forelse ($plaques as $plaque)
                    <div class="col-3 mb-4">
                       @include('admin.plaque.card')
                    </div>
                @empty
                    <div class="col text-center">
                        Aucun résultat ne correspond à votre recherche
                    </div>
                @endforelse
            </div>
            <div class="my-4">
                {{ $plaques->links() }}
            </div>
        </div>
@endsection
