

<li class="slide-item">

        <div class="block-images position-relative">
            <div class="img-box">
{{--                height="{{ $video->thumb_height ?? 200 }}" width="{{ $video->thumb_width ?? 300 }}"--}}
                <img  src="{{ empty($video->display ) ? $video->thumbnail : asset('storage/'.$video->display) }}" class="img-fluid w-100" alt="{{$video->title}}">
            </div>
            <div class="block-description">
                <h6>{{ \Illuminate\Support\Str::limit($video->title,30) }}</h6>
                <div class="movie-time d-flex align-items-center my-2"></div>
                <a href="{{route('display.video',[$video->slug])}}">
                <div class="hover-buttons">
                     <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now</span>
                </div>
                </a>
            </div>
            <div class="block-social-info">
                <ul class="list-inline p-0 m-0 music-play-lists">
                    <li ><span><i class="fas fa-share-alt"></i></span></li>
                    <li wire:click="likeAction({{$video->id}})"><span><i class="far fa-thumbs-up"></i></span></li>
                    <li wire:click="inlistAction({{$video->id}})"><span><i class="ri-add-line"></i></span></li>
                </ul>
            </div>
        </div>

</li>
