

<li class="slide-item">

    <div class="block-images position-relative m-2">
        <div class="img-box">
            {{--                height="{{ $video->thumb_height ?? 200 }}" width="{{ $video->thumb_width ?? 300 }}"--}}
            <img  src="{{ empty($post->display) ? 'https://picsum.photos/150/80' : asset('storage/'.$post->display) }}" class="img-fluid w-100" alt="{{ $post->title}}">
        </div>
        <div class="block-description">
            <h6>{{ \Illuminate\Support\Str::limit($post->title,30) }}</h6>
            <div class="movie-time d-flex align-items-center my-2"></div>
            <a href="{{route('display.post',[$post->slug])}}">
                <div class="hover-buttons">
                    <span class="btn btn-outline-primary"><i class="fa fa-play mr-1" aria-hidden="true"></i> Read Now</span>
                </div>
            </a>
        </div>
        <div class="block-social-info">
            <ul class="list-inline p-0 m-0 music-play-lists">
                <li ><span><i class="fas fa-share-alt"></i></span></li>
                <li wire:click="likeAction({{$post->id}})"><span><i class="far fa-thumbs-up"></i></span></li>
                <li wire:click="inlistAction({{$post->id}})"><span><i class="ri-add-line"></i></span></li>
            </ul>
        </div>
    </div>

</li>
