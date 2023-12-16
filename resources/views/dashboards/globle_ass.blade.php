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
  
    <div class="card mb-5 ">
        <!--form start-->
        <h1 class="btn-info text-center font-weight-bold mb-1 pb-2" style="font-style: italic; color:rgb(201, 210, 219); ">
            Global Assignment</h1>
        <div class="card-body">
            <form action="{{ url('save-data') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Title</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" placeholder="Enter Your title" name="title" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User_id</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" placeholder="Enter Your user_id" name="user_id" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Assignment</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" placeholder="Enter Your assignment" name="assignment" />
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Date</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="date" class="form-control" name="date" placeholder="Plese Enter Your date"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Assingmenet_file</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input class="form-control" type="file" name="assingmenet_file" placeholder="Plese Enter Your assingmenet_file"/>
                    </div>
                </div>

                <div class="mb-3 row mt-5">
                    <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-info">Submit</button>

                    </div>
                </div>

            </form>
        </div>
    </div>
  
    <!--form end-->
    
   
@endsection
