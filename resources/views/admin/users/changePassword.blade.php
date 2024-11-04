@extends('admin.admin')

@section('title', 'Changer le Mot de Passe')

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
                                            <h4 class="card-title">Changer le Mot de Passe</h4>
                                        </div><!--end card-header-->
                                        <form action="{{route('admin.updatePassword')}}" method="post">
                                            @csrf
                                            <div class="card-body pt-0"> 
                                                <div class="form-group mb-3 row">
                                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Ancien Mot de Passe</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input class="form-control @error('old_password') is-invalid @enderror" type="password" id="old_password" name="old_password" value="" placeholder="">
                                                        @error('old_password')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Nouveau Mot de Passe</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input class="form-control @error('new_password') is-invalid @enderror" type="password" id="new_password" name="new_password" value="" placeholder="">
                                                        @error('new_password')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirmer Mot de passe</label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input class="form-control @error('confirm_password') is-invalid @enderror" type="password" id="confirm_password" name="confirm_password" value="" placeholder="">
                                                        @error('new_password')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                        <button type="submit" class="btn btn-primary">Changer</button>
                                                        @error('confirm_password')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
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


@endsection