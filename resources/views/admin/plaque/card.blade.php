@extends('admin.admin')

@section('title', 'Détails Utilisateur')

@section('content')

        <div class="page-wrapper">

            <!-- Page Content-->
             <div class="page-content">
                <div class="container-xxl"> 
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Résultat de Recherche</h4>                      
                                        </div><!--end col-->
                                        {{--<div class="col-auto"> 
                                            <form class="row g-2">
                                                <div class="col-auto">
                                                    <a class="btn bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-auto-close="outside">
                                                        <i class="iconoir-filter-alt me-1"></i> Filter
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <div class="p-2">
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-all">
                                                                <label class="form-check-label" for="filter-all">
                                                                  All 
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-one">
                                                                <label class="form-check-label" for="filter-one">
                                                                    New
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-two">
                                                                <label class="form-check-label" for="filter-two">
                                                                    VIP
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-three">
                                                                <label class="form-check-label" for="filter-three">
                                                                    Repeat
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-four">
                                                                <label class="form-check-label" for="filter-four">
                                                                    Referral
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-five">
                                                                <label class="form-check-label" for="filter-five">
                                                                    Inactive
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-six">
                                                                <label class="form-check-label" for="filter-six">
                                                                    Loyal
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                
                                                <div class="col-auto">
                                                  <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#addBoard"><i class="fa-solid fa-plus me-1"></i> Add Product</button>
                                                </div><!--end col-->
                                            </form>    
                                        </div><!--end col-->--}}
                                    </div><!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    
                                    <div class="table-responsive">
                                        <table class="table mb-0 checkbox-all" id="datatable_1">
                                            <thead class="table-light">
                                              <tr>
                                                {{--<th style="width: 16px;">
                                                    <div class="form-check mb-0 ms-n1">
                                                        <input type="checkbox" class="form-check-input" name="select-all" id="select-all">                                                    
                                                    </div>
                                                </th>--}}
                                                <th>Nom</th>
                                                <th>Prénoms</th>
                                                <th>Email</th>
                                                <th>Type</th>
                                                <th>Immatriculation</th>
                                                <th class="text-end">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @if ($plaques->isNotEmpty())
                                                    @foreach($plaques as $plaque)
                                                        <tr>
                                                            <td>
                                                                @if ($plaque->image)
                                                                    <img src="{{ asset('profil_pic/' . $plaque->image) }}" alt="" class="thumb-md d-inline rounded-circle me-1">
                                                                @endif
                                                                <!--<img src="assets/images/users/avatar-2.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">-->
                                                                <p class="d-inline-block align-middle mb-0">
                                                                <a href="{{route('admin.plaque.show', ['slug' => $plaque->getSlug(), 'plaque' => $plaque->id])}}"><span class="font-13 fw-medium">{{$plaque->name}}</span></a> 
                                                            </td>
                                                                <!--<td><a href="#" class="d-inline-block align-middle mb-0 text-body"> {{$plaque->email}} </a> </td>-->
                                                            <td>
                                                                    <span class="font-13 fw-medium">{{$plaque->prenom}}</span> 
                                                                </p>
                                                            </td>
                                                            <td> {{$plaque->email}} </td>
                                                            <td>
                                                                @if($plaque->type == "Moto")
                                                                    <span class="badge bg-success-subtle text-success">{{$plaque->type}}</span>
                                                                @else
                                                                    <span class="badge bg-danger-subtle text-danger">{{$plaque->type}}</span>
                                                                @endif
                                                            </td>
                                                            {{--<td><span class="badge bg-danger-subtle text-danger">{{$plaque->type}}</span></td>--}}
                                                            <td>{{$plaque->immatriculation}}</td>
                                                            <td class="text-end">                                                       
                                                                <a href="{{route('admin.plaque.edit', $plaque)}}"><i class="las la-pen text-secondary fs-18"></i></a>
                                                                <form action="{{ route('admin.plaque.destroy', $plaque) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" style="border: none; background: none; cursor: pointer;" onclick="return confirm('Voulez-vous vraiment supprimer cet enregistrement ?')">
                                                                        <i class="las la-trash-alt text-secondary fs-18"></i>
                                                                    </button>
                                                                </form>                                                            </td>
                                                        </tr> 
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="6"> Aucun résultat ne correspond à votre recherche </td>
                                                    </tr> 
                                                @endif                                                                            
                                            </tbody>
                                        </table>
                                        {{ $plaques->links() }}
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->                                     
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

{{--<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('admin.plaque.show', ['slug' => $plaque->getSlug(), 'plaque' => $plaque->id]) }}">
                {{ $plaque->immatriculation }}
            </a>
        </h5>
        <p class="card-text">{{ $plaque->name }} {{ $plaque->prenom }}</p>
        <p class="card-text">({{ $plaque->city }})</p>
        <div class="text-primary fw-bold" style="font-size: 1.4rem;">
            {{ $plaque->type }}
        </div>
    </div>
</div>--}}
