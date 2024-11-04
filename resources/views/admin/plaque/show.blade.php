@extends('admin.admin')

@section('title', $plaque->immatriculation)

@section('content')
    
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
                <div class="container-xxl">
                    <div class="row">                        
                        
                        <div class="col-md-12 col-lg-12">
                            <div class="card">  
                                <div class="card-body">
                                    <div class="row align-items-center">                                        
                                        <div class="col ">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative">
                                                    @if ($plaque->image)
                                                        <img src="{{ asset('profil_pic/' . $plaque->image) }}" alt="" class="rounded-circle img-fluid">
                                                    @else
                                                        <p>Photo</p>                                                                
                                                    @endif
                                                    <!--<img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid">-->
                                                    <div class="position-absolute top-50 start-100 translate-middle">
                                                        <!--<img src="assets/images/flags/baha_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-white">-->
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-3"> 
                                                    <h5 class="m-0 fs-3 fw-bold"> {{$plaque->name}} {{$plaque->prenom}} </h5>
                                                    <p class="text-muted mb-0">@karen</p>                                                                                                                                 
                                                </div><!--end media body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-auto text-end">
                                            <!--<button type="button" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</button>-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <div class="mt-3">
                                        <div class="text-body mb-2  d-flex align-items-center"><i class="iconoir-language fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Langues :</span> Fon / Français / Anglais</div>                                    
                                        <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span>{{$plaque->email}}</div>
                                        <div class="text-body mb-3 d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> {{$plaque->phone}} </div>                                    
                                        <div class="text-body mb-2  d-flex align-items-center"><i class="iconoir-language fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Age :</span> {{$plaque->age}} ans </div>                                    
                                        <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Sexe :</span>{{$plaque->sexe}}</div>
                                        <div class="text-body mb-3 d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Ville :</span> {{$plaque->city}} </div>  
                                        <div class="text-body mb-2  d-flex align-items-center"><i class="iconoir-language fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Addresse :</span> {{$plaque->address}}</div>                                    
                                        <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Profession :</span>{{$plaque->profession}}</div>
                                        <div class="text-body mb-3 d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Numéro de la Plaque :</span> {{$plaque->immatriculation}} </div>  
                                        <div class="text-body mb-2  d-flex align-items-center"><i class="iconoir-language fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Type :</span> {{$plaque->type}}</div>                                    
                                        <!--<ul class="mb-0 list-unstyled">
                                            <li class="list-inline-item">
                                                <a href="#" class="d-flex justify-content-center align-items-center thumb-md rounded-circle mx-auto social twitter">
                                                    <i class="icofont-twitter fs-18 align-self-center mb-0 "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="d-flex justify-content-center align-items-center thumb-md rounded-circle mx-auto social instagram">
                                                    <i class="icofont-instagram fs-18 align-self-center mb-0 "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="d-flex justify-content-center align-items-center thumb-md rounded-circle mx-auto social facebook">
                                                    <i class="icofont-facebook fs-18 align-self-center mb-0 "></i>
                                                </a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div><!--end card-body-->  
                            </div><!--end card-->                             
                        </div> <!--end col--> 
                    </div>
                </div>
            </div>
        </div>
    
    {{--<div class="container mt-4">
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
    </div>--}}
@endsection
