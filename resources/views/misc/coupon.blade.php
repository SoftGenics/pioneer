@php
    $html_tag_data = ['scrollspy' => 'true'];
    $title = 'Generated coupon code By Employee';
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
                        <h2 class="small-title">Generated coupon code </h2>
                        <div class="row">
                            @php 
                            $cupons=\App\Models\material::all();
                            @endphp
@foreach($cupons as $cupon)
                            <div class="col-12 col-sm-auto mb-5 ">
                                <div class="card w-100 sw-sm-30 sh-40 hover-img-scale-up bg-success "style=" ">
                                    {{-- <img src="/img/course/small/12344.webp" class="card-img h-100 scale" alt="card image" /> --}}
                                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                            <div class="cta-1 text-black w-80 "style="font-size:20px;">{{$cupon->name}}</div>

                                            <div class="cta-1 text-black w-80 "style="font-size:40px;">{{$cupon->dicount}}%</div>
                                            <div class="cta-2 text-black w-80 "style="font-size:25px;">OFF</div>
                                            <div class="cta-1 text-black w-80 "style="font-size:10px;">{{$cupon->sdate}}</div>
                                            <div class="cta-1 text-black w-80 "style="font-size:10px;">{{$cupon->edate}}</div>


                                            <a href="#"
                                                class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link w-100">
                                                <i data-acorn-icon="chevron-right"></i>
                                                <span>{{$cupon->code}}</span>
                                            </a>
                                        @php
            $email = session()->get('admin');
            $admin = \App\Models\manager::where('email',$email->email)->first();
            
            @endphp
            @if($admin->usertype==2)
                                           <a href="{{url('ganeratecode/approve')}}/{{$cupon->id}}"> <button type="button" class="btn btn-danger w-100">{{$cupon->status?"Approved":"Approve"}}</button></a>
                                       @else
                                        <button type="button" class="btn btn-danger w-100" style="visibility:hidden">{{$cupon->status?"Approved":"Approve"}}</button>
                                       @endif()
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                          
                           
                    </section>


                    <!-- Content End -->
                </div>


            </div>
        </div>
    @endsection
