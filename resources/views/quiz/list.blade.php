@php
    $html_tag_data = [];
    $title = 'Users List';
    $description= 'Acorn elearning platform quiz list.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ul>
                        <div><a href="{{url('/export-csv')}}"><button>Download CSv</button></a> </div>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->
{{-- user data --}}
        @php
        $user = \App\Models\User::all();
       
@endphp
      

        <!-- Content Start -->

        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-5">
            
            
            @foreach ($user as $Users)
@php
            $pic = \App\Models\Profile_pics::where('user_id',$Users->id)->first();
            @endphp
            <div class="col">
               
                <div class="card h-100">
                    <div class="card-body text-center">

                    
                        <div class="mb-3 text-muted sh-7">{{$Users->email}}</div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    @if($pic)
                                    <img src="https://picruit.com/public/{{$pic->image}}" width="50" height="30"  />

                                    @endif
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        @if($Users->category==1)
                                        <div class="sh-4 d-flex align-items-center lh-1-25">
                                            Student
                                         </div>
                                         @elseif($Users->category==2)
                                         Teacher
                                         @elseif($Users->category==3)
                                         Employee
                                         @else
                                         Jobsheekher
                                         @endif
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">{{$Users->id}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Date</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">{{$Users->created_at}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-between w-100">
                            <a href="/Users/Detail/{{$Users->id}}" class="btn btn-outline-primary w-100 me-1 btn-sm">Detail</a>
                            
                        </div>
                    </div>
                </div>
             
            </div>
            @endforeach
           
            
           
        </div>

        <!-- Content End -->
    </div>
@endsection
