@php
    $html_tag_data = [];
    $title = 'Payment History';
    $description = 'Acorn elearning platform course explore.';
@endphp
@extends('layout', ['html_tag_data' => $html_tag_data, 'title' => $title, 'description' => $description])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.explore.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .file-upload input[type='file'] {
            display: none;
        }
    </style>
@endsection


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Rating-history</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row m-2" style="overflow-y: hidden; overflow-x: scroll; height:75vh;">
            @php         
                $collection = App\Models\rating::all();
                $i = 0;
            @endphp
            <table class="table">
                <!-- new table.r-->
                <thead>
                    <tr>
                        <th></th>
                        <th style="color:rgb(21, 216, 216); font-size:20px;">SN.</th>
                        <th style="color:rgb(21, 216, 216); font-size:20px;">By_id</th>
                        <th style="color:rgb(21, 216, 216); font-size:20px;">User_id</th>
                        <th style="color:rgb(21, 216, 216); font-size:20px;">Rating</th>
                        <th style="color:rgb(21, 216, 216); font-size:20px;">Discription</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        <tr class="">
                            <td> </td>
                            <td style="font-size:16px; color:rgb(55, 57, 157); font-weight:bold;"> {{ $i++ }}</td>
                            <td class=""> {{ $item->by_id }}</td>
                            <td class=""> {{ $item->user_id }}</td>
                            <td class=""> 
                                <span class="review-stars" style="color: #49a24f;">
                                    <!-- ////////////// STAR RATE CHECKER ////////////// -->
                                        @if($item->rating <= 0)
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($item->rating === 1)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($item->rating === 2)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($item->rating === 3)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($item->rating === 4)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($item->rating >= 5)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endif
                                        <!-- ///////////////////////////////////////////// -->
                                    </span>
                            </td>
                            <td class="" style="color:rgb(46, 184, 138); font-size:17px;"> {{ $item->description }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table><!-- new table.end-->

        </div> 
    </div>
@endsection

