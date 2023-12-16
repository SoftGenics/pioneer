@php
    $html_tag_data = [];
    $title =  'Mailbox';
    $description = 'Very basic email application that contains a list page rendering, new&reply layouts and a static details page.';
    $breadcrumbs = ["/"=>"Home","/Apps"=>"Apps"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])



   
@section('content')

<link rel="stylesheet" href="/css/vendor/tagify.css"/>
<link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
<link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>

<meta name="csrf-token" content="{{ csrf_token() }}">


<script src="/js/vendor/movecontent.js"></script>
<script src="/js/vendor/quill.min.js"></script>
<script src="/js/vendor/quill.active.js"></script>
<script src="/js/vendor/tagify.min.js"></script>
<script src="/js/vendor/baguetteBox.min.js"></script>
<script src="/js/vendor/fuse.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>

<script src="/js/cs/checkall.js"></script>
<script src="/js/apps/mailbox.js"></script>

@php $sendMail=App\Models\SendMail::all();

@endphp



    <div class="container">
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row g-0">
        <div class="col-auto mb-2 mb-lg-0 me-auto">
            <div class="w-auto sw-md-25">
                <h1 class="mb-0 pb-0 display-4" id="title">Mailbox</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
<ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="https://acorn-laravel-classic-dashboard.coloredstrategies.com">Home</a></li>
                    <li class="breadcrumb-item"><a href="https://acorn-laravel-classic-dashboard.coloredstrategies.com/Apps">Apps</a></li>
            </ul>
</nav>
            </div>
        </div>
        <div class="col-auto d-flex d-lg-none align-items-start mb-2 mb-lg-0 order-lg-1">
            <button type="button" id="emailMenuButton" class="btn btn-primary btn-icon btn-icon-only ms-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-menu-left undefined"><path d="M5 13 2.35355 10.3536C2.15829 10.1583 2.15829 9.84171 2.35355 9.64645L5 7M2 3 18 3M11 10 18 10M2 17 18 17"></path></svg>
            </button>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"></div>
        <div class="col-12 col-md-6 col-lg d-flex align-items-start justify-content-start order-3 order-md-2">
          
            <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1 d-none" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-delay="{&quot;show&quot;:&quot;1000&quot;, &quot;hide&quot;:&quot;0&quot;}" id="backButton" data-bs-original-title="Back">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-arrow-left undefined"><path d="M9 17 2.35355 10.3536C2.15829 10.1583 2.15829 9.84171 2.35355 9.64645L9 3M18 10 3 10"></path></svg>
            </button>
           
            <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1  me-lg-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-delay="{&quot;show&quot;:&quot;1000&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-original-title="Delete">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined"><path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path><path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path><path d="M2 5H18M12 9V13M8 9V13"></path></svg>
            </button>
        </div>

        <div class="col-12 col-md-6 col-lg d-flex align-items-start justify-content-end mb-2 mb-md-0 order-md-3">
            <div class="w-100 w-md-auto search-input-container border border-separator">
                
                <input class="form-control search" placeholder="Search" autocomplete="off" id="myInput">
                <span class="search-magnifier-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-search undefined"><circle cx="9" cy="9" r="7"></circle><path d="M14 14L17.5 17.5"></path></svg>
  </span>
            </div>

            <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-1" id="newEmailButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-plus undefined"><path d="M10 17 10 3M3 10 17 10"></path></svg>
                <span>Compose</span>
            </button>
        </div>
    </div>
</div>
<!-- Title and Top Buttons End -->

