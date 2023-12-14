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
<div class="page-wrapper">



 


            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                      
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Post</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Post new requirements</h1> 
                    </div>
                    
                </div>
            </div>
           
            <div class="container-fluid">
               <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">New post</h4>
                        <h5 class="card-subtitle mb-3 pb-3 border-bottom">
                          Teacher requirements
                        </h5>
                        <form class="" action="{{route('add_requirment')}}" method="post" >
                          @csrf
                          <input type="hidden" value="1" name="user_id" >
                          <div class="form-floating mb-3">
                           
                            <input type="text" class="form-control border border-info" placeholder="" name="s_name" required>
                            <label><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm text-info fill-white me-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span class="border-start border-info ps-3">Student name</span></label>
                          </div>
                          <div class="form-floating mb-3 ">
                           
                            <input type="date" class="form-control  border border-info" id="date" name="date" required>
                            <label><svg  xmlns="http://www.w3.org/2000/svg"  style="color:#7bc5fd;" width="24" height="24" fill="currentcolor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                              <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Date</span></label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="number" class="form-control border border-info" placeholder="" name="rate" required>
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                              <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Rate per hour</span></label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="time" class="form-control  border border-info" id="stime" name="stime" required>
                            
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                              <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                              <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Start time</span></label>
                          </div>
                          <div class="form-floating mb-3">
                           
                              <input type="time" class="form-control border border-info" id="etime" name="etime" required>
                            
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                              <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                              <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">End Time</span></label>
                          </div>
                          <div class="form-floating mb-3"> 
                            <input type="text" class="form-control border border-info"  name="notes" required>
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                              <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                              <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Notes</span></label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="number" class="form-control border border-info" placeholder="" name="pincode" id="pin" required>
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                              <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                              <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Pincode</span></label>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                              <div class="mb-3">
                                <label class="control-label col-form-label">Class</label>
                             <input type="text" class="form-control border border-info"  name="class"  required>

                               
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                              <div class="mb-3">
                                <label class="control-label col-form-label">Subject</label>
                                <input type="text" class="form-control border border-info"  name="subject"  required>
                                
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                              <div class="mb-3">
                                <label class="control-label col-form-label">City</label>
                                <input type="text" class="form-control border border-info"  name="city" id="city"  required>
                                
                              </div>
                            </div>
                             <div class="col-sm-12 col-md-4">
                              <div class="mb-3">
                                <label class="control-label col-form-label">Mode</label>
                                <select class="form-select border border-info" name="mode" required>
                                  <option>Choose Your Option</option>
                                  <option>Online</option>
                                  <option>Offline</option>
                                 
                                </select>
                              </div>
                            </div>
                          </div>
      
                          <div class="d-md-flex align-items-center">
                            <div class="form-check mr-sm-2">
                              <input type="checkbox" class="form-check-input" id="sf2" value="check" required>
                              <label class="form-check-label" for="sf2">Checked</label>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                              <button type="submit" class="
                                  btn btn-info
                                  font-weight-medium
                                  rounded-pill
                                  px-4
                                ">
                                <div class="d-flex align-items-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send feather-sm fill-white me-2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                  Submit
                                </div>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="node_modules/spin.js/spin.js"></script>

    <script>
     $(document).ready(function() {
         $("#pin").keyup(function(){
             var pinc=$("#pin").val();
            $.ajax({
                url: 'https://api.postalpincode.in/pincode/'+ pinc,
                async: true,
                success: function(response) {
                    let data=response[0]['PostOffice'];
                    if(data){
                    $('#city').val(data[0]['District']);
                    }
                }
            });
  
});
 

        });
        
           

        
      
      
    </script>

        @stop
        
        