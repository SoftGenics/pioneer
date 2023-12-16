@php
    $html_tag_data = [];
    $title = 'User Detail';
    $description= 'Acorn elearning platform instructor detail.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/instructor.detail.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Users/List">Users</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->
       
        @php
       $id= request('id');
        $User=\App\Models\User::find($id);
        $pic = \App\Models\profile_pics::where('user_id',$id)->first();
      
        
@endphp
        <!-- Content Start -->
        <div class="row g-5">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Biography Start -->
                <h2 class="small-title">About</h2>
                <div class="card">
                    <div class="card-body mb-n5">
                        <div class="d-flex align-items-center flex-column mb-5">
                            <div class="mb-4 d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3">
                                     <h3>Number of Blogs</h3>
                                    @if($pic)
                                    <img src="https://picruit.com/public/{{$pic->image}}" class="img-fluid rounded-xl" alt="thumb" />
                                @else
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid rounded-xl" alt="thumb" />

                                    @endif
                                
                                </div>
                               
                                <div class="h5 mb-0">{{$User->name}}</div>
                                @if($User->category==1)
                                <div class="text-muted mb-2">
                                    Student
                                 </div>
                                 @elseif($User->category==2)
                                 Teacher
                                 @elseif($User->category==3)
                                 Employee
                                 @else
                                 Jobsheekher
                                 @endif
                                
                            </div>
                            <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                             @if($User->status==true)
                              <a href="{{url("/blockuser")}}/{{$User->id}}">  <button type="button" class="btn btn-outline-primary w-100 me-2" id="block"  >Block</button></a>
                               @else
                               <a href="{{url("/unblockuser")}}/{{$User->id}}"> <button type="button" class="btn btn-outline-primary w-100 me-2" id="block" >Unblock</button></a>
                                @endif
                            </div>
                        </div>
                       
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">CONTACT</p>
                          
                            <a href="#" class="d-block body-link">
                                <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">
                            {{$User->email}}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Biography End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9">
                <!-- Stats Start -->
                <div class="row g-3 mb-5">
                    
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            
                        </div>
                    </div>
                  
                </div>
                <!-- Stats End -->

                <!-- Courses Start -->
              
                <div class="row g-3 mb-5">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="page-title-container">
                        <div class="row">
                        <div class="col">
                        <h1 class="mb-0 pb-0 display-4" id="title">Profile</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                      
                        </nav>
                        </div>
                        <div class="col-12 col-sm-auto d-flex align-items-start justify-content-end d-block d-lg-none">
                        <button type="button" class="btn btn-icon btn-icon-start btn-outline-primary w-100 w-sm-auto" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-gear undefined"><path d="M8.32233 3.75427C8.52487 1.45662 11.776 1.3967 11.898 3.68836C11.9675 4.99415 13.2898 5.76859 14.4394 5.17678C16.4568 4.13815 18.0312 7.02423 16.1709 8.35098C15.111 9.10697 15.0829 10.7051 16.1171 11.4225C17.932 12.6815 16.2552 15.6275 14.273 14.6626C13.1434 14.1128 11.7931 14.9365 11.6777 16.2457C11.4751 18.5434 8.22404 18.6033 8.10202 16.3116C8.03249 15.0059 6.71017 14.2314 5.56062 14.8232C3.54318 15.8619 1.96879 12.9758 3.82906 11.649C4.88905 10.893 4.91709 9.29487 3.88295 8.57749C2.06805 7.31848 3.74476 4.37247 5.72705 5.33737C6.85656 5.88718 8.20692 5.06347 8.32233 3.75427Z"></path><path d="M10 8C11.1046 8 12 8.89543 12 10V10C12 11.1046 11.1046 12 10 12V12C8.89543 12 8 11.1046 8 10V10C8 8.89543 8.89543 8 10 8V8Z"></path></svg>
                        <span>Settings</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end sw-25 py-3 px-4" id="settingsMoveContent" data-move-target="#settingsColumn" data-move-breakpoint="lg"></div>
                        </div>
                        </div>
                        </div>
                        <h2 class="small-title">Public Info</h2>
                        @if($User->category==2)
@php 
        $Userprofile = \App\Models\persanalinfo::where('user_id',$id)->first();
        $Qualification = \App\Models\Qualification::where('user_id',$id)->first();
        $Persanalinfo = \App\Models\persanalinfo::where('user_id',$id)->first();
        $application = \App\Models\Application::where('user_id',$id)->first();

