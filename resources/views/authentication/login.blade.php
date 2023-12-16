@php
    $title = 'Login Page';
    $description = 'Login Page'
@endphp
@extends('layout_full',['title'=>$title, 'description'=>$description])
@section('css')
@endsection

@section('js_vendor')
    <script src="https://admin.picruit.com/public/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="https://admin.picruit.com/public/js/vendor/jquery.validate/additional-methods.min.js"></script>
@endsection

@section('js_page')
    <script src="https://admin.picruit.com/public/js/pages/auth.login.js"></script>
@endsection

@section('content_left')
    <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-50">
            <div>
                <div class="mb-5">
                    <h1 class="display-3 text-white"> Pioneer</h1>
                    <h1 class="display-3 text-white"></h1>
                </div>
                <p class="h6 text-white lh-1-5 mb-5">
                    Dynamically target high-payoff intellectual capital for customized technologies. Objectively integrate emerging core competencies before
                    process-centric communities...
                </p>
                <div class="mb-5">
                    <a class="btn btn-lg btn-outline-white" href="/">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_right')
    <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                
            </div>
            <p>@php
                if(isset($error)){
                 echo $data['error'];
                }


@endphp
                
               </p>
               @include('sweetalert::alert')
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Welcome,Admin Login</h2>
                <h2 class="cta-1 text-primary">let's get started!</h2>
            </div>
            <div class="mb-5">
                <p class="h6">Please use your credentials to login.</p>
                
            </div>
            <div>
                <form id="loginForm" class="tooltip-end-bottom" novalidate action="{{route('Loginadmin')}}" method="post">
                    @csrf
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="email"></i>
                        <input class="form-control" placeholder="Email" name="email" />
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="lock-off"></i>
                        <input class="form-control pe-7" name="password" type="password" placeholder="Password" />
                        <a class="text-small position-absolute t-3 e-3" href="/Pages/Authentication/ResetPassword">Forgot?</a>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
