<style>
    .pricingTable {
        text-align: center;
        background: #727cb6;
        padding-top: 5px;
        transition: all 0.5s ease-in-out 0s;
    }

    .pricingTable>.pricingTable-header {
        color: #fff;
        background: #273238;
        height: 190px;
        position: relative;
        transition: all 0.5s ease 0s;
    }

    .pricingTable>.pricingTable-header:after {
        content: "";
        border-bottom: 40px solid #727cb6;
        border-left: 263px solid transparent;
        position: absolute;
        right: 0px;
        bottom: 0px;
    }

    .pricingTable:hover .pricingTable-header {
        height: 230px;
        transition: all 0.5s ease 0s;
    }

    .pricingTable-header>.heading {
        display: block;
        padding: 20px 0;
    }

    .heading>h3 {
        margin: 0;
        text-transform: uppercase;
    }

    .pricingTable-header>.price-value {
        display: block;
        font-size: 60px;
        line-height: 60px;
    }

    .pricingTable-header>.price-value>.mo {
        font-size: 14px;
        display: block;
        line-height: 0px;
        text-transform: uppercase;
    }

    .pricingTable-header>.price-value>.currency {
        font-size: 24px;
        margin-right: 4px;
        position: relative;
        bottom: 30px;
    }

    .pricingTable>.pricingContent {
        text-transform: uppercase;
        color: #fff
    }

    .pricingTable>.pricingContent>ul {
        list-style: none;
        padding: 0;
    }

    .pricingTable>.pricingContent>ul>li {
        padding: 15px 0;
        border-bottom: 1px solid #fff;
    }

    .pricingTable>.pricingContent>ul>li:last-child {
        border: 0px none;
    }

    .pricingTable-sign-up {
        padding: 30px 0;
    }

    .pricingTable-sign-up>.btn-block {
        width: 80%;
        margin: 0 auto;
        background: #273238;
        border: 2px solid #fff;
        color: #fff;
        padding: 15px 12px;
        text-transform: uppercase;
        font-size: 18px;
    }

    .pricingTable-sign-up>.btn-block:hover {
        opacity: 0.9;
    }

    .pink {
        background: #ed687c;
    }

    .pink .pricingTable-header:after {
        border-bottom-color: #ed687c;
    }

    .orange {
        background: #e67e22;
    }

    .orange .pricingTable-header:after {
        border-bottom-color: #e67e22;
    }

    .blue {
        background: #3498db;
    }

    .blue .pricingTable-header:after {
        border-bottom-color: #3498db;
    }

    @media screen and (max-width: 1200px) {
        .pricingTable>.pricingTable-header:after {
            border-left: 215px solid transparent;
        }
    }

    @media screen and (max-width: 990px) {
        .pricingTable {
            margin-bottom: 20px;
        }

        .pricingTable>.pricingTable-header:after {
            border-left: 349px solid transparent;
        }
    }

    @media screen and (max-width: 480px) {
        .pricingTable {
            overflow: hidden;
        }

        .pricingTable>.pricingTable-header:after {
            border-left: 459px solid rgba(0, 0, 0, 0);
        }
    }
</style>







@php
    $html_tag_data = ['scrollspy' => 'true'];
    $title = 'Subscribtion for Students , teachers and Employees.';
    $description = '';
    $breadcrumbs = ['/' => 'Home'];
