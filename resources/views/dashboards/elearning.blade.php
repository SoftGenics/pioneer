<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>

@php
     $html_tag_data = [];
    $title = 'Dashboards Elearning';
    $heading = 'E-learning Dashboard';
    $description= 'Acorn elear ni ng platform dashboard.' ;   

@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])


@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
@endsection


@section('js_vendor')
    <script src
="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection


@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.elearning.js"></script>
@endsection


<style>
    /* html, body {
   background-color: #222;
   font-family: 'Helvetica Neue', Helvetica, sans-serif;
   color: rgba(255,255,255,0.75);
 } */
 
 .headerr {
   margin: 60px auto 0;
   width: 550px;
   text-align: center;
   font-size: 36px;
 }
 .base {
   position: absolute;
   bottom: 0;
   left: -35px;
   width: 825px;
   height: 20px;
   background-color: rgba(255,255,255,0.05);
   -moz-transform: skew(45deg);
   -o-transform: skew(45deg);
   -webkit-transform: skew(45deg);
 }
 
 .chart-container {
   position: relative;
   z-index: 0;
   margin: 100px auto 0;
   width: 800px;
   height: 500px;
   /*border: solid 1px #bbb;*/
   background-color: rgba(255,255,255,0.055);
 /*  -webkit-box-shadow: 0 8px 6px -6px #444;
 */}
 
 .chart-container:after {
   content:"";
   position: absolute;
   top: -15px;
   left: 15px;
   height: 15px;
   width: 800px;
   background-color: rgba(255,255,255,0.055);
   -moz-transform: skew(45deg);
   -o-transform: skew(45deg);
   -webkit-transform: skew(45deg);
   transform: skew(45deg);
 }
 
 
 /* .chart-container > table {
     position: absolute;
     top: 0;
     left: -145px;
     z-index: -955;
     width: 168%;
     height: 100%;
 } */
 
 
 .chart-container > table {
   position: absolute;
   top: 0;
   left: -149px;
   z-index: -999;
   width: 149%;
   height: 100%;
 }
 
 .chart-container table  tr  td {
   width: 100px;
   height: 98x;
   border: solid 1px  rgba(255,255,255,0.05);
 
 }
 
 .meter {
   position: relative;
   top: 0px;
   left: -200px;
   height: 500px;
   width: 30px;
   background-color: rgba(20,113,163,0.5);
   border-left: solid 1px rgba(255,255,255,0.5);
 
 }
 
 .meter:before {
   content: "";
   position: absolute;
   top: -7px;
   left: -15px;
   width: 15px;
   height: 500px;
   background-color: rgba(14,81,117,0.9);
    -moz-transform: skewY(45deg);
   -o-transform: skewY(45deg);
   -webkit-transform: skewY(45deg);
   transform: skewY(45deg);
 }
 
 .meter:after {
   content: "";
   position: absolute;
   top: -15px;
   left: -8px;
   width: 30px;
   height: 15px;
   background-color: rgba(13,171,217,0.45);
    -moz-transform: skewX(45deg);
   -o-transform: skewX(45deg);
   -webkit-transform: skewX(45deg);
   transform: skewX(45deg);
 }
 
 .meter li {
   position: relative;
   list-style-type: none;
   height: 99px;
   border-bottom: solid 1px #0DABD9;
 }
 
 .meter li:before {
   content: "";
   position: absolute;
   top: -15px;
   left: -30px;
   width: 30px;
   height: 100%;
   border-bottom: solid 1px #0DABD9;
   -moz-transform: skewY(45deg);
   -o-transform: skewY(45deg);
   -webkit-transform: skewY(45deg);
   transform: skewY(45deg);
 }
 
 .meter li:last-child {
   border-bottom: none;
 }
 
 .meter li:last-child:before {
   border: 0;
 }
 
 .meter li div {
   position: absolute;
   left: -132px;
   top: 0;
   padding: 55px 0 0;
   width: 80px;
   color: #656565;
   text-align: right;
   font-weight: 300;
   font-size: 14px;
   line-height: 18px;
   text-transform: uppercase;
 }
 
 
 /* ---------------------
   Vertical Bars
 ----------------------*/
 
 .bar {
   float: left;
   position: absolute;
   bottom: 0;
   z-index: 99;
   height: 35%;
   width: 40px;
   margin: 0 -140px;
   background-color: rgba(107,255,49,0.35);
 }
 
 .bar:before {
   content: "";
   position: absolute;
   left: -15px;
   bottom: 7px;
   height: 100%;
   width: 15px;
   background-color: rgba(107,255,49,0.25);
   -webkit-transform: skewY(45deg);
 }
 
 .bar:after {
   content: "";
   position: absolute;
   top: -15px;
   left: -8px;
   width: 40px;
   height: 15px;
   background-color: rgba(107,255,49,0.45);
   -moz-transform: skewX(45deg);
   -o-transform: skewX(45deg);
   -webkit-transform: skewX(45deg);
   transform: skewX(45deg);
 }
 
 .two {
   left: 12.5%;
   height: 57%;
 }
 
 .three {
   left: 25%;
   height: 85%;
 }
 
 .four {
   left: 37.5%;
   height: 35%;
 }
 
 .five {
   left: 50%;
   height: 63%;
 }
 
 .six {
   left: 62.5%;
   height: 45%;
 }
 
 .seven {
   left: 75%;
   height: 90%;
 }
 
 .eight {
   left: 87.5%;
   height: 32%;
 }
 .nine {
   left: 100.5%;
   height: 45%;
 }
 
 .ten {
   left: 112.5%;
   height: 60%;
 }
 .eleven {
   left: 125%;
   height: 75%;
 }
 .twelve {
   left: 137.5%;
   height: 50%;
 }
 /**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
/* 
* Always set the map height explicitly to define the size of the div element
* that contains the map. 
*/
#map {
  height: 100%;
}

