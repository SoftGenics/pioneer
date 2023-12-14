                    @php
    $html_tag_data = ['scrollspy' => 'true'];
    $title = 'Edit Subscribtion prices.';
    $description = '';
    $breadcrumbs = ['/' => 'Home'];
@endphp
@extends('layout', ['html_tag_data' => $html_tag_data, 'title' => $title, 'description' => $description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css" />
    <link rel="stylesheet" href="/css/vendor/tagify.css" />
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/js/vendor/tagify.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/forms/layouts.js"></script>
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

                    @php 
                    
                    $plan=App\Models\subscription::where('id',$id)->first();
                    $id=$plan->id;
                    
                    @endphp
                    
                    <section class="scroll-section" id="basic">
                        <!-- Basic Start -->
                        <h2 class="small-title">Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form action="{{url('/edit-subscription')}}/{{$id}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Subscription Prices</label>
                                        <input type="text" class="form-control"  name="price" value="{{$plan->price}}" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Validity
                                        </label>
                                        <input type="text" class="form-control"  name="validity" value="{{$plan->validity}}"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Required</label>
                                        <input type="text" class="form-control"  name="required" value="{{$plan->required}}"/>
                                    </div>
                                   

                                    <div class="mb-5">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control date-picker" id="datePickerBasic" name="date" {{$plan->created_at}} />
                                    </div>
                                    <div class="col-auto mb-5">
                                        <label class="" for="autoSizingSelect">User type</label>
                                        <select class="form-select" id="autoSizingSelect" name="zone">
                                            <option selected>{{$plan->zone}}</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label class="" for="autoSizingSelect" >Subscribtion Plan</label>
                                        <select class="form-select" id="autoSizingSelect" name="plan">
                                            <option selected>{{$plan->plan}}</option>
                                            
                                        </select>
                                    </div>

                                  




                                 
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->





                    <!-- Help Text End -->
                </div>
                <!-- Content End -->
            </div>


            <!-- Scrollspy End -->
        </div>
    </div>
@endsection
