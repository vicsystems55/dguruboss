<header>
        <!-- Header Start -->
        <div class="header-area footer-bg" >
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ url('/frontpage/assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="{{ route('frontpage')}}">Home</a></li>
                                                <li><a href="{{ route('courses')}}">Courses</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="#">Blog</a>
                                                   
                                                </li>
                                                <li><a href="">Contact</a></li>
                                                <!-- Button -->
                                                
                                                @guest
                                                <li class="button-header margin-left "><a href="/regInstructor" class="btn">Register</a></li>
                                                <li class="button-header"><a href="{{ route('login')}}" class="btn btn3">Log in</a></li> 
                                                @endguest

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                                @auth
                                                <a class="" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
                                                <li class="button-header"><a href="{{ route('login')}}" class="btn btn3">My Library</a></li>
                                                @endauth
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>