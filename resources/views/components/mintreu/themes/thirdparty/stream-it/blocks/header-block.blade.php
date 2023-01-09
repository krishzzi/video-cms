@if($showContent)
<header id="main-header" class="">

    <div class="main-header bg-success">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">


                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>

                        @if(\Illuminate\Support\Facades\Route::has('home'))
                            <a class="navbar-brand" href="{{ route('home') }}">
                                @if(isset($setting) && !empty($setting->logo) && !empty($setting->name) )
                                    <img height="40px" width="80px" class="img-fluid logo" src="{{asset('storage/'.$setting->logo)}}"
                                         alt="{{$setting->name ?? config('app.name')}}" />
                                @endif
                            </a>
                        @endif


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    @if(\Illuminate\Support\Facades\Route::has('home'))
                                        <li class="menu-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Route::has('videos'))
                                        <li class="menu-item">
                                            <a href="{{ route('videos') }}">Videos</a>
                                        </li>
                                    @endif

                                    @if(\Illuminate\Support\Facades\Route::has('posts'))
                                        <li class="menu-item">
                                            <a href="{{ route('posts') }}">Stories</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>


                        {{-- Desktop Menu--}}
                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0 ">
                                <li class="nav-item nav-icon">
                                    <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                       data-toggle="search-toggle">
                                        @auth('customer')<img src="@if(isset(auth('customer')->user()->avatar) && !is_null(auth('customer')->user()->avatar))
                                            {{ 'storage/'.auth()->user()->avatar }} @else # @endif" class="img-fluid avatar-40 rounded-circle" alt="user">

                                        @elseauth
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class=" text-white " width="30px" height="30px">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        @endauth
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">

                                            @if (Route::has('login'))

                                                <div class="iq-card-body p-0 pl-3 pr-3">
                                                    @auth('customer')
                                                        <a href="{{ url('/dashboard') }}" class="iq-sub-card setting-dropdown">Dashboard</a>



                                                        <a href="{{ route('logout') }}" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-logout-circle-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Logout</h6>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    @elseauth
                                                        <a href="{{ route('login') }}" class="iq-sub-card setting-dropdown">
                                                            Login
                                                        </a>
                                                    @endauth


                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        {{-- ./Desktop Menu--}}


                        {{-- Mobile Menu --}}
                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                               data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu right-0" aria-labelledby="dropdownMenuButton">
                               <ul class=" list-styled m-1">
                                   @auth('customer')
                                   <li class="text-right"><a>Logout</a></li>
                                   <li class="text-right mr-3"><a>Dashboard</a></li>
                                   @elseauth
                                       <li class="text-right"><a>Login</a></li>
                                   @endauth

                               </ul>
                            </div>
                        </div>
                        {{-- Mobile Menu --}}

                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>
@endif