<div class="row g-0">
    <div class="col-auto d-none d-lg-flex">
        <div class="nav flex-column sw-25 mt-n2" id="emailColumn">
                    <div class="menu-items">
                        <a class="nav-link px-0 mailbox-menu-item active" href="#" data-menuid="1" data-show="{&quot;folder&quot;: &quot;inbox&quot;, &quot;starred&quot;:&quot;All&quot;, &quot;important&quot;: &quot;All&quot;, &quot;tags&quot;: &quot;All&quot;}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-inbox me-2"><path d="M18 15V14.6836C18 14.0478 18 13.7299 17.9284 13.4696C17.7414 12.7897 17.2103 12.2586 16.5304 12.0716C16.2701 12 15.9522 12 15.3164 12C15.1025 12 14.9955 12 14.8986 12.0193C14.6476 12.0694 14.4254 12.2139 14.2777 12.4229C14.2206 12.5036 14.1772 12.6013 14.0903 12.7968L14 13C13.8256 13.3924 13.7384 13.5886 13.5935 13.7259C13.5051 13.8097 13.4021 13.8766 13.2897 13.9233C13.1053 14 12.8906 14 12.4612 14H7.53876C7.10937 14 6.89467 14 6.71032 13.9233C6.59788 13.8766 6.49492 13.8097 6.40652 13.7259C6.26159 13.5886 6.17439 13.3924 6 13L5.9097 12.7968L5.9097 12.7968C5.82281 12.6013 5.77937 12.5036 5.72235 12.4229C5.57463 12.2139 5.35238 12.0694 5.10138 12.0193C5.00448 12 4.89751 12 4.68357 12C4.04782 12 3.72994 12 3.46955 12.0716C2.78975 12.2586 2.25862 12.7897 2.07163 13.4696C2 13.7299 2 14.0478 2 14.6836V15C2 15.9319 2 16.3978 2.15224 16.7654C2.35523 17.2554 2.74458 17.6448 3.23463 17.8478C3.60218 18 4.06812 18 5 18H15C15.9319 18 16.3978 18 16.7654 17.8478C17.2554 17.6448 17.6448 17.2554 17.8478 16.7654C18 16.3978 18 15.9319 18 15Z"></path><path d="M16 12V5.5C16 4.09554 16 3.39331 15.6629 2.88886C15.517 2.67048 15.3295 2.48298 15.1111 2.33706C14.6067 2 13.9045 2 12.5 2H7.5C6.09554 2 5.39331 2 4.88886 2.33706C4.67048 2.48298 4.48298 2.67048 4.33706 2.88886C4 3.39331 4 4.09554 4 5.5V12"></path><path d="M7 6H13M7 9H13"></path></svg>
                            <span class="d-inline-block mt-1 align-middle">Inbox</span>
                        </a>
                       
                        <a class="nav-link px-0 mailbox-menu-item" href="#" data-menuid="4" data-show="{&quot;folder&quot;: &quot;sent&quot;, &quot;starred&quot;:&quot;All&quot;, &quot;important&quot;: &quot;All&quot;, &quot;tags&quot;: &quot;All&quot;}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-send me-2"><path d="M12.6593 16.3216L17.5346 3.86246C17.7992 3.18631 17.9315 2.84823 17.8211 2.64418C17.7749 2.55868 17.7047 2.48851 17.6192 2.44226C17.4152 2.3319 17.0771 2.46419 16.4009 2.72877L3.94174 7.60411L3.94173 7.60411C3.24079 7.87839 2.89031 8.01553 2.81677 8.23918C2.786 8.33274 2.78356 8.43332 2.80974 8.52827C2.87231 8.75522 3.2157 8.90925 3.90249 9.21731L8.53011 11.293L8.53012 11.293C8.65869 11.3507 8.72298 11.3795 8.77572 11.4235C8.79902 11.4429 8.82052 11.4644 8.83993 11.4877C8.88385 11.5404 8.91269 11.6047 8.97037 11.7333L11.0461 16.3609C11.3541 17.0477 11.5082 17.3911 11.7351 17.4537C11.8301 17.4798 11.9306 17.4774 12.0242 17.4466C12.2479 17.3731 12.385 17.0226 12.6593 16.3216Z"></path><path d="M11.8994 8.36395L9.07099 11.1924"></path></svg>
                            <span class="d-inline-block mt-1 align-middle">Sent</span>
                        </a>
                       
                        <a class="nav-link px-0 mailbox-menu-item" href="#" data-menuid="9" data-show="{&quot;folder&quot;: &quot;trash&quot;, &quot;starred&quot;:&quot;All&quot;, &quot;important&quot;: &quot;All&quot;, &quot;tags&quot;: &quot;All&quot;}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin me-2"><path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path><path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path><path d="M2 5H18M12 9V13M8 9V13"></path></svg>
                            <span class="d-inline-block mt-1 align-middle">Trash</span>
                        </a>
                    </div>
                </div>
    </div>

    <div class="col">
        <!-- List Items Start -->
        <div id="emailListContainer" class="">
            
            
            
            @foreach ($sendMail as $msg)   
    <div class="card hover-border-primary mb-2 sh-19 sh-md-6 email-list-item" data-id="1">
        <div class="card-body position-relative ps-4 py-3 py-md-0 h-100">
         
                
          
            <div class="row g-0 h-100 align-content-center">
                <div class="col-auto d-flex flex-column justify-content-md-center">
                    <label class="form-check mb-0 mt-1 me-2">
                        <input type="checkbox" class="form-check-input pe-none">
                    </label>
                </div>
                <a href="#" class="col h-100 stretched-link position-relative">
                    <div class="row gx-2 h-100">
                        <div class="col-12 col-md-2 d-flex align-items-center mb-0">
                            <p class="clamp-line mb-0 from text-body fw-bold" data-line="1" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 1;">{{$msg->subject}}</p>
                        </div>
                       
                        <div class="col-12 col-md d-flex align-items-center myList">
                            <p class=" clamp-line mb-0 detail " data-line="1" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 1;" id="myTable" 
                            >{{$msg->body}}</p>
                        </div>
                        <div class="col-12 col-md-1 d-flex align-items-center badges"><span class="badge opacity-75 text-decoration-none bg-outline-muted align-middle me-1">Project</span></div>
                        <div class="col-6 col-md-auto d-flex align-items-center justify-content-end order-2 order-md-1">
                            <div class="sw-6 text-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-star text-muted star"><path d="M9.09413 2.93747C9.45349 2.16887 10.5465 2.16887 10.9059 2.93747L12.4188 6.17326C12.5602 6.47565 12.8431 6.68755 13.173 6.73816L16.6418 7.2702C17.4452 7.39343 17.7738 8.37275 17.2073 8.9556L14.6304 11.6071C14.4098 11.834 14.3097 12.152 14.3604 12.4644L14.9594 16.1503C15.0933 16.9748 14.2174 17.5904 13.4871 17.1851L10.4852 15.5193C10.1834 15.3518 9.81658 15.3518 9.51477 15.5193L6.51293 17.1851C5.78261 17.5904 4.90669 16.9748 5.04064 16.1503L5.63956 12.4644C5.69032 12.152 5.5902 11.834 5.36961 11.6071L2.79266 8.9556C2.22619 8.37275 2.55478 7.39343 3.35816 7.2702L6.82695 6.73816C7.1569 6.68755 7.43984 6.47565 7.58122 6.17326L9.09413 2.93747Z"></path></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bell text-muted bell"><path opacity="0.9" d="M11 18H10H9"></path><path d="M6 7.38161V5.6718C6 4.25597 6.83142 2.97212 8.12338 2.39297C8.70126 2.13392 9.32738 2 9.96066 2H10.0393C10.6726 2 11.2987 2.13392 11.8766 2.39297C13.1686 2.97212 14 4.25597 14 5.6718V7.38161C14 8.44715 14.2374 9.4993 14.6949 10.4616L15.578 12.3193C15.8428 12.8762 15.8216 13.5267 15.5213 14.0653C15.1995 14.6423 14.5905 15 13.9297 15H6.07028C5.40953 15 4.80053 14.6423 4.4787 14.0653C4.17837 13.5267 4.15724 12.8762 4.42198 12.3193L5.30513 10.4616C5.76263 9.4993 6 8.44715 6 7.38161Z"></path></svg>
                            </div>
                        </div>
                        <div class="col-6 col-md-auto d-flex align-items-center justify-content-md-end mb-1 mb-md-0 order-1 order-md-2">
                            <p class="text-muted clamp-line mb-0 dateTime sw-6 text-start text-md-end" data-line="1" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 1;">{{$msg->created_at}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
     
    </div>
    @endforeach
   
    
   
    
  
    </div></div>
        <!-- List Items End -->

        <div id="emailCorrespondenceContainer" class="d-none">
            <!-- Static Email Correspondence Start -->
            <div class="row mb-3">
                <div class="col-12 col-sm ms-auto">
                    <h2 class="small-title d-inline-block h-auto">Recent Project Update</h2>
                </div>
                <div class="col-12 col-sm-auto">
                    
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="mb-4 pb-4 border-bottom border-separator-light">
                        <div class="row g-0 sh-sm-5 h-auto">
                            <div class="col-auto" data-bs-toggle="collapse" data-bs-target="#email1" role="button" aria-expanded="false" aria-controls="email1">
                                <img src="/img/profile/profile-1.webp" class="card-img rounded-xl sh-5 sw-5" alt="thumb">
                            </div>
                            <div class="col ps-3">
                                <div class="row h-100 g-2">
                                    <div class="col h-sm-100 d-flex flex-column justify-content-sm-center mb-1 mb-sm-0" data-bs-toggle="collapse" data-bs-target="#email1" role="button" aria-expanded="false" aria-controls="email1">
                                        <div>Joisse Kaycee</div>
                                        <div class="text-small text-muted">joissekaycee@gmail.com</div>
                                    </div>
                                    <div class="col-12 order-3 order-sm-0 col-sm-auto sw-sm-11 text-small text-muted text-sm-end d-flex flex-column justify-content-sm-center">
                                        25 Nov 2020 14:40
                                    </div>
                                    <div class="col-auto d-flex flex-column justify-content-center">
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-more-vertical undefined"><path d="M10 9C10.5523 9 11 9.44772 11 10V10C11 10.5523 10.5523 11 10 11V11C9.44772 11 9 10.5523 9 10V10C9 9.44772 9.44772 9 10 9V9zM10 2C10.5523 2 11 2.44772 11 3V3C11 3.55228 10.5523 4 10 4V4C9.44772 4 9 3.55228 9 3V3C9 2.44772 9.44772 2 10 2V2zM10 16C10.5523 16 11 16.4477 11 17V17C11 17.5523 10.5523 18 10 18V18C9.44772 18 9 17.5523 9 17V17C9 16.4477 9.44772 16 10 16V16z"></path></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end sw-40">
                                            <div class="px-4 py-3">
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">From</div>
                                                    <div class="col">joissekaycee@gmail.com</div>
                                                </div>
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">To</div>
                                                    <div class="col">ollihawkins@msn.com</div>
                                                </div>
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">Date</div>
                                                    <div class="col">04.12.2020 05:15</div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col-3 text-muted">Subject</div>
                                                    <div class="col">Recent Project Update</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="email1">
                            <div class="mt-4">
                                <p>Hi Olli,</p>
                                <p>
                                    Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing macaroon bear claw jelly toffee. Chocolate cake
                                    marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie macaroon sesame snaps cotton candy jelly
                                    <u>pudding lollipop caramels</u>
                                    marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate cake tootsie roll. Oat cake jujubes jelly-o jelly
                                    chupa chups lollipop jelly wafer soufflé.
                                </p>
                                <p>
                                    Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps lollipop macaroon.
                                    <a href="#">Icing tiramisu</a>
                                    oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice jelly beans jelly jelly sesame snaps brownie. Cheesecake
                                    chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops cupcake croissant liquorice donut cookie cake. Gingerbread
                                    biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar gummi bears dessert lemon drops gingerbread croissant.
                                    Donut candy jelly.
                                </p>
                                <p class="mb-0">
                                    Best Regards,
                                    <br>
                                    Joisse Kaycee
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 pb-4 border-bottom border-separator-light">
                        <div class="row g-0 sh-sm-5 h-auto">
                            <div class="col-auto" data-bs-toggle="collapse" data-bs-target="#email2" role="button" aria-expanded="false" aria-controls="email2">
                                <img src="/img/profile/profile-5.webp" class="card-img rounded-xl sh-5 sw-5" alt="thumb">
                            </div>
                            <div class="col ps-3">
                                <div class="row h-100 g-2">
                                    <div class="col h-sm-100 d-flex flex-column justify-content-sm-center mb-1 mb-sm-0" data-bs-toggle="collapse" data-bs-target="#email2" role="button" aria-expanded="false" aria-controls="email2">
                                        <div>Olli Hawkins</div>
                                        <div class="text-small text-muted">ollihawkins@msn.com</div>
                                    </div>
                                    <div class="col-12 order-3 order-sm-0 col-sm-auto sw-sm-11 text-small text-muted text-sm-end d-flex flex-column justify-content-sm-center">
                                        25 Nov 2020 14:40
                                    </div>
                                    <div class="col-auto d-flex flex-column justify-content-center">
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-more-vertical undefined"><path d="M10 9C10.5523 9 11 9.44772 11 10V10C11 10.5523 10.5523 11 10 11V11C9.44772 11 9 10.5523 9 10V10C9 9.44772 9.44772 9 10 9V9zM10 2C10.5523 2 11 2.44772 11 3V3C11 3.55228 10.5523 4 10 4V4C9.44772 4 9 3.55228 9 3V3C9 2.44772 9.44772 2 10 2V2zM10 16C10.5523 16 11 16.4477 11 17V17C11 17.5523 10.5523 18 10 18V18C9.44772 18 9 17.5523 9 17V17C9 16.4477 9.44772 16 10 16V16z"></path></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end sw-40">
                                            <div class="px-4 py-3">
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">From</div>
                                                    <div class="col">joissekaycee@gmail.com</div>
                                                </div>
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">To</div>
                                                    <div class="col">ollihawkins@msn.com</div>
                                                </div>
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">Date</div>
                                                    <div class="col">04.12.2020 05:15</div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col-3 text-muted">Subject</div>
                                                    <div class="col">Recent Project Update</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="email2">
                            <div class="mt-4">
                                <p>Hi Joisse,</p>
                                <p>
                                    Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps lollipop macaroon.
                                    <a href="#">Icing tiramisu</a>
                                    oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice jelly beans jelly jelly sesame snaps brownie.
                                </p>
                                <p class="mb-0">
                                    Best Regards,
                                    <br>
                                    Olli Hawkins
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row g-0 sh-sm-5 h-auto mb-4">
                            <div class="col-auto">
                                <img src="/img/profile/profile-1.webp" class="card-img rounded-xl sh-5 sw-5" alt="thumb">
                            </div>
                            <div class="col ps-3">
                                <div class="row h-100 g-2">
                                    <div class="col h-sm-100 d-flex flex-column justify-content-sm-center mb-1 mb-sm-0">
                                        <div>Joisse Kaycee</div>
                                        <div class="text-small text-muted">joissekaycee@gmail.com</div>
                                    </div>
                                    <div class="col-12 order-3 order-sm-0 col-sm-auto sw-sm-11 text-small text-muted text-sm-end d-flex flex-column justify-content-sm-center">
                                        25 Nov 2020 14:40
                                    </div>
                                    <div class="col-auto d-flex flex-column justify-content-center">
                                        <button class="btn btn-sm btn-icon btn-icon-only btn-outline-primary ms-1" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-more-vertical undefined"><path d="M10 9C10.5523 9 11 9.44772 11 10V10C11 10.5523 10.5523 11 10 11V11C9.44772 11 9 10.5523 9 10V10C9 9.44772 9.44772 9 10 9V9zM10 2C10.5523 2 11 2.44772 11 3V3C11 3.55228 10.5523 4 10 4V4C9.44772 4 9 3.55228 9 3V3C9 2.44772 9.44772 2 10 2V2zM10 16C10.5523 16 11 16.4477 11 17V17C11 17.5523 10.5523 18 10 18V18C9.44772 18 9 17.5523 9 17V17C9 16.4477 9.44772 16 10 16V16z"></path></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end sw-40">
                                            <div class="px-4 py-3">
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">From</div>
                                                    <div class="col">joissekaycee@gmail.com</div>
                                                </div>
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">To</div>
                                                    <div class="col">ollihawkins@msn.com</div>
                                                </div>
                                                <div class="row g-2 mb-2">
                                                    <div class="col-3 text-muted">Date</div>
                                                    <div class="col">04.12.2020 05:15</div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col-3 text-muted">Subject</div>
                                                    <div class="col">Recent Project Update</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Hi,</p>
                            <p>
                                Toffee croissant icing toffee. Sweet roll chupa chups marshmallow muffin liquorice chupa chups soufflé bonbon. Liquorice gummi bears
                                cake donut chocolate lollipop gummi bears. Cotton candy cupcake ice cream gummies dessert muffin chocolate jelly. Danish brownie
                                chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop cheesecake gummi bears cheesecake. Cake jujubes soufflé.
                            </p>
                            <p>
                                Cake chocolate bar biscuit sweet roll liquorice jelly jujubes. Gingerbread icing macaroon bear claw jelly toffee. Chocolate cake
                                marshmallow muffin wafer. Pastry cake tart apple pie bear claw sweet. Apple pie macaroon sesame snaps cotton candy jelly
                                <u>pudding lollipop caramels</u>
                                marshmallow. Powder halvah dessert ice cream. Carrot cake gingerbread chocolate cake tootsie roll. Oat cake jujubes jelly-o jelly
                                chupa chups lollipop jelly wafer soufflé.
                            </p>
                            <p>
                                Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps lollipop macaroon.
                                <a href="#">Icing tiramisu</a>
                                oat cake chocolate cake marzipan pudding danish gummies. Dragée liquorice jelly beans jelly jelly sesame snaps brownie. Cheesecake
                                chocolate cake sweet roll cupcake dragée croissant muffin. Lemon drops cupcake croissant liquorice donut cookie cake. Gingerbread
                                biscuit bear claw marzipan tiramisu topping. Jelly-o croissant chocolate bar gummi bears dessert lemon drops gingerbread croissant.
                                Donut candy jelly.
                            </p>
                            <p class="mb-0">
                                Best Regards,
                                <br>
                                Joisse
                            </p>

                            <div class="mt-4 d-flex flex-row flex-wrap">
                                <div class="sw-30 me-2 mb-2">
                                    <div class="row g-0 rounded-sm sh-8 border">
                                        <div class="col-auto">
                                            <a href="/img/product/large/product-1.webp" data-caption="cake.webp" class="lightbox">
                                                <img src="https://acorn-laravel-classic-dashboard.coloredstrategies.com/img/product/small/product-2.webp" class="card-img card-img-horizontal rounded-sm-start sw-10" alt="product image 1">
                                            </a>
                                        </div>
                                        <div class="col rounded-sm-end d-flex flex-column justify-content-center px-3">
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-0 clamp-line" data-line="1" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 1;">cake.webp</p>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-delay="{&quot;show&quot;:&quot;1000&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-original-title="Download">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-download text-alternate"><path d="M2 14V14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18H14.5C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5V14"></path><path d="M14 10 10.7071 13.2929C10.3166 13.6834 9.68342 13.6834 9.29289 13.2929L6 10M10 2 10 13"></path></svg>
                                                </a>
                                            </div>
                                            <div class="text-small text-primary">346 KB</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-30 me-2 mb-2">
                                    <div class="row g-0 rounded-sm sh-8 border">
                                        <div class="col-auto">
                                            <a href="/img/product/large/product-2.webp" data-caption="pastry.webp" class="lightbox">
                                                <img src="https://acorn-laravel-classic-dashboard.coloredstrategies.com/img/product/small/product-1.webp" class="card-img card-img-horizontal rounded-sm-start sw-10" alt="product image 2">
                                            </a>
                                        </div>
                                        <div class="col rounded-sm-end d-flex flex-column justify-content-center px-3">
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-0 clamp-line" data-line="1" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 1;">pastry.webp</p>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-delay="{&quot;show&quot;:&quot;1000&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-original-title="Download">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-download text-alternate"><path d="M2 14V14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18H14.5C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5V14"></path><path d="M14 10 10.7071 13.2929C10.3166 13.6834 9.68342 13.6834 9.29289 13.2929L6 10M10 2 10 13"></path></svg>
                                                </a>
                                            </div>
                                            <div class="text-small text-primary">521 KB</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-30 me-2 mb-2">
                                    <div class="row g-0 rounded-sm sh-8 border">
                                        <div class="col-auto">
                                            <div class="sw-10 d-flex justify-content-center align-items-center h-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-file-text text-primary"><path d="M6.5 18H13.5C14.9045 18 15.6067 18 16.1111 17.6629C16.3295 17.517 16.517 17.3295 16.6629 17.1111C17 16.6067 17 15.9045 17 14.5V7.44975C17 6.83775 17 6.53175 16.9139 6.24786C16.8759 6.12249 16.8256 6.00117 16.7638 5.88563C16.624 5.62399 16.4076 5.40762 15.9749 4.97487L14.0251 3.02513L14.0251 3.02512C13.5924 2.59238 13.376 2.37601 13.1144 2.23616C12.9988 2.1744 12.8775 2.12415 12.7521 2.08612C12.4682 2 12.1622 2 11.5503 2H6.5C5.09554 2 4.39331 2 3.88886 2.33706C3.67048 2.48298 3.48298 2.67048 3.33706 2.88886C3 3.39331 3 4.09554 3 5.5V14.5C3 15.9045 3 16.6067 3.33706 17.1111C3.48298 17.3295 3.67048 17.517 3.88886 17.6629C4.39331 18 5.09554 18 6.5 18Z"></path><path d="M13 6 7 6M13 10 7 10M13 14 7 14"></path></svg>
                                            </div>
                                        </div>
                                        <div class="col rounded-sm-end d-flex flex-column justify-content-center pe-3">
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-0 clamp-line" data-line="1" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 1;">nice_recipe.doc</p>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-delay="{&quot;show&quot;:&quot;1000&quot;, &quot;hide&quot;:&quot;0&quot;}" data-bs-original-title="Download">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-download text-alternate"><path d="M2 14V14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18H14.5C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5V14"></path><path d="M14 10 10.7071 13.2929C10.3166 13.6834 9.68342 13.6834 9.29289 13.2929L6 10M10 2 10 13"></path></svg>
                                                </a>
                                            </div>
                                            <div class="text-small text-primary">521 KB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Email Correspondence End -->

            <!-- Bottom Buttons Start -->
            <div class="mt-5" id="detailBottomButtons">
                <button class="btn btn-icon btn-icon-end btn-foreground hover-outline shadow mb-1 me-1" type="button" id="replyButton">
                    <span>Reply</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-arrow-top-left undefined"><path d="M7 12L2.35355 7.35355C2.15829 7.15829 2.15829 6.84171 2.35355 6.64645L7 2"></path><path d="M18 18V11C18 9.93913 17.5786 8.92172 16.8284 8.17157C16.0783 7.42143 15.0609 7 14 7H2.5"></path></svg>
                </button>
                <button class="btn btn-icon btn-icon-end btn-foreground hover-outline shadow mb-1 me-1" type="button" id="forwardButton">
                    <span>Forward</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-arrow-top-right undefined"><path d="M13 12L17.6464 7.35355C17.8417 7.15829 17.8417 6.84171 17.6464 6.64645L13 2"></path><path d="M2 18V11C2 9.93913 2.42143 8.92172 3.17157 8.17157C3.92172 7.42143 4.93913 7 6 7H17.5"></path></svg>
                </button>
                <button class="btn btn-icon btn-icon-only btn-foreground hover-outline shadow mb-1 me-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-more-horizontal undefined"><path d="M9 10C9 9.44772 9.44772 9 10 9V9C10.5523 9 11 9.44772 11 10V10C11 10.5523 10.5523 11 10 11V11C9.44772 11 9 10.5523 9 10V10zM2 10C2 9.44772 2.44772 9 3 9V9C3.55228 9 4 9.44772 4 10V10C4 10.5523 3.55228 11 3 11V11C2.44772 11 2 10.5523 2 10V10zM16 10C16 9.44772 16.4477 9 17 9V9C17.5523 9 18 9.44772 18 10V10C18 10.5523 17.5523 11 17 11V11C16.4477 11 16 10.5523 16 10V10z"></path></svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow">
                  
                    <a class="dropdown-item" href="#">Delete</a>
                   
                </div>
            </div>
            <!-- Bottom Buttons End -->

            <!-- Reply Email Start -->
            <div class="card mt-5 d-none" id="replyEmailForm">
                <div class="card-body">
                    <div class="mb-3 filled w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-email undefined"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg>
                        <tags class="tagify" tabindex="-1">
    <tag title="ollihawkins@msn.com" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" __isvalid="true" value="ollihawkins@msn.com"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">ollihawkins@msn.com</span></div></tag><span contenteditable="" data-placeholder="&ZeroWidthSpace;" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
