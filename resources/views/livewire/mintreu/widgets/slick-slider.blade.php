{{-- Slick Slider Widget --}}
<div class="mt-3 mb-2">

    @if(isset($records) && $records->count())
        <section id="iq-favorites">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            @if($title)
                            <h4 class="main-title">{{$title}}</h4>
                            @endif
                            @if($type == 'video')
                                <a href="{{ route('videos') }}" class="text-primary">View all</a>
                            @endif
                            @if($type == 'post')
                                <a href="{{ route('posts') }}" class="text-primary">View all</a>
                            @endif
                        </div>
                        <div class="favorites-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach($records as $record)




                                    <li class="slide-item">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                    @if(!is_null($record->display))
                                                        <img  src="{{ str_contains($record->display,'http') ? $record->display : asset('storage/'.$record->display) }}"
                                                              class="img-fluid w-100 postion"
                                                              alt="{{ $record->title}}
                                                          ">
                                                    @elseif(!is_null($record->thumbnail) && $type == 'video')
                                                        <img  src="{{ str_contains($record->thumbnail,'http') ? $record->thumbnail : asset('storage/'.$record->thumbnail) }}"
                                                              class="img-fluid w-100 postion"
                                                              alt="{{ $record->title}}
                                                          ">
                                                    @else
                                                    <img  src="https://via.placeholder.com/200x300?text=placeholder"
                                                          alt="{{ $record->title}}
                                                          ">
                                                    @endif
                                            </div>
                                            <div class="block-description">
                                                <h6>{{ \Illuminate\Support\Str::limit($record->title,30) }}</h6>
                                                <div class="movie-time d-flex align-items-center my-2"></div>
                                                @if($type == 'video')
                                                    <a href="{{route('video.view',[$record->slug])}}">
                                                        <div class="hover-buttons">
                                                            <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now</span>
                                                        </div>
                                                    </a>

                                                @else
                                                    <a href="{{route('post.view',[$record->slug])}}">
                                                        <div class="hover-buttons">
                                                            <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i> Read Now</span>
                                                        </div>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li ><span><i class="fas fa-share-alt"></i></span></li>
                                                    <li wire:click="likeAction({{$record->id}})"><span><i class="far fa-thumbs-up"></i></span></li>
                                                    <li wire:click="inlistAction({{$record->id}})"><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
