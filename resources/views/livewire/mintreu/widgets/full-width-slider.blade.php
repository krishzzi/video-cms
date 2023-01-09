{{-- Full Width Slider Widget --}}
@if(isset($records) && $records->count() > 1)
    <!-- Slider Start -->
    <section id="home" class="iq-main-slider p-0 mb-2">
        <div id="home-slider" class="slider m-0 p-0">
            @foreach($records as $slider)
                <div class="slide slick-bg s-bg-1 " style='background-image: url("{{is_null($slider->display) ? $slider->thumbnail : asset('storage/'.$slider->display) }}");'>
                    <div class="container-fluid position-relative h-100">
                        <div class="slider-inner h-100" >
                            <div class="row align-items-center h-100">
                                <div class="col-xl-6 col-lg-12 col-md-12 ">
                                    <a href="javascript:void(0);">
                                        <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">

                                            <img src="{{is_null($slider->display) ? $slider->thumbnail : asset('storage/'.$slider->display) }}"  class="c-logo" alt="{{ $slider->title }}">
                                        </div>
                                    </a>
                                    <h1 class="d-none d-md-block  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">{{ $slider->title}}</h1>
                                    <h3 class="d-none d-sm-block d-md-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">{{ $slider->title}}</h3>
                                    <small class="d-xs-block d-sm-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">{{ $slider->title}}</small>
                                    <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1"> </div>
                                    <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate">{{$slider->desc}}</p>
                                    <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                        @if($type == 'video')
                                            <a href="{{route('video.view',[$slider->video_code])}}" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                                             aria-hidden="true"></i>Play Now</a>
                                            <a href="{{route('video.view',[$slider->video_code])}}" class="btn btn-link">More details</a>
                                        @else
                                            <a href="{{route('post.view',[$slider->slug])}}" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                                      aria-hidden="true"></i>Read Now</a>
                                            <a href="{{route('post.view',[$slider->slug])}}" class="btn btn-link">More details</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

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