</tags><input id="replyEmailAddress" name="tagsFilled" placeholder="" value="ollihawkins@msn.com">
                    </div>
                    <div class="mb-3 filled custom-control-container editor-container">
                        <div class="html-editor sh-15 ql-container ql-bubble" id="quillEditorFilledEmail"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Answer"><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><span class="ql-tooltip-arrow"></span><div class="ql-tooltip-editor"><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-close"></a></div><div class="ql-toolbar"><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button><button type="button" class="ql-strike"><svg viewBox="0 0 18 18"> <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line> <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path> <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path> </svg></button></span><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="4"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="5"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="6"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option value="3"></option><option value="4"></option><option value="5"></option><option value="6"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-list" value="ordered"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button></span><span class="ql-formats"><span class="ql-size ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item" data-value="small"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="large"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="huge"></span></span></span><select class="ql-size" style="display: none;"><option value="small"></option><option selected="selected"></option><option value="large"></option><option value="huge"></option></select></span><span class="ql-formats"><span class="ql-color ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-2"><svg viewBox="0 0 18 18"> <line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15" y2="15"></line> <polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"></polyline> <line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"></line> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-2"><span tabindex="0" role="button" class="ql-picker-item ql-selected ql-primary"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffff" style="background-color: rgb(255, 255, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span></span><select class="ql-color" style="display: none;"><option selected="selected"></option><option value="#e60000"></option><option value="#ff9900"></option><option value="#ffff00"></option><option value="#008a00"></option><option value="#0066cc"></option><option value="#9933ff"></option><option value="#ffffff"></option><option value="#facccc"></option><option value="#ffebcc"></option><option value="#ffffcc"></option><option value="#cce8cc"></option><option value="#cce0f5"></option><option value="#ebd6ff"></option><option value="#bbbbbb"></option><option value="#f06666"></option><option value="#ffc266"></option><option value="#ffff66"></option><option value="#66b966"></option><option value="#66a3e0"></option><option value="#c285ff"></option><option value="#888888"></option><option value="#a10000"></option><option value="#b26b00"></option><option value="#b2b200"></option><option value="#006100"></option><option value="#0047b2"></option><option value="#6b24b2"></option><option value="#444444"></option><option value="#5c0000"></option><option value="#663d00"></option><option value="#666600"></option><option value="#003700"></option><option value="#002966"></option><option value="#3d1466"></option></select></span><span class="ql-formats"><span class="ql-align ql-picker ql-icon-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-3"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-3"><span tabindex="0" role="button" class="ql-picker-item ql-selected"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="center"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line> <line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="right"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line> <line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="justify"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"></line> <line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"></line> </svg></span></span></span><select class="ql-align" style="display: none;"><option selected="selected"></option><option value="center"></option><option value="right"></option><option value="justify"></option></select></span></div></div></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-file-text undefined"><path d="M6.5 18H13.5C14.9045 18 15.6067 18 16.1111 17.6629C16.3295 17.517 16.517 17.3295 16.6629 17.1111C17 16.6067 17 15.9045 17 14.5V7.44975C17 6.83775 17 6.53175 16.9139 6.24786C16.8759 6.12249 16.8256 6.00117 16.7638 5.88563C16.624 5.62399 16.4076 5.40762 15.9749 4.97487L14.0251 3.02513L14.0251 3.02512C13.5924 2.59238 13.376 2.37601 13.1144 2.23616C12.9988 2.1744 12.8775 2.12415 12.7521 2.08612C12.4682 2 12.1622 2 11.5503 2H6.5C5.09554 2 4.39331 2 3.88886 2.33706C3.67048 2.48298 3.48298 2.67048 3.33706 2.88886C3 3.39331 3 4.09554 3 5.5V14.5C3 15.9045 3 16.6067 3.33706 17.1111C3.48298 17.3295 3.67048 17.517 3.88886 17.6629C4.39331 18 5.09554 18 6.5 18Z"></path><path d="M13 6 7 6M13 10 7 10M13 14 7 14"></path></svg>
                    </div>
                    <button class="btn btn-icon btn-icon-end btn-outline-primary" type="button">
                        <span>Send</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-send undefined"><path d="M12.6593 16.3216L17.5346 3.86246C17.7992 3.18631 17.9315 2.84823 17.8211 2.64418C17.7749 2.55868 17.7047 2.48851 17.6192 2.44226C17.4152 2.3319 17.0771 2.46419 16.4009 2.72877L3.94174 7.60411L3.94173 7.60411C3.24079 7.87839 2.89031 8.01553 2.81677 8.23918C2.786 8.33274 2.78356 8.43332 2.80974 8.52827C2.87231 8.75522 3.2157 8.90925 3.90249 9.21731L8.53011 11.293L8.53012 11.293C8.65869 11.3507 8.72298 11.3795 8.77572 11.4235C8.79902 11.4429 8.82052 11.4644 8.83993 11.4877C8.88385 11.5404 8.91269 11.6047 8.97037 11.7333L11.0461 16.3609C11.3541 17.0477 11.5082 17.3911 11.7351 17.4537C11.8301 17.4798 11.9306 17.4774 12.0242 17.4466C12.2479 17.3731 12.385 17.0226 12.6593 16.3216Z"></path><path d="M11.8994 8.36395L9.07099 11.1924"></path></svg>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-attachment undefined"><path d="M17.617 9.4853L10.026 17.0763C10.026 17.0763 7.36397 19.7383 4.18199 16.5564C1.00001 13.3744 3.66204 10.7124 3.66204 10.7124L11.2531 3.12134C11.2531 3.12134 13.3744 1.00002 15.4957 3.12134C17.617 5.24265 15.4957 7.36398 15.4957 7.36398L8.41634 14.435C8.41634 14.435 7.36397 15.4957 6.30123 14.433C5.23849 13.3702 6.30331 12.3137 6.30331 12.3137L13.3744 5.24266"></path></svg>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1 float-end" id="replyDeleteButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined"><path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path><path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path><path d="M2 5H18M12 9V13M8 9V13"></path></svg>
                    </button>
                </div>
            </div>
            <!-- Reply Email End -->
        </div>
    </div>
