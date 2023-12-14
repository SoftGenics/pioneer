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
        <h1 class="btn-success text-center font-weight-bold mb-1 pb-2" style="font-family: italic; color:rgb(201, 210, 219); ">Welcome to Record Room</h1>
        <div class="card-body">
            <form action="{{ url('update-record') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Emp_Name</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name"  />
                    </div>
                </div> 

                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Employee_id</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control"  placeholder="Enter Your Id" name="user_id" />
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Task</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control"  placeholder="Enter Your Task" name="task" />
                    </div>
                </div>
               
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Date</label>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="date" class="form-control" name="date"  />
                    </div>
                </div>
                
              
                {{-- <label class="col-lg-2 col-md-3 col-sm-4 col-form-label"for="file">Profilepic</label>--}}

                {{-- <input type="file" name="file" />  --}}

                {{-- <input type="submit" name="upload" value="Upload"  /> --}}



                <div class="mb-3 row mt-5">
                    <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-success ">Submit</button>
                       
                    </div>
                </div>

            </form>

        </div>
    </div>

    <div class="card mb-5 shadow-lg" style="overflow-x: scroll; overflow-y: scroll; height: 400px;">
        <table class="table">
            <thead >
                <tr>
                    <th>Emp_Name</th>
                    <th>Employee_id</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th>update</th>
                    {{-- <th>Delete</th> --}}
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)   
                <tr >
                    <td scope="row">{{$item->name}}</td>                   
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->task}}</td>
                    <td>{{$item->date}}</td>
                    <td><a href="{{url('/edit')}}/{{$item->id}}">Edit</a></td>
                    {{-- <td><a href="{{url('/delete')}}/{{$item->id}}">delite</a></td> --}}
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    
@endsection
