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

    <div class="card mb-5" >
        {{-- <pre>
            {{$data}}
        </pre> --}}
        <h1 class="btn-success text-center font-weight-bold mb-1 pb-2" style="font-family: italic; color:rgb(201, 210, 219); ">Welcome to update Room</h1>
        <div class="card-body">
            <form action="{{ url('edit') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Emp_Name</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{$data?$data['name']:"Empty"}}" />
                    </div>
                </div> 


                <div class="mb-3 row">
                    {{-- <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Employee_id</label> --}}
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="hidden" class="form-control"  placeholder="Enter Your Id" name="id"  value="{{$data?$data['id']:"Empty"}}"/>
                    </div>
                </div> 
                 

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Task</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control"  placeholder="Enter Your Task" name="task"  value="{{$data?$data['task']:"Empty"}}"/>
                    </div>
                </div>
               
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Date</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="date" class="form-control" name="date" value="{{$data?$data['date']:"Empty"}}"/>
                    </div>
                </div>



                <div class="mb-3 row mt-5">
                    <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-success ">Submit</button>
                      
                        
                    </div>
                </div>

            </form>

        </div>
    </div>

    
@endsection
