@php
    $html_tag_data = [];
    $title = 'Dashboards School';
    $heading = 'School Dashboard';
    $description = 'Acorn elearning platform dashboard.';
@endphp
@extends('layout', ['html_tag_data' => $html_tag_data, 'title' => $title, 'description' => $description])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/dashboard.school.js"></script>
@endsection

@section('content')
    <div class="container shadow-lg d-flex flex-column justify-content-center align-items-center p-4" style="width:100%;">
        <div class="row" style="width:100%;">
            <div class="text-center">
                <img src="https://imagetolink.com/ib/2RpEzmqjwL.jpg" alt="block" style="width:40%; border-radius: 25px;" />
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mt-4" style="width:100%;">
                <h1 class="pr-5" style="font-family: italic; font-size:25px; color:rgb(128, 0, 0);" >you are blocked please contact:- 0221 4576 30234</h1>
                <div class="d-flex">
                    <h1 class="pr-5" style="font-family: italic; font-size:20px; color:green;" >Name:-</h1>
                    <h1 style="margin-left:10px; font-family: italic; font-size:20px; color:green;">raaz</h1>
                </div>
                <div class="d-flex">
                    <h1 class="pr-5" style="font-family: italic; font-size:20px; color:green;">Email:-</h1>
                    <h1 style="margin-left:10px; font-family: italic; font-size:20px; color:green;">raaz8945@gmail.com</h1>
                </div>
            </div>
        </div>
       
    </div>

@endsection
