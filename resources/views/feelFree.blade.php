@php
    $html_tag_data = [];
    $title = 'User Request History';
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
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row m-5" style="overflow: scroll; height:80vh;">
            <!-- Content Start.r -->
            @php
                
                $collection = App\Models\FeelFree::all();
                $i = 1;
            @endphp
            <table class="table table-dark table-striped">
                <!-- new table.r-->
                <thead>
                    <tr>
                        <th>SN.</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                           <th>Request Question</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        <tr class="shadow-lg">
                            <td> {{ $i++ }}</td>
                            <td> {{ $item->name }}</td>
                            <td> {{ $item->number }}</td>
                             <td> {{ $item->email }}</td>
                              <td><textarea>{{ $item->yourrequest }}</textarea> </td>
                            <td> {{ $item->created_at }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table><!-- new table.end-->

        </div>
        <!-- Popular Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Popular</h2>
            {{-- <div class="mt-n1">
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                    <a href="/Course/TeacherList">View All</a>
                    <i data-acorn-icon="chevron-right"></i>
                </button>
            </div> --}}
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-5">





        </div>

    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on("click", "#rating", function(e) {




            $.ajax({
                method: "POST",
                url: `{{ url('/giveRating') }}`,
                data: {
                    'rating': '5'
                },
                success: function(res) {
                    console.log("hllo")
                    if (res) {
                        console.log(res)
                        //location.href = 'signin.php';
                    } else {
                        console.log("Error");

                    }
                }
            });

        })

        let profile;

        $("#fileUpload").click(function() {
            const file = $("#fileUpload").files[0];
            const name = $("#name")
            const start_date = $("#start_date")
            const end_date = $("#end_date")
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    $("#imgPreview")
                        .attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
            profile = file;
            var formData = new FormData();
            formData.append('profile', profile);
            formData.append('name', name);
            formData.append('start_date', start_date);
            formData.append('end_date', end_date);
            console.log(formData);
            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: 'post',
                data: formData,
                url: "{{ route('update-ads') }}",
                success: function(response) {
                    if (response.success) {
                        $('#successMessage').show();
                        $('#successMessage').text(response.message);
                    } else {
                        $('#failedMessage').show();
                        $('#failedMessage').text(response.message);
                        console.log("test");
                    }
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        });



    })
</script>
