<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/rizz/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 12:18:54 GMT -->
    <head>
        
        <meta charset="utf-8" />
        <title>Administration | Connection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
       
        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    
    <!-- Top Bar Start -->
    <body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                        @include('shared.alert')
                            <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{asset('assets/images/logo-sm.png')}}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Bienvenu sur notre SysMat</h4>   
                                        <p class="text-muted fw-medium mb-0">Connectez-Vous pour Continuer.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" method="post" action="{{route('login')}}">
                                    @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="email">Email</label>
                                            <input value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">                               
                                            @error('email')
                                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                            @enderror
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label class="form-label" for="password">Mot de Passe</label>                                            
                                            <input value="" type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Mot de passe">                            
                                            @error('password')
                                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                            @enderror
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Se Rappeler de Moi ?</label>
                                                </div>
                                            </div><!--end col--> 
                                            <div class="col-sm-6 text-end">
                                                <a href="#" class="text-muted font-13"><i class="dripicons-lock"></i> Mot de passe oublié ?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit"> Se Connecter <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <div class="text-center  mb-2">
                                        <p class="text-muted">Vous n'avez pas de compte ?  <a href="{{route('register')}}" class="text-primary ms-2">Inscrivez-vous</a></p>
                                        <!--<h6 class="px-3 d-inline-block">Or Login With</h6>-->
                                    </div>
                                    <!--<div class="d-flex justify-content-center">
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-blue-subtle text-blue rounded-circle me-2">
                                            <i class="fab fa-facebook align-self-center"></i>
                                        </a>
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-info-subtle text-info rounded-circle me-2">
                                            <i class="fab fa-twitter align-self-center"></i>
                                        </a>
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-danger-subtle text-danger rounded-circle">
                                            <i class="fab fa-google align-self-center"></i>
                                        </a>
                                    </div>-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->                                        
    </div><!-- container -->
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 12:18:54 GMT -->
</html>

{{--@extends('admin.admin')

@section('title', 'Se connecter')

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

    <div class="mt-4 container">
        <h1>@yield('title')</h1>

        <form method="post" action="{{ route('login') }}" class="vstack gap-3">
            @csrf
            @include('label.input', ['type' => 'email', 'label' => 'Email', 'name' => 'email'])
            @include('label.input', ['type' => 'password','label' => 'Mot de passe', 'name' => 'password'])
            <div>
                <button class="btn btn-primary">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
@endsection--}}