/* 
* Optional: Makes the sample page fill the window. 
*/
#map {
    height: 400px; /* The height is 400 pixels */
    width: 100%; /* The width is the width of the web page */
}
 
 </style>



@section('content')
@include('sweetalert::alert')
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <div class="container">
       
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Dashboards/Elearning">Elearning Dashboards</a></li>
                          
                            <!-- <li class="breadcrumb-item"><a href="/Dashboards/Elearning">Dashboards</a></li> -->
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->
      @php
        $alluser = \App\Models\User::all()->sortByDesc('id');
        $block=\App\Models\User::where('status','0')->get();
        $student = \App\Models\User::where('category','1')->get();
        $tutor = \App\Models\User::where('category','2')->get();
        $jobseekher =\App\Models\User::where('category','4')->get();
        $employee = \App\Models\User::where('category','3')->get();
        
$latest_id = \App\Models\User::latest()->first();
        $total=count($alluser);
        
        $deleted_user=$latest_id->id-$total;
        
        $stu=count($student);
        $tut=count($tutor);
        $emp=count($employee);
        $job=count($jobseekher);

        
        

         @endphp
        <!-- Content Start -->

        <div class="row">
            <!-- Continue Learning Start -->
            <div class="col-xl-6 mb-5">
                <h2 class="small-title">
