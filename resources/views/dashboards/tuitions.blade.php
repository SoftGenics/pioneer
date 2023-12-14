


@php
$html_tag_data = [];
$title = 'Tuitions List';
$description = 'Acorn elearning platform course list.';
@endphp
@extends('layout', ['html_tag_data' => $html_tag_data, 'title' => $title, 'description' => $description])

@section('css')
@endsection

@section('js_vendor')
<script src="/js/vendor/movecontent.js"></script>
<script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
<script src="/js/pages/course.list.js"></script>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

@section('content')

    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row g-0">
            <div class="col-auto mb-2 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                    <h1 class="mb-0 pb-0 display-4" style="margin-left:150px; margin-top:30px; width:250px;" id="title">  {{ $title }}  
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/Course/Explore">Courses</a></li>
                            </ul>
                        </nav>
                </div>
            </div>
            <div class="col-auto d-flex d-lg-none align-items-start mb-2 mb-md-0 order-md-1">
                <button type="button" class="btn btn-primary btn-icon btn-icon-only ms-1" id="menuButton">
                    <i data-acorn-icon="menu-left"></i>
                </button>
            </div>
           
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->
    <div class="row g-0">
        <div class="col-auto d-none d-lg-flex">
            <div class="nav flex-column sw-30 pe-7" id="menuColumn">
                <!-- Content of this will be moved from #menuMoveContent div based on the responsive breakpoint.  -->
            </div>
        </div>

        <div class="col">
            
            <div class="mb-5">
                <h2 class="text text-muted mb-2">Filter</h2>
                <div class="row g-5">
                    <div class="col-3">
                     
                        <input id="myInput" type="text" class="form-control" placeholder="Search by name..">

                    </div>
                    <div class="col-3">
                        <input id="mycity" type="text" class="form-control" placeholder="Search by city..">  
                    </div>
                     
                    <div class="col-3">
                     <div><a href="{{url('/export-csv-teacher')}}"><button>Download CSv</button></a> </div>

                    </div>
                    <div class="col-3">
                     

                    </div>
                   
                </div>
            </div>
           <hr/>
          
            <!-- List Items Start -->
            <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 mb-5" id="myList">

                @php
//                     $users = App\models\User::for(User::class)
// ->allowedFilters(['name'])
// ->get();

// dd($users);




                    $collection = App\Models\srequirement::all();
                    $num=1;
                @endphp

<table class="table">
<thead>
  <tr >
    <th scope="col">#</th>
    
   
    <th scope="col">Name</th>
    <th scope="col">Date</th>
    <th scope="col">Rate</th>
    <th scope="col">Pincode</th>
    <th scope="col">Class </th>
    <th scope="col">City</th>
    <th scope="col">Sagment</th>
    <th scope="col">Mode</th>
  </tr>
</thead>




@foreach ($collection as $item)


@php  

$img = App\Models\profile_pics::where('user_id',$item->id)->first();
$profile = App\Models\Profile::where('user_id',$item->id)->first();
$qualification = App\Models\Qualification::where('user_id',$item->id)->first();
@endphp

<tbody>
<tr class="myList mycity">
  <th scope="row">{{$num++}}</th>
  
  <td>{{$profile?$profile['s_name']:"Empty" }}</td>
 <td>{{ $item['date'] }}</td>
                                                <td>{{ $item['rate'] }}</td>
                                                <td>{{ $item['pincode'] }}</td>
                                                <td>{{ $item['class'] }}</td>
                                                <td>{{ $item['city'] }}</td>
                                                <td>{{ $item['subject'] }}</td>
                                                <td>{{ $item['mode'] }}</td>
  
  
 
  
  
  <td><a href="{{url('tuition/delete')}}/{{$item->id}}">   <button class="btn btn-sm btn-icon btn-icon-only btn-outline-danger mb-1" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin mb-3 d-inline-block text-white"><path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path><path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path><path d="M2 5H18M12 9V13M8 9V13"></path></svg>              
  </button></a></td>
</tr>
<tr>
</tbody>




@endforeach
</table>
{{-- <div class="col myList mycity">
    <div class="card h-100">
     
        <div class="card-body">
            <h5 class="heading mb-0"><a href="/Course/Detail/{{$item->id}}"
                    id="myTable">{{$item->name?$item->name:"Name is Empty"}}</a></h5>
        </div>
        <div class="card-footer border-0 pt-0">
            
            <div class="card-text mb-0">
               
                <div class="text-muted text-overline text-large">
                    <div class="mycity">{{$profile?$profile->city:"City is empty"}}</div>
                </div>
                <div class="text-muted text-overline text-large">
                    <div>{{$item->mode}}</div>
                 
                </div>
            </div>
        </div>
    </div>
</div>


         

<br>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-outline-primary sw-25">Load More</button>
                </div>
            </div> --}}
            <!-- List Items End -->
        </div>
    </div>

   
    <!-- Content End -->
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".myList").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $("#mycity").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".mycity").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});
</script>




    
    