</div>

<!-- Mailbox Category Menu Content Start -->
<div class="modal modal-right fade" id="emailMenuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row g-0 sh-5">
                    <div class="col-auto">
                        <img src="/img/profile/profile-1.webp" class="card-img rounded-xl sh-5 sw-5" alt="thumb">
                    </div>
                    <div class="col">
                        <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                            <div class="d-flex flex-column">
                                <div>Joisse Kaycee</div>
                                <div class="text-small text-muted">joissekaycee@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Content of below will be moved to #emailColumn or back in here based on the data-move-breakpoint attribute below -->
                <!-- Content will be here if the screen size is smaller than lg -->
                <div id="emailMoveContent" data-move-target="#emailColumn" data-move-breakpoint="lg"></div>
            </div>
        </div>
    </div>
</div>
<!-- Mailbox Category Menu Content End -->

<!-- New Email Modal Start -->
<div class="modal fade show" id="newEmailModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-semi-full modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{Route('send_Mail')}}" method="post" >
                    @csrf
                <h5 class="modal-title">New Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column">
                <div class="mb-3 filled w-100 d-flex flex-column">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-email undefined"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg> --}}
      <input type="email"  placeholder="To" name="usermail" >
                </div>
                <div class="mb-3 filled w-100 d-flex flex-column">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bookmark undefined"><path d="M16 13.3987V5.5C16 4.09554 16 3.39331 15.6629 2.88886C15.517 2.67048 15.3295 2.48298 15.1111 2.33706C14.6067 2 13.9045 2 12.5 2L7.5 2C6.09554 2 5.39331 2 4.88886 2.33706C4.67048 2.48298 4.48298 2.67048 4.33706 2.88886C4 3.39331 4 4.09554 4 5.5L4 13.3987C4 15.3061 4 16.2598 4.33863 16.765C4.75692 17.3892 5.48971 17.7262 6.23579 17.6376C6.83978 17.5659 7.56387 16.9453 9.01205 15.704C9.33079 15.4307 9.49016 15.2941 9.66509 15.232C9.88172 15.155 10.1183 15.155 10.3349 15.232C10.5098 15.2941 10.6692 15.4307 10.9879 15.704C12.4361 16.9453 13.1602 17.5659 13.7642 17.6376C14.5103 17.7262 15.2431 17.3892 15.6614 16.765C16 16.2598 16 15.3061 16 13.3987Z"></path></svg>
                    <input class="form-control" placeholder="Subject" name="subject">
                </div>
                <div class="mb-3 filled custom-control-container editor-container d-flex flex-column flex-grow-1 mb-0">
                    <div class="html-editor h-100 ql-container ql-bubble" id="quillEditorFilledEmailNew">
                        <textarea name="body" ></textarea>
                        <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Message"><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><span class="ql-tooltip-arrow"></span><div class="ql-tooltip-editor"><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL" ><a class="ql-close"></a></div><div class="ql-toolbar"><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>  </svg></button><button type="button" class="ql-strike"><svg viewBox="0 0 18 18"> <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line> <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path> <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path> </svg></button></span><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-4"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-4"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span>
                        <span tabindex="0" role="button" class="ql-picker-item" data-value="4"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="5"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="6"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option value="3"></option><option value="4"></option><option value="5"></option><option value="6"></option><option selected="selected"></option>
                        </select></span><span class="ql-formats"><button type="button" class="ql-list" value="ordered"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> 
                            <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button></span><span class="ql-formats"><span class="ql-size ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-5"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-5"><span tabindex="0" role="button" class="ql-picker-item" data-value="small"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="large"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="huge"></span></span></span><select class="ql-size" style="display: none;"><option value="small"></option><option selected="selected"></option><option value="large"></option><option value="huge"></option></select></span><span class="ql-formats"><span class="ql-color ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-6"><svg viewBox="0 0 18 18"> <line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15" y2="15"></line> <polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"></polyline> <line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"></line> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-6"><span tabindex="0" role="button" class="ql-picker-item ql-selected ql-primary"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffff" style="background-color: rgb(255, 255, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span></span><select class="ql-color" style="display: none;"><option selected="selected"></option>
                                <option value="#e60000"></option><option value="#ff9900"></option><option value="#ffff00"></option><option value="#008a00"></option><option value="#0066cc"></option><option value="#9933ff"></option><option value="#ffffff"></option><option value="#facccc"></option><option value="#ffebcc"></option><option value="#ffffcc"></option><option value="#cce8cc"></option><option value="#cce0f5"></option><option value="#ebd6ff"></option><option value="#bbbbbb"></option><option value="#f06666"></option><option value="#ffc266"></option><option value="#ffff66"></option><option value="#66b966"></option><option value="#66a3e0"></option><option value="#c285ff"></option><option value="#888888"></option><option value="#a10000"></option><option value="#b26b00"></option><option value="#b2b200"></option><option value="#006100"></option><option value="#0047b2"></option><option value="#6b24b2"></option><option value="#444444"></option><option value="#5c0000"></option><option value="#663d00"></option><option value="#666600"></option><option value="#003700"></option><option value="#002966"></option><option value="#3d1466"></option></select></span><span class="ql-formats"><span class="ql-align ql-picker ql-icon-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-7"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-7"><span tabindex="0" role="button" class="ql-picker-item ql-selected"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="center"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line> <line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="right"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line> <line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="justify"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"></line> <line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"></line> </svg></span></span></span><select class="ql-align" style="display: none;"><option selected="selected"></option><option value="center"></option><option value="right"></option><option value="justify"></option></select></span></div></div></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-file-text undefined"><path d="M6.5 18H13.5C14.9045 18 15.6067 18 16.1111 17.6629C16.3295 17.517 16.517 17.3295 16.6629 17.1111C17 16.6067 17 15.9045 17 14.5V7.44975C17 6.83775 17 6.53175 16.9139 6.24786C16.8759 6.12249 16.8256 6.00117 16.7638 5.88563C16.624 5.62399 16.4076 5.40762 15.9749 4.97487L14.0251 3.02513L14.0251 3.02512C13.5924 2.59238 13.376 2.37601 13.1144 2.23616C12.9988 2.1744 12.8775 2.12415 12.7521 2.08612C12.4682 2 12.1622 2 11.5503 2H6.5C5.09554 2 4.39331 2 3.88886 2.33706C3.67048 2.48298 3.48298 2.67048 3.33706 2.88886C3 3.39331 3 4.09554 3 5.5V14.5C3 15.9045 3 16.6067 3.33706 17.1111C3.48298 17.3295 3.67048 17.517 3.88886 17.6629C4.39331 18 5.09554 18 6.5 18Z"></path><path d="M13 6 7 6M13 10 7 10M13 14 7 14"></path></svg>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button class="btn btn-icon btn-icon-end btn-outline-primary" type="submit" >
                    <span>Sends</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-send undefined"><path d="M12.6593 16.3216L17.5346 3.86246C17.7992 3.18631 17.9315 2.84823 17.8211 2.64418C17.7749 2.55868 17.7047 2.48851 17.6192 2.44226C17.4152 2.3319 17.0771 2.46419 16.4009 2.72877L3.94174 7.60411L3.94173 7.60411C3.24079 7.87839 2.89031 8.01553 2.81677 8.23918C2.786 8.33274 2.78356 8.43332 2.80974 8.52827C2.87231 8.75522 3.2157 8.90925 3.90249 9.21731L8.53011 11.293L8.53012 11.293C8.65869 11.3507 8.72298 11.3795 8.77572 11.4235C8.79902 11.4429 8.82052 11.4644 8.83993 11.4877C8.88385 11.5404 8.91269 11.6047 8.97037 11.7333L11.0461 16.3609C11.3541 17.0477 11.5082 17.3911 11.7351 17.4537C11.8301 17.4798 11.9306 17.4774 12.0242 17.4466C12.2479 17.3731 12.385 17.0226 12.6593 16.3216Z"></path><path d="M11.8994 8.36395L9.07099 11.1924"></path></svg>
                </button>
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-attachment undefined"><path d="M17.617 9.4853L10.026 17.0763C10.026 17.0763 7.36397 19.7383 4.18199 16.5564C1.00001 13.3744 3.66204 10.7124 3.66204 10.7124L11.2531 3.12134C11.2531 3.12134 13.3744 1.00002 15.4957 3.12134C17.617 5.24265 15.4957 7.36398 15.4957 7.36398L8.41634 14.435C8.41634 14.435 7.36397 15.4957 6.30123 14.433C5.23849 13.3702 6.30331 12.3137 6.30331 12.3137L13.3744 5.24266"></path></svg>
                </button>
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only me-1 float-end" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined"><path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path><path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path><path d="M2 5H18M12 9V13M8 9V13"></path></svg>
                </button>
                
            </div>
        
        </div>

    </form>

    </div>
    
