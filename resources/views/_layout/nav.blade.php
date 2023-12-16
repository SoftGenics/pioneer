<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/">
            <!-- Logo can be added directly -->
            <!-- <img src="/img/logo/mylogo1.svg" alt="logo" /> -->

            <!-- Or added via css to provide different ones for different color themes -->
            <!-- <div class="img"></div> -->
        </a>
    </div>
    <!-- Logo End -->

    <!-- Language Switch Start -->
    
    <!-- Language Switch End -->
            @php
            $email = session()->get('email');
            $admin = \App\Models\admin::where('email',$email)->first();
            
            @endphp
            <!--/img/profile/profile-3.webp-->
    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="https://admin.picruit.com/public/{{$admin?$admin->profile:"/img/profile/profile-3.webp"}}" />
            <div class="name">Super Admin</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="/form-edit" >Edit Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!--<div class="form-submit">-->
                
            <!--      <input type="file" name="profile" "id="exampleFormControlFile1"">-->
            <!--      <button id="blogupload">Upload</button>-->
                
            <!--</div>-->
            
            <div class="row mb-1 ms-0 me-0">
            
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                       
                        <li>
                            <a href="{{url('logout')}}">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- User Menu End -->

    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-acorn-icon="search" data-acorn-size="18"></i>
            </a>
        </li>
       
        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
            </a>
        </li>
       
    </ul>
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <li>
                <a href="#dashboards">
                    <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                    <span class="label">Dashboards</span>
                </a>
                <ul id="dashboards">
                    <li>
                        <a href="{{url('/Dashboards/Elearning')}}">
                            <span class="label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('sspostnew')}}">
                            <span class="label">Post Tuition</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('epostnew')}}">
                            <span class="label">Post job</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('create-user')}}">
                            <span class="label">Add User</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboards/Record"> 
                            <span class="label">Record</span>
                        </a>
                    </li> 
                    
                    
                        <li>
                            <a href="/Dashboards/query">
                                <span class="label">query</span>
                            </a>
                        </li>
                   

                  
                        <li>
                            <a href="/Dashboards/globle_ass">
                                <span class="label">Global Assignment</span>
                            </a>
                        </li>
                   
                    <!-- <li>
                        <a href="/Dashboards/School">
                            <span class="label">School</span>
                        </a>
                    </li> -->
                </ul>
            </li>

            <li>
                <a href="#courses">
                    <i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i>
                    <span class="label">Advertisments</span>
                </a>
                <ul id="courses">
                    <li>
                        <a href="/Course/Explore">
                            <span class="label">Explore</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="/Course/List">
                            <span class="label">List</span>
                        </a>
                    </li> -->
                   
                                </ul>
            </li>




<!-- 
            <li>
                <a href="#courses">
                    <i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i>
                    <span class="label">Courses</span>
                </a>
                <ul id="courses">
                    <li>
                        <a href="/Course/Explore">
                            <span class="label">Explore</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Course/List">
                            <span class="label">List</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Course/Detail">
                            <span class="label">Detail</span>
                        </a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="#blogs">
                    <i data-acorn-icon="quiz" class="icon" data-acorn-size="18"></i>
                    <span class="label">Manage blogs</span>
                </a>
                <ul id="blogs">
                    <li>
                        <a href="/Blogs/List">
                            <span class="label">List</span>
                        </a>
                    </li>
                    
                   
                </ul>
            </li>
            <li>
                <a href="#chats">
                    <i data-acorn-icon="quiz" class="icon" data-acorn-size="18"></i>
                    <span class="label">Records</span>
                </a>
                <ul id="chats">
                    <li>
                        <a href="/Chats/chats">
                            <span class="label">chats</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Chats/mails">
                            <span class="label">mails</span>
                        </a>
                    </li>
                    <li>
                        <a href="/payment-history">
                            <span class="label">Payment Records</span>
                        </a>
                    </li>
                    <li>
                        <a href="/feel-free">
                            <span class="label">Feel Free Records</span>
                        </a>
                    </li>
                   
                </ul>
            </li>


            {{-- <li>
                <a href="#managers">
                    <i data-acorn-icon="destination" class="icon" data-acorn-size="18"></i>
                    <span class="label">Manage manager</span>
                </a>
                <ul id="manager">
                    <li>
                        <a href="/Manager/manager">
                            <span class="label">List</span>
                        </a>
                    </li>
                   
                   
                </ul>
            </li> --}}

       <li>
                <a href="#paths">
                    <i data-acorn-icon="destination" class="icon" data-acorn-size="18"></i>
                    <span class="label">Team</span>
                   
                </a>
                <ul id="paths">
                    <li>
                        <a href="/Chats/manager">
                            <span class="label">List</span>
                        </a>
                    </li>
                  
                </ul>
            </li>

            <li>
                <a href="#pages" data-href="/Pages">
                    <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                    <span class="label">Basic</span>
                </a>
                <ul id="pages">
                    <li>
                        <a href="#authentication" data-href="/Pages/Authentication">
                            <span class="label">Authentication</span>
                        </a>
                        <ul id="authentication">
                            {{-- <li>
                                <a href="/Pages/Authentication/Login">
                                    <span class="label">Login</span>
                                </a>
                            </li> --}}
                            <li>
                                <a href="/Pages/Authentication/Register">
                                    <span class="label">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="/Pages/Authentication/ForgotPassword">
                                    <span class="label">Forgot Password</span>
                                </a>
                            </li>
                            <li>
                                <a href="/Pages/Authentication/ResetPassword">
                                    <span class="label">Reset Password</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                   



                </ul>
            </li>




            {{-- <li>
                <a href="#instructors">
                    <i data-acorn-icon="lecture" class="icon" data-acorn-size="18"></i>
                    <span class="label">Instructors</span>
                </a>
                <ul id="instructors">
                    <li>
                        <a href="/Instructor/List">
                            <span class="label">List</span>
                        </a>
                    </li>
                   
                </ul>
            </li> --}}
            <li>
                <a href="#miscellaneous">
                    <i data-acorn-icon="layout-5" class="icon" data-acorn-size="18"></i>
                    <span class="label">Plans</span>
                </a>
                <ul id="miscellaneous">
                    <li>
                        <a href="/Misc/Player">
                            <span class="label">Subscription</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Misc/Material">
                            <span class="label">Create Offer</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Misc/Coupon">
                            <span class="label">Confirmation Coupon</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        
         
    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Scrollspy Mobile Button Start -->
        <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-acorn-icon="menu-dropdown"></i>
        </a>
        <!-- Scrollspy Mobile Button End -->

        <!-- Scrollspy Mobile Dropdown Start -->
        <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
        <!-- Scrollspy Mobile Dropdown End -->

        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>


