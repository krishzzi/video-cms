<div>
@if($sliders->count())

        <section id="iq-topten">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title topten-title-sm">{{ $this->title }}</h4>
                    </div>
                    <div class="topten-contens">
                        <h4 class="main-title topten-title">{{ $this->title }}</h4>
                        <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center">

                            @if($type == 'video')
                                @foreach($sliders as $video)
                                    <li>
                                        <a href="{{route('display.video',[$video->slug])}}">
                                            <img  src="{{ empty($video->display ) ? $video->thumbnail : asset('storage/'.$video->display) }}" class="img-fluid w-100" alt="{{$video->title}}">
                                        </a>
                                    </li>
                                @endforeach
                            @endif

                            @if($type == 'post')

                                    @foreach($sliders as $post)
                                        <li>
                                            <a href="{{route('display.post',[$post->slug])}}">
                                                <img  src="{{asset('storage/'.$post->display)}}" class="img-fluid w-100" alt="{{$post->title}}">
                                            </a>
                                        </li>
                                    @endforeach

                            @endif


                        </ul>
                        <div class="vertical_s">
                            <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">

                                @if($type == 'video')

                                    @foreach($sliders as $video)
                                        <li>
                                            <div class="block-images position-relative">
                                                <a href="{{route('display.video',[$video->slug])}}">
                                                    <img  src="{{ empty($video->display ) ? $video->thumbnail : asset('storage/'.$video->display) }}" class="img-fluid w-100" alt="{{$video->title}}">
                                                </a>
                                                <div class="block-description text-white">
                                                    <h5 class="text-white">{{ $video->name }}</h5>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        {{--                                            <div class="badge badge-secondary p-1 mr-2">10+</div>--}}
                                                        {{--                                            <span class="text-white">3h 15m</span>--}}
                                                    </div>
                                                    <div class="hover-buttons">
                                                        <a href="{{route('display.video',[$video->slug])}}" class="btn btn-hover" tabindex="0">
                                                            <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                @endif


                                @if($type == 'post')

                                        @foreach($sliders as $post)
                                            <li>
                                                <div class="block-images position-relative">
                                                    <a href="{{route('display.post',[$post->slug])}}">
                                                        <img  src="{{  asset('storage/'.$post->display) }}" class="img-fluid w-100" alt="{{ $post->title }}">
                                                    </a>
                                                    <div class="block-description text-white">
                                                        <h5 class="text-white">{{ $post->name }}</h5>
                                                        <div class="movie-time d-flex align-items-center my-2">
                                                            {{--                                            <div class="badge badge-secondary p-1 mr-2">10+</div>--}}
                                                            {{--                                            <span class="text-white">3h 15m</span>--}}
                                                        </div>
                                                        <div class="hover-buttons">
                                                            <a href="{{route('display.post',[$post->slug])}}" class="btn btn-hover" tabindex="0">
                                                                <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                @endif



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endif

</div>
