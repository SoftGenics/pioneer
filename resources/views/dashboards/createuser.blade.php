@php
    $html_tag_data = ['scrollspy' => 'true'];
    $title = 'Add User';
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
@include('sweetalert::alert');
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

                    
                    <section class="scroll-section" id="basic">
                        <!-- Basic Start -->
                        <h2 class="small-title">Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <form action="{{route('add-user')}}" method="post">
                                    @csrf
                                  
                                    <div class="mb-3">
                                        <label class="form-label">Username
                                        </label>
                                        <input type="text" class="form-control"  name="username"/>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control"  name="password"/>
                                    </div>
                                   

                                    <div class="col-auto mb-3">
                                       <input type="hidden" name="emailvery" value="1"
                                        <label class="" for="autoSizingSelect" >Category</label>
                                        <select class="form-select" id="autoSizingSelect" name="category">
                                            <option selected>Choose...</option>
                                            <option value="1">Student</option>
                                            <option value="2">Tutor</option>
                                            <option value="3">Employer</option>
                                             <option value="4">job Shikhar</option>
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
