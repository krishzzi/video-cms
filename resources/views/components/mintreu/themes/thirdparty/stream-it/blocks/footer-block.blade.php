
<div class="">

    @if($showContent)
        @livewire('mintreu.pages.view-advert')

    <footer class="text-center fixed-bottom m-0 align-items-center py-2 d-sm-block d-md-none" style="background-color: black; width: 100%">
        <a class="text-white  float-left ml-3 mt-2" href="{{route('videos')}}"><i class="fas fa-play fa-2x"></i></a>
        <a class="text-white " href="{{route('home')}}"> <i class="fa fa-home fa-3x"></i> </a>
        <a class="text-white float-right mr-3 mt-2" href="{{route('posts')}}"><i class="fas fa-book-open fa-2x"></i></a>

    </footer>


    <footer class="fixed-bottom">

        <div class="row">
            <div class="col-4">

            </div>

            <div class="col-4">

            </div>

            <div class="col-4">

            </div>

        </div>

        <div class="copyright py-2">
            <div class="container-fluid">
                <p class="mb-0 text-center font-size-14 text-body">{{ ucwords(config('app.name')) }} - {{ \Illuminate\Support\Carbon::now()->yearIso }} All Rights Reserved |  <i class="text-white">Powered By <a href="https://mintreu.com">Mintreu Services</a></i></p>
            </div>
        </div>
    </footer>




            {{--        --}}{{-- PC or Tab Footer--}}
{{--        <footer class="mb-0  mt-5 d-none d-md-block d-lg-block fixed-bottom bg-danger">--}}

{{--            <div class="container-fluid">--}}
{{--                <div class="block-space">--}}
{{--                    <div class="row">--}}
{{--                        @if(isset($aboutUs)  && isset($policies))--}}
{{--                            <div class="col-lg-3 col-md-4">--}}
{{--                                <ul class="f-link list-unstyled mb-0">--}}
{{--                                    @if(!is_null($aboutUs))--}}
{{--                                        <li><a href="{{ route('read.policy',[$aboutUs->slug]) }}">{{$aboutUs->title}}</a></li>--}}
{{--                                    @endif--}}
{{--                                    @foreach($policies->where('section',1)->take(5) as $policy)--}}
{{--                                        <li><a href="{{ route('read.policy',[$policy->slug]) }}">{{ $policy->title }}</a></li>--}}
{{--                                    @endforeach--}}

{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4">--}}
{{--                                <ul class="f-link list-unstyled mb-0">--}}
{{--                                    @foreach($policies->where('section',1)->take(5) as $policy)--}}
{{--                                        <li><a href="{{ route('read.policy',[$policy->slug]) }}">{{ $policy->title }}</a></li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4">--}}
{{--                                <ul class="f-link list-unstyled mb-0">--}}
{{--                                    @foreach($policies->where('section',1)->take(4) as $policy)--}}
{{--                                        <li><a href="{{ route('read.policy',[$policy]) }}">{{ $policy->title }}</a></li>--}}
{{--                                    @endforeach--}}
{{--                                    <li><a href="{{route('contact.us.form')}}">Contact Us</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        @if(isset($setting))--}}
{{--                            <div class="col-lg-3 col-md-12 r-mt-15">--}}
{{--                                <div class="d-flex">--}}
{{--                                    @if(!is_null($setting) && !is_null($setting->social))--}}
{{--                                        @foreach( $setting->social as $social)--}}
{{--                                            <a href="{{$social['link']}}" class="s-icon">--}}
{{--                                                <i class="ri-{{$social['name']}}-fill"></i>--}}
{{--                                            </a>--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="copyright py-2">--}}
{{--                <div class="container-fluid">--}}
{{--                    <p class="mb-0 text-center font-size-14 text-body">{{ ucwords(config('app.name')) }} - {{ \Illuminate\Support\Carbon::now()->yearIso }} All Rights Reserved |  <i class="text-white">Powered By <a href="https://mintreu.com">Mintreu Services</a></i></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}


{{--        --}}{{-- Mobile Only Footer--}}
{{--        --}}{{--    <footer class="mb-0 fixed-bottom d-sm-block d-md-block d-lg-none row  align-items-center p-2  ">--}}
{{--        <footer class="fixed-bottom row py-2 align-items-center d-sm-block  d-md-none">--}}
{{--            <div class="col-4 text-center"><a href="{{route('videos')}}"><i class="fas fa-play"></i></a></div>--}}

{{--            <div class="col-4 text-center">--}}
{{--                <a href="{{route('home')}}">--}}
{{--                    <i class="fa fa-home fa-2x"></i>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-4 text-center"><a href="{{route('posts')}}"><i class="fas fa-book-open"></i></a></div>--}}
{{--        </footer>--}}
        <!-- MainContent End-->
        <!-- back-to-top -->
        <div id="back-to-top">
            <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
        </div>


    @endif




</div>


