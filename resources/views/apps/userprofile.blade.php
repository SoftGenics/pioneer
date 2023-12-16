@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Admin Profile';
    $heading = ' Profile';
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
                <!-- <h2 class="small-title">Manager and Employees</h2> -->
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Lisa Jackson" />
                                </div>
                            </div>
                           

                          


                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="password" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Confirm Password</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="password" class="form-control" value="" />
                                </div>
                            </div>

                           
                           
                            
                        
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>


                            <form action="picUpload.php" method="post" enctype="multipart/form-data">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label"for="file">Profilepic</label>
                       
                             <input type="file" name="file" id="file"/>
                       
                       <input type="submit" name="upload" value="Upload" />
                       </form>


                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                           


                        </form>


                    </div>
                </div>
               
                <!-- Jobs End -->
            </div>
        </div>
    </div>
@endsection
