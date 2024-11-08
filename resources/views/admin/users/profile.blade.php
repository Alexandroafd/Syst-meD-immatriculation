@extends('admin.admin')

@section('title', 'Mon Profil')

@section('content')

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @include('shared.alert')
                            <!-- Tab panes -->
                            <div class="tab-content">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="card-title">Informations Personnelles</h4>
                                                </div><!--end col-->
                                            </div>  <!--end row-->
                                        </div><!--end card-header-->
                                        <form method="post" action="{{ route('admin.doprofile') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body pt-0">
                                                <div class="form-group mb-3 row">
                                                    <label for="name" class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nom</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input name="name" id="name" class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name', $user->name) }}">
                                                        @error('name')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="firstname" class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Prénoms</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror" type="text" value="{{ old('firstname', $user->firstname) }}">
                                                        @error('firstname')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="profession" class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Profession</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input name="profession" id="profession" class="form-control @error('profession') is-invalid @enderror" type="text" value="{{ old('profession', $user->profession) }}">
                                                        @error('profession')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label for="phone" class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Téléphone</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="las la-phone"></i></span>
                                                            <input name="phone" id="phone" type="numeric" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}" placeholder="" aria-describedby="basic-addon1">
                                                            @error('phone')
                                                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="email" class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="las la-at"></i></span>
                                                            <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" placeholder="" aria-describedby="basic-addon1">
                                                            @error('email')
                                                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="state" class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Pays</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="la la-globe"></i></span>
                                                            <input name="state" id="state" type="text" class="form-control @error('state') is-invalid @enderror" value="{{ old('state', $user->state) }}" placeholder="" aria-describedby="basic-addon1">
                                                            @error('state')
                                                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="image" class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Photo</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input name="image" id="image" class="form-control @error('image') is-invalid @enderror" type="file" value="">
                                                        @error('image')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                        @if($user->image)
                                                            <img src="{{ asset($user->image) }}" alt="Profil actuel" style="width:100px; height:auto; margin-top:10px;">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                                        <!--<button type="button" class="btn btn-danger">Cancel</button>-->
                                                    </div>
                                                </div>
                                            </div><!--end card-body-->
                                        </form>
                                    </div><!--end card-->
                            </div>
                        </div> <!--end col-->
                    </div><!--end row-->


                </div><!-- container -->
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
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
                </div>
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


@endsection
