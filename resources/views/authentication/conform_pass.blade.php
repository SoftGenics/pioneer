@php
    $title = 'Login Page';
    $description = 'Login Page';
@endphp
@extends('layout_full', ['title' => $title, 'description' => $description])
@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/auth.register.js"></script>
@endsection



@section('content_right')
    <div
        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary"> Welcome,</h2>
                
            </div>
            <div class="mb-5">
                <p class="h6">Please Enter your Password</p> 
            </div>


            <form id="registerForm" action="{{url('/success')}}" class="tooltip-end-bottom" method="post">
                @csrf
            
                <div class="mb-3 filled form-group tooltip-end-top">
                  
                    <input class="form-control" name="password" type="password" placeholder="New Password" />
                   
                </div>

                <div class="mb-3 filled form-group tooltip-end-top">
                    
                    <input class="form-control" name="con_password" type="password" placeholder="Conform New Password" />
                   
                </div>

                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
               
            </form>
            
        </div> 
    </div>
@endsection