</h2>
                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="3">
                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/List" class="d-block position-relative h-100">
                                        <img src="/img/course/small/student.jpg" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/List" class="font-heading mb-1"> No of Jobseeker applied</a>
                                                <div class="text-muted">{{$job}}</div>
                                               
       
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Teacher" class="d-block position-relative h-100">
                                        <img src="/img/course/small/13.jpg" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="{{url('/teachlist')}}" class="font-heading mb-1">Total no of teacher</a>
                                                <div class="text-muted">{{number_format($tut)}}</div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Students" class="d-block position-relative h-100">
                                        <img src="/img/course/small/12.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/Students" class="font-heading mb-1">Total no of Students</a>
                                                <div class="text-muted">{{number_format($stu)}}</div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Employee" class="d-block position-relative h-100">
                                        <img src="/img/course/small/Employee.jpg" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/Employee" class="font-heading mb-1">No of Employers</a>
                                                <div class="text-muted">{{number_format($emp)}}</div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            <!-- Continue Learning End -->

            <!-- Recommended Courses Start -->
            <div class="col-xl-6 mb-5 mt-5 ">
                
                <h2 class="small-title">USER SECTION</h2>

                
     
                <div class="card w-100 sh-50 sh-md-40  hover-img-scale-up position-relative ">
                <div class="col-xl-12 mb-5 ">
                        <section class="scroll-section" id="teams">
                            <!-- <h2 class="small-title">Teams</h2> -->
                            <div class="card h-100-card">
                                <div class="card-body mb-n2 scroll-out">
                                    <div class="scroll-by-count os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-overflow os-host-overflow-y" data-count="6" data-childselector="div.item" data-subtractmargin="false" style="height: 288px;"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -15px; width: 783px; height: 287px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 15px; height: 100%; width: 100%;">
                                        <div class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item mb-5 mt-5">
                                            <div class="col-auto d-flex align-items-center mb-md-0">
                                                <div class="sw-12">
                                                    <div class="sw-4 mb-1 d-inline-block">
                                                        <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kathryn Mengel" aria-label="Kathryn Mengel">
                                                    </div>
                                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                        <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kirby Peters" aria-label="Kirby Peters">
                                                    </div>
                                                    <div class="sw-4 sh-4 ms-n3 bg-separator-light d-inline-flex justify-content-center align-items-center rounded-xl">
                                                        <div class="fw-bold text-small text-primary cursor-default" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kenny Carlson, Noor Wilder, Henri Pate">
                                                            3+
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                    <div class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                        <div>No of User who Joined</div>
                                                        <div class="text-muted text-small">{{$total}} Members</div>
                                                    </div>
                                                    <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                       
                                                    </div>
                                                    <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item mb-5">
                                            <div class="col-auto d-flex align-items-center mb-md-0">
                                                <div class="sw-12">
                                                    <div class="sw-4 mb-1 d-inline-block">
                                                        <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kathryn Mengel" aria-label="Kathryn Mengel">
                                                    </div>
                                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                        <img src="/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kirby Peters" aria-label="Kirby Peters">
                                                    </div>
                                                    <div class="sw-4 sh-4 ms-n3 bg-separator-light d-inline-flex justify-content-center align-items-center rounded-xl">
                                                        <div class="fw-bold text-small text-primary cursor-default" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Henri Pate">
                                                            1+
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                    <div class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                        <div>No of User who Deleted</div>
                                                        <div class="text-muted text-small">{{$deleted_user}} Members</div>
                                                    </div>
                                                    <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                        
                                                    </div>
                                                    <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row g-0 align-items-start align-content-start align-content-md-center align-items-md-center sh-13 sh-md-5 mb-2 item">
                                            <div class="col-auto d-flex align-items-center mb-md-0">
                                                <div class="sw-12">
                                                    <div class="sw-4 mb-1 d-inline-block">
                                                        <img src="/img/profile/profile-7.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kathryn Mengel" aria-label="Kathryn Mengel">
                                                    </div>
                                                    <div class="sw-4 mb-1 d-inline-block ms-n3">
                                                        <img src="/img/profile/profile-8.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kirby Peters" aria-label="Kirby Peters">
                                                    </div>
                                                    <div class="sw-4 sh-4 ms-n3 bg-separator-light d-inline-flex justify-content-center align-items-center rounded-xl">
                                                        <div class="fw-bold text-small text-primary cursor-default" data-delay="{&quot;show&quot;:&quot;500&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sade Cooley, Ellouise Powers">
                                                            2+
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row g-0 h-100 align-items-start align-content-start align-content-md-center align-items-md-center">
                                                    <div class="col-12 col-md-6 d-flex flex-column pe-2 mb-2 mb-md-0">
                                                        <div>No of User who Block</div>
                                                        <div class="text-muted text-small">{{count($block)}} Members</div>
                                                    </div>
                                                    <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end pe-3">
                                                       
                                                    </div>
                                                    <div class="col-auto col-md-3 d-flex flex-column align-items-start align-items-md-end">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                      
                                       
                                    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical" style="height: calc(100% - 8px);"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="height: 87.8049%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- Recommended Courses End -->
        </div>

        <!-- Achievements Start -->
        <h2 class="small-title">Requirements Posts</h2>
        <div class="row gx-2">
            <div class="col-12 p-0">
                <div class="glide" id="glideAchievements">
                    <div class="glide__track" data-glide-el="track">
                           <div class="glide__slides d-flex">
                            <a class="card-body text-center" href="{{url('Dashboards/jobs')}}">
                            <div class="glide__slide xl-6">
                                <div class="card mb-6  sh-25">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-4 align-items-center justify-content-center rounded-xl position-relative mt-3">
                                            <i data-acorn-icon="badge" class="text-white"></i>
                                            <div class="achievement bg position-absolute">
                                                
                                            </div>
                                            <div class="achievement level position-absolute">
                                               
                                            </div>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Jobs</p>
                                        <p class="text-center mb-0 d-flex text-primary">{{count(\App\Models\enewjobs::all())}}</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <a class="card-body text-center" href="{{url('Dashboards/tuitions')}}">
                            <div class="glide__slide xl-6">
                                <div class="card mb-6  sh-25">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-4 align-items-center justify-content-center rounded-xl position-relative mt-3">
                                            <i data-acorn-icon="prize" class="text-white"></i>
                                            <div class="achievement bg position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    
                                                </svg>
                                            </div>
                                            <div class="achievement level position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                   
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Tuitions</p>
                                        <p class="text-center mb-0 d-flex text-primary">{{count(\App\Models\srequirement::all())}}</p>
                                    </div>
                                </div>
                            </div>
                     
                         </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Achievements End -->

        <!-- Trending Courses Start -->
        <!-- <h2 class="small-title">Trending Courses</h2> -->
       
        <div class="row">
        
        
            <div class="container">
             
  <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsCk2XIM9B1f0p546pmW1ULrNTGfQ6g8o&callback=initMap&v=weekly"
      defer
    ></script>

   
         
            
               
             </div>
        <!-- Trending Courses End -->
        
                 @php
            $tutortime=0;
             $studenttime=0;
              $jobshikhertime=0;
               $emptime=0;
               $newaccount=0;
                $weekccount=0;
               $today=Carbon\Carbon::createFromFormat('Y-m-d H:s:i',now());
               $tod=$today->format('y-m-d');
               
                 $todday=$today->format('d');
              $usersaccount=App\Models\User::all();
              foreach($usersaccount as $usersacc){
              $usersacc=$usersacc->created_at;
               $usersacweek=$usersacc->format('d');
               $usersac=$usersacc->format('y-m-d');
               $date1 = Carbon\Carbon::parse($usersac);
$date2 = Carbon\Carbon::parse($tod);
$difference = $date1->diffInDays($date2);
               if($usersac==$tod){
              $newaccount++;}
              if($difference<7){
              $weekccount++;}
              }
               
                $totalvisitor= App\Models\time_calculations::all();
          
           $todayonline= count($user=App\Models\User::where('login_at','>',0)->get());
           
            @endphp
       
             @foreach($totalvisitor  as $time)
                    
                            
                                 @php 
                                 $td=$time->created_at;
                                $td=$td->format('y-m-d');
                                  
                    
                   
                             $user=App\Models\User::find($time->user_id); 
                                 if(isset($user) && $user->category=='2'){
                                 $to = Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $time->start_time?$time->start_time:'0000-00-00 00:00:00');
        $from = Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $time->created_at);
  
        $result = $to->diff($from)->format('%H:%I:%S');
        $d = explode(':', $result);
    $tutortime+= ($d[0] * 3600) + ($d[1] * 60) + $d[2];
    }
    if( isset($user) && $user->category=='1'){
                                 $to = Carbon\Carbon::createFromFormat('Y-m-d H:s:i',  $time->start_time?$time->start_time:'0000-00-00 00:00:00');
        $from = Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $time->created_at);
  
        $result = $to->diff($from)->format('%H:%I:%S');
        $d = explode(':', $result);
     $studenttime+= ($d[0] * 3600) + ($d[1] * 60) + $d[2];
    }
    if( isset($user) && $user->category=='3'){
                                 $to = Carbon\Carbon::createFromFormat('Y-m-d H:s:i',  $time->start_time?$time->start_time:'0000-00-00 00:00:00');
        $from = Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $time->created_at);
  
        $result = $to->diff($from)->format('%H:%I:%S');
        $d = explode(':', $result);
     $emptime+= ($d[0] * 3600) + ($d[1] * 60) + $d[2];
    }
                
                 if(isset($user) && $user->category=='4'){
                                 $to = Carbon\Carbon::createFromFormat('Y-m-d H:s:i',  $time->start_time?$time->start_time:'0000-00-00 00:00:00');
        $from = Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $time->created_at);
  
        $result = $to->diff($from)->format('%H:%I:%S');
        $d = explode(':', $result);
     $jobshikhertime+= ($d[0] * 3600) + ($d[1] * 60) + $d[2];
    }
                                 
                                 @endphp
                                 
                           
                             
                             @endforeach
                             
                             
       

       
        <div class="row">
            <!-- Related Subjects Start -->
            <div class="col-xl-4 mb-5">
                <h2 class="small-title">Related Subjects</h2>
                <div class="row g-2">
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="/Course/week">
                                <!-- <i data-acorn-icon="cupcake" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Weekly Create Account</p>
                                <div class="text-extra-small fw-medium text-muted">{{$weekccount}}</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="/Course/today">
                                <!-- <i data-acorn-icon="loaf" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Today Create Account</p>
                                <div class="text-extra-small fw-medium text-muted">{{$newaccount}}</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <!-- <i data-acorn-icon="radish" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Visitors Online</p>
                                <div class="text-extra-small fw-medium text-muted"> {{count($totalvisitor)}}</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="#">
                                <!-- <i data-acorn-icon="banana" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Today Online </p>
                                <div class="text-extra-small fw-medium text-muted"> {{$todayonline}} Users</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Related Subjects End -->

            <!-- Your Time Start -->
            <div class="col-xl-4 mb-5">
                <h2 class="small-title"></h2>
                  <div id="donutchart" style="width:100%; height: 320px;"></div>
                <!--<div class="card sh-40 h-xl-100-card">-->
                <!--    <div class="card-body h-100">-->
                <!--        <div class="h-100">-->
                <!--            <canvas id="donutchart"></canvas>-->
                            
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
              
            </div>
            <!--Tutor-->
   
            <!-- Your Time End -->
            

            {{-- <!-- Paths Start -->
            <div class="col-xl-4 mb-5">
                <h2 class="small-title">Paths</h2>
                <div class="card sh-40 h-xl-100-card">
                    <div class="card-body d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <img src="/img/illustration/icon-analytics.webp" class="theme-filter mb-3" alt="launch" />
                            <p class="mb-3">You are not on any path!</p>
                            <a href="/Path/List" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>Take a Path</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Paths End -->
        </div>

        <!-- Content End -->
    </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="node_modules/spin.js/spin.js"></script>

    <script>
     let data;
        $(document).ready(function() {
          $.ajax({
                url: '/all-user-location', //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    
                    lat=response.lat;
                    lng=response.lng;
                    
                    data=response;
                    console.log(data);
                   window.initMap = initMap(data); 
                    
      
                   
                } 
     
            });
           
     
        });
     
                
           function initMap(data) {
               let lat=data;
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: { lat:20.593683, lng:78.962883},
        });

        setMarkers(map,lat);
      }

      // Data for the markers consisting of a name, a LatLng and a zIndex for the
      // order in which these markers should display on top of each other.
            
      
     

      function setMarkers(map,lat) {
        // Adds markers to the map.
        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.
        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        const image = {
          url: "https://softgenics.in/images/searching-loading-unscreen.gif",
          // This marker is 20 pixels wide by 32 pixels high.
          scaledSize: new google.maps.Size(20, 20),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32),
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        const shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: "poly",
        };

        
         
      
                          for (let i = 0; i < lat.length; i++) {
                              let user=0;
                               for (let j = 0; j < lat.length; j++) {
                                   if(lat[i].lat==lat[j].lat)
                                   user++
                               }
         // const beach = lat[i];

          new google.maps.Marker({
            position: { lat:parseFloat(lat[i].lat) , lng: parseFloat(lat[i].lng) },
            map,
            icon: image,
            shape: shape,
            title: ` Total Users:${user}`,
            zIndex: 5,
          });
         }
          
            
      
      }

     
           
                   
           


     
    </script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
          
       let tutor=  {{ $tutortime}}
         let stud   = {{$studenttime}}
         let job   =  {{$jobshikhertime}}
           let emp=   {{ $emptime}}
          
          
          
          
          
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Tutor',     tutor],
          ['Student',     stud],
          ['Employer',  emp],
          ['Job Seeker', job],
          
        ]);

        var options = {
          title: 'Average Time',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>


    
@endsection
