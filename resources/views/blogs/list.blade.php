@php
    $html_tag_data = [];
    $title = 'Blogs List';
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
        @include('sweetalert::alert');
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
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
{{-- blogs call --}}
        @php
        $blog = \App\Models\Blogs::all();
       
@endphp

<div class="row">
    <div class="col-12 col-xl-8 col-xxl-9 mb-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-2 mb-5">
        @foreach($blog as $item)
        
         @php
               
                $like = \App\Models\Like::where('blog_id',$item->id)->get(); 

              
                $total_like=count($like);
                 if($total_like>10){
                $tranding=\App\Models\Blogs::where('id',$item->id)->get();
                }
                else{
                 $tranding=\App\Models\Blogs::all();
                }
                
                @endphp
       
    <div class="col">
    <div class="card h-100">
        @if($item->mediafile)
    <img src="https://picruit.com/public/{{$item->mediafile}}" class="card-img-top sh-19" alt="{{$item->mediafile}}">
    @else
    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vecteezy.com%2Ffree-vector%2Fno-image-available&psig=AOvVaw0hfVa2TYYUBozfoSJiL7c0&ust=1684833675126000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCPi1oNjMiP8CFQAAAAAdAAAAABAE" class="card-img-top sh-19" alt="card image">

    @endif
    
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail/{{$item->id}}" class="">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">{{$item->title}}</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3" id="like">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle" >{{  count($like = \App\Models\Like::where('blog_id',$item->id)->get()); }}</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    
    <span class="align-middle">{{$item->created_at}}</span>
    <span><a href="{{url('Blogs/delete')}}/{{$item->id}}">   <button class="btn btn-sm btn-icon btn-icon-only btn-outline-danger mb-1 " type="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin mb-3 d-inline-block text-white"><path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path><path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path><path d="M2 5H18M12 9V13M8 9V13"></path></svg>              
  </button></a></svg>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endforeach
    
   
    
    
   
    {{-- <div class="row">
    <div class="col-12 text-center">
    <button class="btn btn-xl btn-outline-primary sw-30">Load More</button>
    </div>
    </div> --}}
    </div>
    <div class="col-12 col-xl-4 col-xxl-3">
    <div class="row">
   
    <div class="col-12">
    <h2 class="small-title">Trending</h2>
    
      
    <div class="mb-5">
    <div class="row mb-n2">
        
        <!-- $blog = \App\Models\Blogs::all();-->
        <!--$tranding_id-->
      
        @foreach($tranding as $trand)
    <div class="col-12 col-md-6 col-xl-12 mb-2">
    <div class="card sh-11 sh-sm-14">
    <div class="row g-0 h-100">
    <div class="col-auto">
    <img src="https://picruit.com/public/{{$trand?$trand->mediafile:""}}" alt="alternate text" class="card-img card-img-horizontal sw-10 sw-sm-14">
    </div>
    <div class="col position-static">
    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <a href="/Blogs/Detail/{{$item->id}}" class="stretched-link body-link">
    <div class="clamp-line" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">A {{$trand?$trand->title:""}}</div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endforeach
    
    

    </div>
    </div>
    </div>
    
    
    </div>
    </div>
    </div>
    @endsection
   
  
