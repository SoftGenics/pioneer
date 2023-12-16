@php
    $html_tag_data = ['scrollspy' => 'true'];
    $title = 'Generate Coupon Code';
    $description = '';
    $breadcrumbs = ['/' => 'Home'];
@endphp
@extends('layout', ['html_tag_data' => $html_tag_data, 'title' => $title, 'description' => $description])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
@endsection

@section('js_page')
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


                    <!-- Images Vertical Start -->
                    <!-- Images Vertical End -->

                    <!-- Images Square Start -->
                    <section class="scroll-section" id="imagesSquare">
                        <h2 class="small-title">Generated coupon code List</h2>
                        <div class="row">
                            @php 
                            $cupons=\App\Models\material::all();
                            @endphp
@foreach($cupons as $cupon)

                            <div class="col-12 col-sm-auto mb-5 ">
                                <div class="card w-100 sw-sm-30 sh-30 hover-img-scale-up bg-success "style=" ">
                                    {{-- <img src="/img/course/small/12344.webp" class="card-img h-100 scale" alt="card image" /> --}}
                                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                           
                                            <div class="cta-1 text-black w-80 "style="font-size:20px;">{{$cupon->name}}</div>
                                            <div class="cta-1 text-black w-80 "style="font-size:20px;">{{$cupon->category}}</div>
                                            <div class="cta-1 text-black w-80 "style="font-size:30px;">{{$cupon->dicount}}%
                                            OFF</div>
                                            <div class="cta-1 text-black w-80 "style="font-size:10px;">{{$cupon->sdate}}</div>
                                            <div class="cta-1 text-black w-80 "style="font-size:10px;">{{$cupon->edate}}</div>

                                        
                                            <a href="#"
                                                class="btn btn-icon btn-icon-start btn-primary mt-3  w-100">
                                                {{-- <i data-acorn-icon="chevron-right"></i> --}}
                                                <span>{{$cupon->code}}</span>
                                            </a>
                                            <a href="{{URL('/ganeratecode/delete')}}/{{$cupon->id}}">   <button class="btn btn-sm btn-icon btn-icon-only btn-outline-danger mb-1" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin mb-3 d-inline-block text-white"><path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path><path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path><path d="M2 5H18M12 9V13M8 9V13"></path></svg>              
                                              </button></a>
                                        </div>
                                       
                                    </div>
                                  
                                </div>
                            </div>
                            @endforeach
                            
                    </section>
                    <!-- Images Square End -->
                    <div class="generator">



                        <!-- Title and Buttons Start -->

                        <!-- Title and Buttons End -->

                        <!-- Mail List Start -->
                        <section class="scroll-section" id="mailList">
                            <h2 class="small-title">Generate New coupon code </h2>
                            <div class="card mb-5">
                                <div class="card-body row g-0 text-center">
                                    <div class="col-12">
                                        <!-- <div class="cta-3">Ready to make bread?</div> -->
                                        <div class="mb-3 cta-3 text-primary"> Ready to Generate Code</div>


                                        <form action="{{route('ganerat-ecode')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Offer Name</label>
                                                <input type="text" class="form-control" name="name" />
                                            </div>


                                            <div class="mb-5">
                                                <label class="form-label">Start Date</label>
                                                <input type="date" class="form-control date-picker"
                                                    id="datePickerBasic" name="sdate" />
                                            </div>
                                            <div class="mb-5">
                                                <label class="form-label">End Date</label>
                                                <input type="date" class="form-control date-picker"
                                                    id="datePickerBasic" name="edate" />
                                            </div>
                                            <div class="col-auto mb-5">
                                                <label class="" for="autoSizingSelect"> Discount Percentage</label>
                                                <select class="form-select" id="autoSizingSelect" name="discount">
                                                    <option selected>Percentage...</option>
                                                    <option value="5">5%</option>
                                                    <option value="10">10%</option>
                                                    <option value="15">15%</option>
                                                    <option value="20">20%</option>
                                                    <option value="25">25%</option>
                                                    <option value="30">30%</option>
                                                    <option value="35">35%</option>
                                                    <option value="40">40%</option>
                                                    <option value="45">45%</option>
                                                    <option value="50">50%</option>
                                                    <option value="55">55%</option>
                                                    <option value="60">60%</option>
                                                    <option value="65">65%</option>
                                                    <option value="70">70%</option>
                                                    <option value="75">75%</option>
                                                    <option value="80">80%</option>
                                                    <option value="85">85%</option>
                                                    <option value="90">90%</option>
                                                    <option value="95">95%</option>
                                                    <option value="100">100%</option>
                                                </select>
                                            </div>

                                            <div class="col-auto mb-5">
                                                <label class="" for="autoSizingSelect">Category</label>
                                                <select class="form-select" id="autoSizingSelect" name="category">
                                                    <option selected>Category...</option>
                                                    <option value="2">Teacher</option>
                                                    <option value="1">Student</option>
                                                    <option value="3">Employee</option>
                                                    <option value="4">Jobsheekher</option>
                                                </select>
                                            </div>
                                    

                                        <button type="button" class="btn btn-primary" id="btnSubmit">Generate Code</button>


                                            <button type="submit" class="btn btn-primary">Save</button>
                                    

                                        <input  class=" btn-outline-primary me-2 codes mt-4 code" name="code" />
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card w-100 sh-25 sh-sm-19 mb-5">
                                <img src="/img/banner/cta-wide-4.webp" class="card-img h-100" alt="card image" />
                                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="cta-3 text-black">ENTER YOUR EMAIL BELOW TO UNLOCK?</div>
                                            <div class="mb-3 cta-3 text-primary">
                                                where should we send your 30% off?</div>
                                            <div class="row gx-2">
                                                <div class="col-12 col-sm-6">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <div class="text-muted mb-3 mb-sm-0">
                                                            <input type="email" class="form-control"
                                                                placeholder="E-mail" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-auto">
                                                    <a href="#"
                                                        class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                                        <i data-acorn-icon="chevron-right"></i>
                                                        <span>Send</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Mail List End -->


                    </div>
                    <!-- Content End -->
                </div>


            </div>
        </div>
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  $("#btnSubmit").click(function(){
    let length=8;
    let result = ' ';
    const charactersLength = characters.length;
    for ( let i = 0; i <length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    $(".code").val(result);
  });




});

    </script>
