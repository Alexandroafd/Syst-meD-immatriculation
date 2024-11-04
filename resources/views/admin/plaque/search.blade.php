@extends('admin.admin')

@section('title', 'Faire une recherche')

@section('content')

        <div class="page-wrapper">
        @include('shared.alert')
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                    
   {{--<h1>@yield('title')</h1>

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
        </div>--}}
@endsection