</div>
<!-- New Email Modal End -->

<!-- List Item Template Start -->
<template id="emailListTemplate">
    <div class="card hover-border-primary mb-2 sh-19 sh-md-6 email-list-item">
        <div class="card-body position-relative ps-4 py-3 py-md-0 h-100">
            <div class="row g-0 h-100 align-content-center">
                <div class="col-auto d-flex flex-column justify-content-md-center">
                    <label class="form-check mb-0 mt-1 me-2">
                        <input type="checkbox" class="form-check-input pe-none">
                    </label>
                </div>
                <a href="#" class="col h-100 stretched-link position-relative">
                    <div class="row gx-2 h-100">
                        <div class="col-12 col-md-2 d-flex align-items-center mb-0">
                            <p class="clamp-line mb-0 from" data-line="1"></p>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0">
                            <p class="clamp-line mb-0 title" data-line="1"></p>
                        </div>
                        <div class="col-12 col-md d-flex align-items-center text-muted">
                            <p class="text-muted clamp-line mb-0 detail" data-line="1"></p>
                        </div>
                        <div class="col-12 col-md-1 d-flex align-items-center badges"></div>
                        <div class="col-6 col-md-auto d-flex align-items-center justify-content-end order-2 order-md-1">
                            <div class="sw-6 text-end">
                                <i data-acorn-icon="star" class="text-muted star invisible"></i>
                                <i data-acorn-icon="bell" class="text-muted bell invisible"></i>
                            </div>
                        </div>
                        <div class="col-6 col-md-auto d-flex align-items-center justify-content-md-end mb-1 mb-md-0 order-1 order-md-2">
                            <p class="text-muted clamp-line mb-0 dateTime sw-6 text-start text-md-end" data-line="1"></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>
