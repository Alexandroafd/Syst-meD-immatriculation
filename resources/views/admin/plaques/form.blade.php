@extends('admin.admin')

@section('title', $plaque->exists ? "Editer un enregistrement" : "Enregistrer une nouvelle plaque")

@section('content')

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl">                    

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">@yield('title')</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <form id="form-validation-2" class="form" method="post" action="{{ route($plaque->exists ? 'admin.plaque.update' : 'admin.plaque.store', $plaque) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method($plaque->exists ? 'put' : 'post')
                                        <div class="row">
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="name" class="form-label">Nom</label>
                                                <input value="{{ old('name', $plaque->name) }}" class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="">
                                                @error('name')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="prenom" class="form-label">Prénoms</label>
                                                <input value="{{ old('prenom', $plaque->prenom) }}" class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" id="prenom" placeholder="">
                                                @error('prenom')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="profession" class="form-label">Profession</label>
                                                <input value="{{ old('profession', $plaque->profession) }}" class="form-control @error('proffession') is-invalid @enderror" type="text" name="profession" id="profession" placeholder="">
                                                @error('profession')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6 col-lg-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input value="{{ old('email', $plaque->email) }}" class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="">
                                                @error('email')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="city" class="form-label">Ville</label>
                                                <input value="{{ old('city', $plaque->city) }}" class="form-control @error('city') is-invalid @enderror" type="text" name="city" id="city" placeholder="">
                                                @error('city')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="address" class="form-label">Addresse</label>
                                                <input value="{{ old('address', $plaque->address) }}" class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" placeholder="">
                                                @error('address')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="phone" class="form-label">Téléphone</label>
                                                <input value="{{ old('phone', $plaque->phone) }}" class="form-control @error('phone') is-invalid @enderror" type="numeric" name="phone" id="phone" placeholder="">
                                                @error('phone')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6 col-lg-6">
                                                <label for="age" class="form-label">Age</label>
                                                <input value="{{ old('age', $plaque->age) }}" class="form-control @error('age') is-invalid @enderror" type="numeric" name="age" id="age" placeholder="">
                                                @error('age')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="immatriculation" class="form-label">Immatriculation</label>
                                                <input value="{{ old('immatriculation', $plaque->immatriculation) }}" class="form-control @error('immatriculation') is-invalid @enderror" type="text" name="immatriculation" id="immatriculation" placeholder="">
                                                @error('immatriculation')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label for="type" class="form-label">Type</label>
                                                <input value="{{ old('type', $plaque->type) }}" class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" placeholder="">
                                                @error('type')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6 col-lg-6">
                                                <label class="col">Sexe :</label>
                                                <div>
                                                    <div class="col">
                                                        <input class="@error('sexe') is-invalid @enderror" value="{{ old('sexe', $plaque->sexe) }}" type="radio" id="masculin" name="sexe" {{ $plaque->sexe === 'Masculin' ? 'checked' : '' }}>
                                                        <label class="form-label" for="masculin">Masculin</label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="@error('sexe') is-invalid @enderror" value="{{ old('sexe', $plaque->sexe) }}" type="radio" id="feminin" name="sexe" {{ $plaque->sexe === 'Féminin' ? 'checked' : '' }}>
                                                        <label class="form-label" for="feminin">Féminin</label>
                                                    </div>
                                                    @error('sexe')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                                <!--<label for="password" class="form-label">Sexe</label>
                                                <input class="form-control" type="password" name="email" id="password" placeholder="">
                                                <small>Error Message</small>-->
                                            </div>
                                            <div class="mb-3 col-md-6 col-lg-6">
                                                <label for="image" class="form-label">Image</label>
                                                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" placeholder="">
                                                @error('image')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            @if ($plaque->exists)
                                                Modifier
                                             @else
                                                Créer
                                            @endif                                        
                                        </button>
                                    </form><!--end form-->            
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                                                
                    </div><!--end row-->
                                      
                </div><!-- container -->
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                {{--<div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>--}}
                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->
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
                                                by Mannatthemes
                                            </span>
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

{{--<h1>@yield('title')</h1>

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
    </form>--}}
@endsection
