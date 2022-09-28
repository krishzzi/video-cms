

<li class="slide-item">
{{--    <a href="{{route('display.video',[$video->video_code])}}">--}}
        <div class="block-images position-relative">
            <div class="img-box">
                <img height="{{ $video->thumb_height ?? 200 }}" width="{{ $video->thumb_width ?? 300 }}" src="{{ empty($video->display ) ? $video->thumbnail : asset('storage/'.$video->display) }}" class="img-fluid" alt="{{$video->title}}">
            </div>
            <div class="block-description ">
                <h6 class="">{{ \Illuminate\Support\Str::limit($video->title,20) }}</h6>
                <div class="movie-time d-flex align-items-center my-2">
                    {{--                                            <div class="badge badge-secondary p-1 mr-2">7+</div>--}}
                    {{--                                            <span class="text-white">2 Seasons</span>--}}
                </div>
                <a href="{{route('display.video',[$video->video_code])}}">
                <div class="hover-buttons">
                    <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>Play Now</span>
                </div>
                </a>
            </div>
            <div class="block-social-info">
                <ul class="list-inline p-0 m-0 music-play-lists">

                    <li wire:click="placeLike()"><span>
{{--                            <i class="ri-volume-mute-fill"></i>--}}
                            <i class="fas fa-share-alt"></i>
                        </span></li>
                    <li><span><i class="ri-heart-fill"></i></span></li>
                    <li><span><i class="ri-add-line"></i></span></li>
                </ul>
            </div>
        </div>
{{--    </a>--}}
</li>