@endphp

                        <div class="card mb-5">
                        <div class="card-body">
                            
                            @if($Userprofile)
                        <form action="{{url('user_update')}}/{{$Userprofile->user_id}}" method="POST">
                            @csrf
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">{{$Userprofile->f_name?$Userprofile->f_name:"Empty"}}</label>
                           
                      
                        </div>
                        </div>
                       
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Country</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" name="country" class="form-control" value="{{$Userprofile->country?$Userprofile->country:"Empty"}}">
                        </div>
                        </div>
                        

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Father's Name</label>
                            <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="text" name="psname" class="form-control" value="{{$Userprofile->psname?$Userprofile->psname:"Empty"}}">
                            </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">State</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                <input type="text" name="state" class="form-control" value="{{$Userprofile->state?$Userprofile->state:"Empty"}}">
                                </div>
                                </div>
                        
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">City</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="aera" value="{{$Userprofile->city?$Userprofile->city:"Empty"}}" disabled="disabled">
                        </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Pin Code</label>
                            <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="text" class="form-control" name="pincode" value="{{$Userprofile->pincode?$Userprofile->pincode:"Empty"}}" disabled="disabled">
                            </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">What's App Number</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                <input type="text" class="form-control" name="whatappno" value="{{$Userprofile->whatappno?$Userprofile->whatappno:"Empty"}}" disabled="disabled">
                                </div>
                                </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="email" name="email" class="form-control" value="{{$Userprofile->gender}}" disabled="disabled">

                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <textarea class="form-control" rows="3" name="address" disabled="disabled"> {{$Userprofile->address?$Userprofile->address:"Empty"}}</textarea>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="email" name="email" class="form-control" value="{{$User->email}}" disabled="disabled">
                        </div>
                        </div>
                        <div class="mb-3 row mt-5">
                        <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                        </div>
                        </div>
                        </form>
                        
                        @else
                        <h1>Profile Is Empty</h1>
                        @endif

                        <h2 class="small-title">Qualification</h2> 
                        @if($Userprofile)
                            @csrf
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Stream</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">{{$Qualification?$Qualification->Stream:"Empty"}}</label>
                           
                      
                        </div>
                        </div>
                       
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">University</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" name="country" class="form-control" value="{{$Qualification?$Qualification->University:"Empty"}}">
                        </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Exprience offline</label>
                            <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="text" name="country" class="form-control" value="{{$Qualification?$Qualification->Exprienceoffline:"Empty"}}">
                            </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Exprience online</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                <input type="text" name="country" class="form-control" value="{{$Qualification?$Qualification->Exprienceonline:"Empty"}}">
                                </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Specialachievements</label>
                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" name="country" class="form-control" value="{{$Qualification?$Qualification->Specialachievements:"Empty"}}">
                                    </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Anyotherdetails</label>
                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                        <input type="text" name="country" class="form-control" value="{{$Qualification?$Qualification->Anyotherdetails:"Empty"}}">
                                        </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">AboutProject</label>
                                            <div class="col-sm-8 col-md-9 col-lg-10">
                                            <input type="text" name="country" class="form-control" value="{{$Qualification?$Qualification->AboutProject:"Empty"}}">
                                            </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">document</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                <input type="text" name="country" class="form-control" value="{{$Qualification?$Qualification->document:"Empty"}}">
                                                </div>
                                                </div>
                       

                        @else
                        <h1>Profile Is Empty</h1>
                        @endif
                       
                        </div>
                        </div>
                        @endif


                        @if($User->category==1)
                        @php 
                        $Userprofile = \App\Models\Profile::where('user_id',$id)->first();
                              
                        
                        @endphp
                        
                                                <div class="card mb-5">
                                                <div class="card-body">
                                                    
                                                    @if($Userprofile)
                                                <form action="{{url('user_update')}}/{{$Userprofile->user_id}}" method="POST">
                                                    @csrf
                                                <div class="mb-3 row">
                                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">{{$Userprofile?$Userprofile->name:"Empty"}}</label>
                                                   
                                              
                                                </div>
                                                </div>
                                               
                                                <div class="mb-3 row">
                                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Country</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                <input type="text" name="country" class="form-control" value="{{$Userprofile?$Userprofile->country:"Empty"}}">
                                                </div>
                                                </div>
                                                
                        
                                                <div class="mb-3 row">
                                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Father's Name</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                    <input type="text" name="psname" class="form-control" value="{{$Userprofile?$Userprofile->psname:"Empty"}}">
                                                    </div>
                                                    </div>
                        
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">State</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <input type="text" name="state" class="form-control" value="{{$Userprofile?$Userprofile->state:"Empty"}}">
                                                        </div>
                                                        </div>
                                                
                                                <div class="mb-3 row">
                                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">City</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                <input type="text" class="form-control" name="aera" value="{{$Userprofile?$Userprofile->city:"Empty"}}" disabled="disabled">
                                                </div>
                                                </div>
                        
                                                <div class="mb-3 row">
                                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Pin Code</label>
                                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                                    <input type="text" class="form-control" name="pincode" value="{{$Userprofile?$Userprofile->pincode:"Empty"}}" disabled="disabled">
                                                    </div>
                                                    </div>
                        
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">What's App Number</label>
                                                        <div class="col-sm-8 col-md-9 col-lg-10">
                                                        <input type="text" class="form-control" name="whatappno" value="{{$Userprofile?$Userprofile->whatappno:"Empty"}}" disabled="disabled">
                                                        </div>
                                                        </div>
                                                <div class="mb-3 row">
                                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                    <input type="email" name="email" class="form-control" value="{{$Userprofile->gender}}" disabled="disabled">
                        
                                                </div>
                                                </div>
                                                <div class="mb-3 row">
                                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Address</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                <textarea class="form-control" rows="3" name="address" disabled="disabled"> {{$Userprofile?$Userprofile->address:"Empty"}}</textarea>
                                                </div>
                                                </div>
                                                <div class="mb-3 row">
                                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                <input type="email" name="email" class="form-control" value="{{$User->email}}" disabled="disabled">
                                                </div>
                                                </div>
                                                <div class="mb-3 row mt-5">
                                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                                {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                                                </div>
                                                </div>
                                                </form>
                                                
                                                @else
                                                <h1>Profile Is Empty</h1>
                                                @endif
                    
                                                </div>
                                                </div>
                                                @endif
                        
                        </div>
                      
                    
                   

              
                       
@endsection

    