<!-- List Item Template End -->

<!-- Badge Template for List Start -->
<template id="emailListBadgeTemplate">
    <span class="badge opacity-75 text-decoration-none bg-outline-muted align-middle me-1"></span>
</template>
<!-- Badge Template for List End -->
</div>
<script>
    
    $( "#newEmailButton" ).click(function() {
        $("#newEmailModal").css("display", "block");
});
$( ".btn-close" ).click(function() {
        $("#newEmailModal").css("display", "none");
});
$( "#emailListContainer" ).click(function() {
    $("#emailCorrespondenceContainer").removeClass("d-none");
    $("#emailListContainer").addClass("d-none");
    $("#backButton").removeClass("d-none");

});
$( "#backButton" ).click(function() {
    $("#emailListContainer").removeClass("d-none");
    $("#emailCorrespondenceContainer").addClass("d-none");
});
 
$( "#forwardButton" ).click(function() {
    $("#replyEmailForm").removeClass("d-none");
    $("#detailBottomButtons").addClass("d-none");
  
});
$( "#replyButton" ).click(function() {
    $("#replyEmailForm").removeClass("d-none");
    $("#detailBottomButtons").addClass("d-none");
  
});
$( "#replyDeleteButton" ).click(function() {
    $("#detailBottomButtons").removeClass("d-none");
    $("#replyEmailForm").addClass("d-none");
  
});




</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){ 
   
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on("click","#block", function(e){

            
            

            $.ajax({
                method:"POST",
                url:`{{url('block_user')}}`,
                data:{'status':'true'},
                success:function(res){
                    console.log("hllo")
                  if(res){
                   console.log(res)
                     //location.href = 'signin.php';
                  }
                  else{
                     console.log("Error");
                      
                  }
                }
            });
            
        })
    })
</script>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
       
        var value = $(this).val().toLowerCase();
        $(".myList").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      $("#mycity").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".mycity").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

    });
    </script>

@endsection