@endphp
@extends('layout', ['html_tag_data' => $html_tag_data, 'title' => $title, 'description' => $description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css" />
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/baguetteBox.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/blocks.gallery.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        @include('_layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                
                <div>
                    <a href="/Misc/create"><h1>+ Add</h1></a>
                    <!-- Small Gutters Start -->
                    <div class="breadcrumbs-text white-color">
                        <h2 class="page-title teacherz ">Teachers Zone</h2>

                    </div>

                    <div class="container">
                        <div class="row">
                            @php
                            $sub =  App\Models\subscription::all();
                            @endphp
                
                            <div class="col-md-4 col-sm-6">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <span class="heading">
                                            <h3>Basic</h3>
                                        </span>
                                        @foreach($sub as $item)
                                            @if($item['zone'] == 'Teacher' && $item['plan'] =='Basic')
                                            <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                            @endif
                                            </span></span>
                                         @endforeach
                                    </div>

                                    <div class="pricingContent">
                                        <ul>
                                            <li>You will get</li>
                                            <li>1 month Validity</li>
                                            <li>10 Students Can connect</li>
                                            <li>30 Student profile per week</li>
                                        </ul>
                                    </div><!-- /  CONTENT BOX-->
                                     @foreach($sub as $item)
                                            @if($item['zone'] == 'Teacher' && $item['plan'] =='Basic')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                </div>
                            </div>
                           
  
                            <div class="col-md-4 col-sm-6">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <span class="heading">
                                            <h3>Professional</h3>
                                        </span>
                                        @foreach($sub as $item)
                                            @if($item['zone'] == 'Teacher' && $item['plan'] =='Professional')
                                            <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                            @endif
                                            </span></span>
                                         @endforeach
                                    </div>

                                    <div class="pricingContent">
                                        <ul>
                                            <li>you will get</li>
                                            <li>3 month validity</li>
                                            <li>35 student can connect</li>
                                            <li>50 students profile per week</li>
                                        </ul>
                                    </div><!-- /  CONTENT BOX-->

                                     @foreach($sub as $item)
                                            @if($item['zone'] == 'Teacher' && $item['plan'] =='Professional')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <span class="heading">
                                            <h3>Unlimited</h3>
                                        </span>
                                       @foreach($sub as $item)
                                            @if($item['zone'] == 'Teacher' && $item['plan'] =='Unlimited')
                                            <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                            @endif
                                            </span></span>
                                         @endforeach
                                    </div>

                                    <div class="pricingContent">
                                        <ul>
                                            <li>You will get</li>
                                            <li>60 month Validity</li>
                                            <li>70 + Students Can connect</li>
                                            <li>Unlimited profile per week</li>
                                        </ul>
                                    </div><!-- /  CONTENT BOX-->

                                    @foreach($sub as $item)
                                            @if($item['zone'] == 'Teacher' && $item['plan'] =='Unlimited')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    <br><br><br>
                    <h1> Student Zone</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <span class="heading">
                                            <h3>basic</h3>
                                        </span>
                                        @foreach($sub as $item)
                                            @if($item['zone'] == 'Student' && $item['plan'] =='Basic')
                                            <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                            @endif
                                            </span></span>
                                         @endforeach
                                    </div>

                                    <div class="pricingContent">
                                        <ul>
                                            <li>you will get</li>
                                            <li>1 month validity</li>
                                            <li>10 teachers of particular subject can connect</li>
                                            <li>20 teachers profile per week</li>
                                        </ul>
                                    </div><!-- /  CONTENT BOX-->

                                     @foreach($sub as $item)
                                            @if($item['zone'] == 'Student' && $item['plan'] =='Basic')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <span class="heading">
                                            <h3>Professional</h3>
                                        </span>
                                         @foreach($sub as $item)
                                            @if($item['zone'] == 'Student' && $item['plan'] =='Professional')
                                            <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                            @endif
                                            </span></span>
                                         @endforeach
                                    </div>

                                    <div class="pricingContent">
                                        <ul>
                                            <li>you will get</li>
                                            <li>3 month validity</li>
                                            <li>35 teachers of 3 subjects can connect</li>
                                            <li>50 teachers profile per week</li>
                                        </ul>
                                    </div><!-- /  CONTENT BOX-->

                                     @foreach($sub as $item)
                                            @if($item['zone'] == 'Student' && $item['plan'] =='Professional')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="pricingTable">
                                    <div class="pricingTable-header">
                                        <span class="heading">
                                            <h3>unlimited</h3>
                                        </span>
                                         @foreach($sub as $item)
                                            @if($item['zone'] == 'Student' && $item['plan'] =='Unlimited')
                                            <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                            @endif
                                            </span></span>
                                         @endforeach
                                    </div>

                                    <div class="pricingContent">
                                        <ul>
                                            <li>you will get</li>
                                            <li>6 month validity</li>
                                            <li>70 + teachers can connect</li>
                                            <li>unlimited profile per week</li>
                                        </ul>
                                    </div><!-- /  CONTENT BOX-->

                                   @foreach($sub as $item)
                                            @if($item['zone'] == 'Student' && $item['plan'] =='Unlimited')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                </div>
                            </div>

                            </br>
                            </br>


                            <h1 class="mt-5"> Employees Zone</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="pricingTable">
                                            <div class="pricingTable-header">
                                                <span class="heading">
                                                    <h3>basic</h3>
                                                </span>
                                                 @foreach($sub as $item)
                                                   @if($item['zone'] == 'Employee' && $item['plan'] =='Basic')
                                                   <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                                   @endif
                                                   </span></span>
                                                @endforeach
                                            </div>

                                            <div class="pricingContent">
                                                <ul>
                                                    <li>you will get</li>
                                                    <li>1 month validity</li>
                                                    <li>10 teachers of particular subject can connect</li>
                                                    <li>20 teachers profile per week</li>
                                                </ul>
                                            </div><!-- /  CONTENT BOX-->

                                            @foreach($sub as $item)
                                            @if($item['zone'] == 'Employee' && $item['plan'] =='Basic')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="pricingTable">
                                            <div class="pricingTable-header">
                                                <span class="heading">
                                                    <h3>Professional</h3>
                                                </span>
                                                @foreach($sub as $item)
                                                   @if($item['zone'] == 'Employee' && $item['plan'] =='Professional')
                                                   <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                                   @endif
                                                   </span></span>
                                                @endforeach
                                            </div>

                                            <div class="pricingContent">
                                                <ul>
                                                    <li>you will get</li>
                                                    <li>3 month validity</li>
                                                    <li>35 teachers of 3 subjects can connect</li>
                                                    <li>50 teachers profile per week</li>
                                                </ul>
                                            </div><!-- /  CONTENT BOX-->

                                             @foreach($sub as $item)
                                            @if($item['zone'] == 'Employee' && $item['plan'] =='Professional')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="pricingTable">
                                            <div class="pricingTable-header">
                                                <span class="heading">
                                                    <h3>unlimited</h3>
                                                </span>
                                                 @foreach($sub as $item)
                                                   @if($item['zone'] == 'Employee' && $item['plan'] =='Unlimited')
                                                   <span class="price-value"><span class="currency">₹</span>{{$item['price']}}<span class="mo">
                                                   @endif
                                                   </span></span>
                                                @endforeach
                                            </div>

                                            <div class="pricingContent">
                                                <ul>
                                                    <li>you will get</li>
                                                    <li>6 month validity</li>
                                                    <li>70 + teachers can connect</li>
                                                    <li>unlimited profile per week</li>
                                                </ul>
                                            </div><!-- /  CONTENT BOX-->

                                             @foreach($sub as $item)
                                            @if($item['zone'] == 'Employee' && $item['plan'] =='Unlimited')
                                    <div class="pricingTable-sign-up">
                                        <a href="{{url("/Misc/Syllabus")}}/{{$item['id']}}" class="btn btn-block btn-default">Subscribtion</a>
                                    </div><!-- BUTTON BOX-->
                                     @endif
                                     @endforeach
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <br>
                                    <br>



                                    <!-- Scrollspy End -->
                                </div>
                            </div>
                        @endsection
