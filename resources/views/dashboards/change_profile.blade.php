@php
    $html_tag_data = [];
    $title = 'Dashboards School';
    $heading = 'School Dashboard';
    $description= 'Acorn elearning platform dashboard.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection 

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/dashboard.school.js"></script>
@endsection

@section('content')
<div class="card " style="background-color: coral; width:400px; heigth:400px; padding:20px;">
    <h1 class="card-heading btn btn-info mb-5">Plese Select Your Profile</h1>
    
   <form action="/profile-Edit" class="card-body" method="POST" enctype="multipart/form-data">
       @csrf
    
     <input type="file" name="profile" /><br><br>
     <button type="submit">Upload</button>
   </form> 
</div>

@endsection
