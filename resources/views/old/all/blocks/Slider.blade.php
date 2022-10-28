@if(!is_null($data['slider']))
<!-- Slider Start -->
<section id="home" class="iq-main-slider p-0 mb-2">
    <div id="home-slider" class="slider m-0 p-0">

        @foreach($data['slider'] as $slider)


        <div class="slide slick-bg s-bg-1 " >
            <div class="container-fluid position-relative h-100" >


                <div class="slider-inner h-100" >
                    <div class="row align-items-center h-100" >
                        <div class="col-xl-6 col-lg-12 col-md-12 " >
                            <a href="javascript:void(0);">
                                <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                    <img src="{{ $slider['thumb'] }}"  class="c-logo" alt="{{ $slider['name'] }}">
                                </div>
                            </a>
                            <h1 class="  title text-uppercase text-white " data-animation-in="fadeInLeft"
                                data-delay-in="0.6">{{ $slider['name'] }}</h1>
                            <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
{{--                                <span class="badge badge-secondary p-2">18+</span>--}}
{{--                                <span class="ml-3 text-white">2 Seasons</span>--}}
                            </div>
                            <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate">{{$slider['desc']}}
                            </p>
                            <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                <a href="{{route('display.video',[$slider['video_code']])}}" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                     aria-hidden="true"></i>Play Now</a>
                                <a href="{{route('display.video',[$slider['video_code']])}}" class="btn btn-link">More details</a>
                            </div>
                        </div>
                    </div>
{{--                    <div class="trailor-video">--}}
{{--                        <a href="video/trailer.mp4" class="video-open playbtn">--}}
{{--                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                 x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"--}}
{{--                                 enable-background="new 0 0 213.7 213.7" xml:space="preserve">--}}
{{--                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"--}}
{{--                                       stroke-linejoin="round" stroke-miterlimit="10"--}}
{{--                                       points="73.5,62.5 148.5,105.8 73.5,149.1 " />--}}
{{--                                <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"--}}
{{--                                        stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />--}}
{{--                           </svg>--}}
{{--                            <span class="w-trailor">Watch Trailer</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>


            </div>
        </div>

        @endforeach

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="test"></circle>
        </symbol>
    </svg>
</section>
<!-- Slider End -->



@endif
