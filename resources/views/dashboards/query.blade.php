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
        <h1 class="btn-info text-center font-weight-bold mb-1 pb-2 shadow-lg" style="font-style: italic; color:rgb(201, 210, 219); border-radius:10px">
            Welcome to Query Section</h1>
        {{-- <div class="card-body">
            <form action="{{ url('create-query') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Emp_Name</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Employee_id</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" placeholder="Enter Your Id" name="user_id" />
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Date</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="date" class="form-control" name="date" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User_Query</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <textarea class="form-control" name="query" rows="5" placeholder="Plese Enter Your Query"></textarea>
                    </div>
                </div>

                <div class="mb-3 row mt-5">
                    <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-success ">Submit</button>

                    </div>
                </div>

            </form>
            @php 
            print_r($data)
            @endphp

        </div> --}}
    </div>
  
    <!--form end-->
    
    <!--chatting start-->
    
    @foreach ($data as $item)
        <div class="mt-4 p-2">
            <div class="card mb-1" style="background-color:rgb(24, 57, 57) ">
                <div class="card-body">
                    <h5>Name : {{$item['name']}}</h5>
                    <h5>Id : {{$item['user_id']}}</h5>
                    <div class="jj">
                        <h5 class="">Query -  {{$item['ticket']}}</h5>
                    </div>
                    <div class="pt-2 pb-2 ml-4 shadow-lg" >
                        <h5 style="color: rgb(214, 219, 59); font-weight:600;">Replayee -  {{$item['reply']}}</h5>
                    </div>
                </div>
            </div>
            <a href="{{url('/replayee')}}/{{$item->id}}" class="btn btn-info col-1 mt-0">replayee</a>
        </div>
    @endforeach
    <!--chatting end-->
@endsection
