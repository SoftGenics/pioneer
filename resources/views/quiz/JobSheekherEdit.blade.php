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
        </div>
        <!-- Title and Top Buttons End -->
        
                     <div>
                         
                           <!--@if($Userprofile)-->
                            
                           
                        <form action="{{route('edit-user')}}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control" value="{{$Userprofile?$Userprofile->user_id:"Empty"}}" name="user_id">
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" value="{{$Userprofile->name?$Userprofile->name:"Empty"}}" name="name">
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
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="aera" value="{{$Userprofile->aera?$Userprofile->aera:"Empty"}}">
                        </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Pin Code</label>
                            <div class="col-sm-8 col-md-9 col-lg-10">
                            <input type="text" class="form-control" name="pincode" value="{{$Userprofile->pincode?$Userprofile->pincode:"Empty"}}">
                            </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">What's App Number</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                <input type="text" class="form-control" name="whatappno" value="{{$Userprofile->whatappno?$Userprofile->whatappno:"Empty"}}">
                                </div>
                                </div>



                        
                        
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <select class="select-single-no-search select2-hidden-accessible" name="gender"data-width="100%" id="genderSelect" data-select2-id="genderSelect" tabindex="-1" aria-hidden="true">
                        <option value="{{$Userprofile->gender}}">{{$Userprofile->gender?$Userprofile->gender:"Empty"}}</option>
                        <option value="female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Other">Other</option>
                        <option value="None">None</option>
                        </select>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <textarea class="form-control" rows="3" name="address"> {{$Userprofile->address?$Userprofile->address:"Empty"}}</textarea>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        </div>
                        </div>
                        <div class="mb-3 row mt-5">
                        <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </div>
                        </form>
                        <!--@else-->
                        <!--<h1>Profile Is Empty</h1>-->
                        <!--@endif-->
                     </div>    
 
@endsection

    
