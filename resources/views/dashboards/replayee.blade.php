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

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-5 ">
                <!--form start-->
                <h1 class="btn-info text-center font-weight-bold mb-1 pb-2" style="font-style: italic; color:rgb(201, 210, 219); ">
                    Welcome to Replayee Section</h1>
                <div class="card-body">
                    <form action="{{ url('/replayee') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <div class="col-sm-8 col-md-9 col-lg-10">
                                <input type="hidden" class="form-control"  placeholder="Enter Your Id" name="id"  value="{{$data?$data['id']:"Empty"}}"/>
                            </div>
                        </div> 
            
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Replayee</label>
                            <div class="col-sm-8 col-md-9 col-lg-10">
                                <textarea class="form-control" name="reply" rows="5" placeholder="Plese Enter Your Replayee"></textarea>
                            </div>
                        </div>
            
                        <div class="mb-3 row mt-5">
                            <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                <button type="submit" class="btn-info">Submit</button>
            
                            </div>
                        </div>
            
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection