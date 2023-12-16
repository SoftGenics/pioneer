@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Blog Detail';
    $heading = 'Carrot Cake Gingerbread';
    $description = 'Blog Detail';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Blog"=>"Blog"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/baguetteBox.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/pages/blog.detail.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        @php
$id= request('id');

        $blog = \App\Models\Blogs::find($id);
       
@endphp
        <div class="row">
            <div class="col-12 col-xl-8 col-xxl-9 mb-5">
            <div class="card mb-5">
            <div class="card-body p-0">
            <div class="glide glide-gallery" id="glideBlogDetail">
            <div class="glide glide-large glide--swipeable glide--ltr glide--slider">
            <div class="glide__track" data-glide-el="track" style="padding-top:15px;">
            <ul class="glide__slides gallery-glide-custom" style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 6836px; transform: translate3d(0px, 0px, 0px);">
            <li class="glide__slide p-0 glide__slide--active" style="width: 14%; padding-top:15px;">
            <a href="img/product/large/product-1.webp">
            <img alt="https://picruit.com/public/{{$blog?$blog->mediafile:""}}" src="https://picruit.com/public/{{$blog->mediafile}}" class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-90">
            </a>
            </li>
           
            </ul>
            </div>
            </div>
            
            </div>
            <div class="card-body pt-0">
            <h4 class="mb-3">{{$blog->title}}</h4>
            <div>
                <div class="article-content">
                                    {!! $blog['body'] !!}
                                </div>
                
            <p>

{{strip_tags(html_entity_decode(substr($blog->body, 0,60) . '...'))}}
            </p>
           
            
            </div>
            </div>
            </div>

            @php
                $comments = \App\Models\Comments::where('blog_id',$id)->get(); 
                $like = \App\Models\Like::where('blog_id',$id)->get(); 

                $total_com=count($comments);
                $total_like=count($like);
                @endphp
            <div class="card-footer border-0 pt-0">
            <div class="row align-items-center">
            <div class="col-6 text-muted">
            <div class="row g-0">
            <div class="col-auto pe-3" >
                <a  href="{{url("/bloglike")}}/{{$blog->id}}">
                <button id="like" >
                <svg xmlns="http://www.w3.org/2000/svg" id="likefill" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
            </button>
                </a>
                <span class="align-middle">{{$total_like}}</span>
            </div>
            <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-message text-primary me-1"><path d="M14.5 2C15.9045 2 16.6067 2 17.1111 2.33706C17.3295 2.48298 17.517 2.67048 17.6629 2.88886C18 3.39331 18 4.09554 18 5.5L18 10.5C18 11.9045 18 12.6067 17.6629 13.1111C17.517 13.3295 17.3295 13.517 17.1111 13.6629C16.6067 14 15.9045 14 14.5 14L10.4497 14C9.83775 14 9.53176 14 9.24786 14.0861C9.12249 14.1241 9.00117 14.1744 8.88563 14.2362C8.62399 14.376 8.40762 14.5924 7.97487 15.0251L5.74686 17.2531C5.47773 17.5223 5.34317 17.6568 5.2255 17.6452C5.17629 17.6404 5.12962 17.6211 5.0914 17.5897C5 17.5147 5 17.3244 5 16.9438L5 14.6C5 14.5071 5 14.4606 4.99384 14.4218C4.95996 14.2078 4.79216 14.04 4.57822 14.0062C4.53935 14 4.4929 14 4.4 14V14C4.0284 14 3.8426 14 3.68713 13.9754C2.83135 13.8398 2.16017 13.1687 2.02462 12.3129C2 12.1574 2 11.9716 2 11.6L2 5.5C2 4.09554 2 3.39331 2.33706 2.88886C2.48298 2.67048 2.67048 2.48298 2.88886 2.33706C3.39331 2 4.09554 2 5.5 2L14.5 2Z"></path></svg>
            <span class="align-middle">{{$total_com}}</span>
            </div>
            </div>
            </div>
            <div class="col-6">
            <div class="d-flex align-items-center justify-content-end">
                @if($blog->status==true)
                <a href="{{url("/block_blog")}}/{{$blog->id}}">  <button type="button" class="btn btn-outline-primary w-100 me-2" id="block"  >Block</button></a>
                 @else
                 <a href="{{url("/unblock_blog")}}/{{$blog->id}}"> <button type="button" class="btn btn-outline-primary w-100 me-2" id="block" >Unblock</button></a>
                  @endif
            
            </div>
            </div>
            </div>
            </div>
            </div>
            <h2 class="small-title">Comments</h2>
            <div class="card mb-5">
            <div class="card-body">
            <div class="row g-0">
            <div class="col-auto">
            <div class=" me-3">
                
    
    
    
            <div class="col">
    @if($total_com!=0)

    @foreach($comments as $com)
    <h3>{{$com->user_name}}</h3>
    <div class="d-flex justify-content-between align-items-center">
        <p>{{$com->body}}</p>
        
        <form action="/comment-delete" class="card-body" method="POST" style="margin-left:50px;">
          @csrf
          <input type="hidden" name="cmt_id" value="{{$com->id}}" />
          <button type="submit" class="background-color:#000; border:none; margin:0; padding:0;">
            <i class="fa fa-trash-o" style="font-size:23px;color:red; background-color:#000;"></i>
         </button>
       </form> 
        
    </div>

