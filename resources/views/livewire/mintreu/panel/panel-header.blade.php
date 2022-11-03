
<!-- Header -->
<header id="main-header" class="mb-4 p-3">
    <div class="main-header">
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
                        <a class="navbar-brand" href="{{ route('home') }}"> <img height="40px" width="80px" class="img-fluid logo" src="@if(!empty($setting->logo)){{asset('storage/'.$setting->logo)}} @else # @endif"
                                                                                 alt="{{$setting->name ?? config('app.name')}}" /> </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('gallery.video') }}">Videos</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('gallery.post') }}">Stories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                               data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                <div class="navbar-right position-relative">
                                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                        <li>

                                            <div class="search-box iq-search-bar">
                                                <form action="{{ route('search.via.form') }}" method="post" class="searchbox">
                                                    @csrf
                                                    <div class="form-group position-relative">
                                                        <input name="tag" type="text" class="text search-input font-size-12" height="15px"
                                                               placeholder="type here to search...">
                                                        {{--                                                <button type="submit"></button>--}}
                                                        <i class="search-link ri-search-line"></i>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                                <img src="@auth{{ 'storage/'.auth()->user()->avatar }}@endauth" class="img-fluid avatar-40 rounded-circle"
                                                     alt="user">
                                            </a>
                                            <div class="iq-sub-dropdown iq-user-dropdown">
                                                <div class="iq-card shadow-none m-0">
                                                    @if (Route::has('login'))
                                                    <div class="iq-card-body p-0 pl-3 pr-3">
                                                        @auth
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

                                                        @else
                                                            <a href="{{ route('login') }}" class="iq-sub-card setting-dropdown">
                                                                Login
                                                            </a>

                                                            @if (Route::has('register'))
                                                                <a href="{{ route('register') }}" class="iq-sub-card setting-dropdown">Register</a>
                                                            @endif
                                                        @endauth


                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0">
                                <li class="nav-item nav-icon">
{{--                                    <a href="#" class="search-toggle device-search">--}}
{{--                                        <i class="ri-search-line"></i>--}}
{{--                                    </a>--}}
                                    <div class=" search-toggle device-search">
                                        <form action="{{ route('search.via.form') }}" method="post" class="searchbox">
                                            @csrf
                                            <div class="form-group position-relative">
                                                <input name="tag" type="text" height="15px" class="text search-input font-size-12 rounded"
                                                       placeholder="type here to search...">
                                                <button type="submit" class="bg-transparent border-0 text-white"><i class=" ri-search-line"></i></button>

                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <li class="nav-item nav-icon">
                                    <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                       data-toggle="search-toggle">
                                        <img src="@auth{{ 'storage/'.auth()->user()->avatar }}@endauth" class="img-fluid avatar-40 rounded-circle" alt="user">
                                    </a>



                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            @if (Route::has('login'))
                                                <div class="iq-card-body p-0 pl-3 pr-3">
                                                    @auth
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

                                                    @else
                                                        <a href="{{ route('login') }}" class="iq-sub-card setting-dropdown">
                                                            Login
                                                        </a>

                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}" class="iq-sub-card setting-dropdown">Register</a>
                                                        @endif
                                                    @endauth


                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
