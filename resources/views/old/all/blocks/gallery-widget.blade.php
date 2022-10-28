
<section id="iq-topten">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="iq-main-header d-flex align-items-center justify-content-between">
                    <h4 class="main-title topten-title-sm">Top Videos</h4>
                </div>
                <div class="topten-contens">
                    <h4 class="main-title topten-title">Top Videos</h4>
                    <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                        @foreach($data['videos']->sortBy('views') as $video)
                        <li>
                            <a href="{{route('display.video',[$video->video_code])}}">

                                <img  src="{{ empty($video->display ) ? $video->thumbnail : asset('storage/'.$video->display) }}" class="img-fluid w-100" alt="{{$video->title}}">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="vertical_s">
                        <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                            @foreach($data['videos']->sortBy('views') as $video)
                            <li>
                                <div class="block-images position-relative">
                                    <a href="{{route('display.video',[$video->video_code])}}">
                                        <img height="{{ $video->thumb_height ?? 200 }}" width="{{ $video->thumb_width ?? 300 }}" src="{{ empty($video->display ) ? $video->thumbnail : asset('storage/'.$video->display) }}" class="img-fluid w-100" alt="{{$video->title}}">
                                    </a>
                                    <div class="block-description">
                                        <h5>{{ $video->name }}</h5>
                                        <div class="movie-time d-flex align-items-center my-2">
{{--                                            <div class="badge badge-secondary p-1 mr-2">10+</div>--}}
{{--                                            <span class="text-white">3h 15m</span>--}}
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="{{route('display.video',[$video->video_code])}}" class="btn btn-hover" tabindex="0">
                                                <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