<hr/>
@endforeach
    @else
    <h3>No Comments</h3>
    @endif
   
            </div>
            </div>

            <br/>
            <br/>
            <br/>

            <div class="input-group">
               <form action="{{route('add-comments')}}" method="post">
                @csrf
                <input type="hidden" name="blog_id" value="{{$id}}" />
                <input type="hidden" name="user_name" value="admin" />
                <input type="hidden" name="user_id" value="1" />
                <td>
                <textarea class="form-control" aria-label="With textarea" spellcheck="false" rows="1" name="body">
               
                </textarea> <button class="btn" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-send mb-3 d-inline-block text-white"><path d="M12.6593 16.3216L17.5346 3.86246C17.7992 3.18631 17.9315 2.84823 17.8211 2.64418C17.7749 2.55868 17.7047 2.48851 17.6192 2.44226C17.4152 2.3319 17.0771 2.46419 16.4009 2.72877L3.94174 7.60411L3.94173 7.60411C3.24079 7.87839 2.89031 8.01553 2.81677 8.23918C2.786 8.33274 2.78356 8.43332 2.80974 8.52827C2.87231 8.75522 3.2157 8.90925 3.90249 9.21731L8.53011 11.293L8.53012 11.293C8.65869 11.3507 8.72298 11.3795 8.77572 11.4235C8.79902 11.4429 8.82052 11.4644 8.83993 11.4877C8.88385 11.5404 8.91269 11.6047 8.97037 11.7333L11.0461 16.3609C11.3541 17.0477 11.5082 17.3911 11.7351 17.4537C11.8301 17.4798 11.9306 17.4774 12.0242 17.4466C12.2479 17.3731 12.385 17.0226 12.6593 16.3216Z"></path><path d="M11.8994 8.36395L9.07099 11.1924"></path></svg>
                    </button>
                
                  
               </form> 
            </div>
            </div>
            </div>
            </div>
            </div>
            
            
            </div>
            
            </div>
            
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){ 

        
       
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            $(document).on("click","#like", function(e){
    
                $("#likefill").css('fill','blue');
                
                const id={{$blog->id}};
                var formData = new FormData();
            formData.append('blog_id', {{$id}});
            formData.append('user_id', 4);
          
    
                $.ajax({
                    cache: false,
                contentType: false,
                processData: false,
                    method:"POST",
                    url:"{{url('bloglike')}}",
                    data:formData,
                    success:function(res){
                        console.log("hllo");
                      if(res){
                       console.log(res)
                         //location.href = 'signin.php';
                      }
                      else{
                         console.log("Error");
                          
                      }
                    }
                });
                
            })
            
           
            
            
        })
            </script>
    