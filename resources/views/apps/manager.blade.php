@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Manager Profile';
    $heading = 'Manager Profile & Employee profile';
    $description = 'Manager Profile Page';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Profile"=>"Profile"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/movecontent.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/profile.settings.js"></script>
@endsection

@section('content')
@include('sweetalert::alert');
    <div class="container">
        <div class="row">
            <div class="col-auto d-none d-lg-flex">
                <div class="nav flex-column  mt-n2" id="settingsColumn">
                    <!-- Content of this will be moved from #settingsMoveContent div based on the responsive breakpoint.  -->
                </div>
            </div>

            <div class="col">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col">
                            <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                            @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                        </div>
                        <!-- Title End -->

                        <!-- Top Buttons Start -->
                        
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Public Info Start -->
                <h2 class="small-title">Manager and Employees</h2>
                <div class="card mb-5 add">
                    <div class="card-body">
                        <form action="{{url('/createAccount')}}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Lisa Jackson" name="name" />
                                </div>
                            </div>
                           

                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Type</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <select  name="usertype" class="select-single-no-search form-control dropdown-toggle" data-width="200%" id="dropdownMenuButton" required>
                                        <option label="&nbsp;"></option>
                                        <option value="1">Employee</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Other</option>
                                       
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label" >Password</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="password" class="form-control" value="" name="password" required  />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label" >Confirm Password</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="password" class="form-control" value="" name="Cpassword"  required />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" name="location" />
                                </div>
                            </div>
                           
                            
                            <!-- <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Bio</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <textarea class="form-control" rows="3">I'm a Cyborg, But That's OK</textarea>
                                </div>
                            </div> -->
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" name="email" required />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="button" class="btn btn-primary close">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Approve</button>
                                </div>
                            </div>
                           


                        </form>
                    </div>
                </div>
{{-- Edit team --}}

<div class="editform"> 
 <h2 class="small-title ">Edit teams</h2>
 <div class="card mb-5">
    <div class="card-body">

        <form action="{{url('/team-edit')}}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <input type="text" class="form-control" value="Lisa Jackson" name="name" />
                </div>
            </div>
           

            <div class="mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Type</label>
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <select  name="usertype" class="select-single-no-search form-control dropdown-toggle" data-width="200%" id="dropdownMenuButton">
                        <option label="&nbsp;"></option>
                        <option value="1">Employee</option>
                        <option value="2">Manager</option>
                        <option value="3">Other</option>
                       
                    </select>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <input type="password" class="form-control" value="" name="password" />
                </div>
            </div>
            
            </div>

            <div class="mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <input type="text" class="form-control" name="location" />
                </div>
            </div>
           
            
            <!-- <div class="mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Bio</label>
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <textarea class="form-control" rows="3">I'm a Cyborg, But That's OK</textarea>
                </div>
            </div> -->
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <input type="email" class="form-control" value="me@lisajackson.com" name="email" />
                </div>
            </div>
            <div class="mb-3 row mt-5">
                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                    <button type="button" class="btn btn-primary close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
           


        </form>
    </div>
</div>

                <!-- Public Info End -->
                <div class="mb-5">
                       <div class="col-12 col-xl-12 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Manager</h2>
                    <button
                            class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-haspopup="true"
                    >
                        <i data-acorn-icon="more-horizontal" data-acorn-size="15"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                      
                        <a class="dropdown-item" href="#">Status</a>
                        <a class="dropdown-item" href="#">Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>

                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="6">
                        <div class="card mb-2" data-title="Product Card" data-intro="Here is a product card with buttons!" data-step="2">
                            @php 
                            $team=\App\Models\manager::all();
                            @endphp
                            @foreach ($team as $item)
                            @if($item->usertype==2)
                            <div class="row g-0 sh-12">
                               
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/profile/profile-11.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                               
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0 position-static">
                                                <a href="#">{{$item->name}}</a>
                                                <div class="text-small text-muted text-truncate"> {{$item->email}}</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <a href="{{url('/edit_team')}}/{{$item->id}}">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1 edit" type="button" >
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                                </button> </a>
                                                <a href="{{url('/team-delete')}}/{{$item->id}}">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               
                            </div>
                             @endif
 @endforeach
                        </div>
                       
                       
<br/>
                        

                       
                        
                    </div>
                </div>
            </div>
                    </div>
                <!-- Contact Start -->
               
                <!-- Contact End -->

                <!-- Jobs Start -->
                <h2 class="small-title">Employees</h2>
                <div class="card mb-5">
                   
                    <div class="card-body">
                    <div class="col-12 col-xl-12 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title"> </h2>
                    <button
                            class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-haspopup="true"
                    >
                        <i data-acorn-icon="more-horizontal" data-acorn-size="15"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                        <a class="dropdown-item" href="#">Reload</a>
                        <a class="dropdown-item" href="#">Stats</a>
                        <a class="dropdown-item" href="#">Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>

                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="6">
                        <div class="card mb-2" data-title="Product Card" data-intro="Here is a product card with buttons!" data-step="2">
                            @php 
                            $team=\App\Models\manager::all();
                            @endphp
                            @foreach ($team as $item)
                            @if($item->usertype==1) 
                            
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="#">
                                        <img src="/img/profile/profile-11.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0 position-static">
                                                <a href="#">Kommissbrot</a>
                                                <div class="text-small text-muted text-truncate">Icing liquorice olegário jujubes oat cake.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                 <a href="{{url('/edit_team')}}/{{$item->id}}">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1 edit" type="button" onclick="Edit_team({{$item->id}})">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block ">Edit</span>
                                                </button>
                                                </a>

                                                <a href="{{url('/team-delete')}}/{{$item->id}}">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <br/>
                        </div> 
                    </div>
                </div>
            </div>
                    </div>
                </div>
                <!-- Jobs End -->
            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

$(document).ready(function(){
$(".editform").hide();

  $(".close").click(function(){
    $(".editform").hide();
    $(".add").hide();
    
  });
});
</script>
