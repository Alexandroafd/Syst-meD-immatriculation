@extends('admin.admin')

@section('title', 'Accueil')

@section('content')

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Popular Products</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="border-top-0">Nom</th>
                                                    <th class="border-top-0">Prénom</th>
                                                    <th class="border-top-0">Type</th>
                                                    <th class="border-top-0">Immatriculation</th>
                                                    <th class="border-top-0">Action</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                @foreach ($plaques as $plaque)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                @if ($plaque->image)
                                                                    <!--<img src="assets/images/products/01.png" height="40" class="me-3 align-self-center rounded" alt="...">-->
                                                                    <img src="{{ asset('profil_pic/' . $plaque->image) }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                @else
                                                                    <p>Photo</p>
                                                                @endif
                                                                <div class="flex-grow-1 text-truncate">
                                                                    <h6 class="m-0"> {{$plaque->name}} </h6>
                                                                    <a href="#" class="fs-12 text-primary">ID: {{$plaque->id}}</a>
                                                                </div><!--end media body-->
                                                            </div>
                                                        </td>
                                                        <td> {{$plaque->prenom}} </td>
                                                        <td>
                                                            @if($plaque->type == "Moto")
                                                                <span class="badge bg-primary-subtle text-primary px-2">Moto</span>
                                                            @else
                                                                <span class="badge bg-danger-subtle text-danger px-2">{{$plaque->type}}</span>
                                                            @endif
                                                        </td>
                                                        <td> {{$plaque->immatriculation}} </td>
                                                        <td>
                                                            <a href="{{route('admin.plaque.edit', $plaque)}}"><i class="las la-pen text-secondary fs-18"></i></a>
                                                            <form action="{{ route('admin.plaque.destroy', $plaque) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" style="border: none; background: none; cursor: pointer;" onclick="return confirm('Voulez-vous vraiment supprimer cet enregistrement ?')">
                                                                    <i class="las la-trash-alt text-secondary fs-18"></i>
                                                                </button>
                                                            </form>
                                                            {{--<a href="{{route('admin.plaque.destroy', $plaque)}}"><i class="las la-trash-alt text-secondary fs-18"></i></a>--}}
                                                        </td>
                                                    </tr><!--end tr-->
                                                @endforeach
                                            </tbody>
                                        </table> <!--end table-->
                                        {{ $plaques->links() }}
                                    </div><!--end /div-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->

                <!--Start Footer-->
                <footer class="footer text-center text-sm-start d-print-none">
                    <div class="container-xxl">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0 rounded-bottom-0">
                                    <div class="card-body">
                                        <p class="text-muted mb-0">
                                            ©
                                            <script> document.write(new Date().getFullYear()) </script>
                                            Rizz
                                            <span
                                                class="text-muted d-none d-sm-inline-block float-end">
                                                Crafted with
                                                <i class="iconoir-heart text-danger"></i>
                                                by Mannatthemes</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

    {{--@if (Session::has('success'))
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
    {{ $plaques->links() }}--}}
@endsection
