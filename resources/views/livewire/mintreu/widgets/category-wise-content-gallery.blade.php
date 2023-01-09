{{-- Category Wise Content Gallery Widget --}}
<div class="mt-5">
    @foreach($records as $category)

        @if($type == 'video' && $category->activeVideos->count())
            <section id="iq-favorites">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 overflow-hidden">
                            <div class="iq-main-header d-flex align-items-center justify-content-between">
                                <h4 class="main-title text-white">{{$category->name}}</h4>
                            </div>
                            <div class="favorites-contens">
                                <ul class="favorites-slider list-inline  row p-0 mb-0">

                                    @foreach($category->activeVideos as $record)

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
                                                    <h6 class="text-sm truncate text-danger"  style="z-index: 20">{{ \Illuminate\Support\Str::limit($record->title,30) }}</h6>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <a href="{{route('video.view',[$record->slug])}}">
                                                            <div class="hover-buttons">
                                                                <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now</span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>

                                                <div class="block-social-info">
                                                    <ul class="list-inline p-0 m-0 music-play-lists ">
                                                        <li ><span class="bg-dark"><i class="fas fa-share-alt"></i></span></li>
                                                        <li wire:click="likeAction({{$record->id}})"><span class="bg-dark"><i class="far fa-thumbs-up"></i></span></li>
                                                        <li wire:click="inlistAction({{$record->id}})"><span class="bg-dark"><i class="ri-add-line"></i></span></li>
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

        @elseif($type == 'post' && $category->activePosts->count())
            <section id="iq-favorites">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 overflow-hidden">
                            <div class="iq-main-header d-flex align-items-center justify-content-between">
                                <h4 class="main-title text-white">{{$category->name}}</h4>
                            </div>
                            <div class="favorites-contens">
                                <ul class="favorites-slider list-inline  row p-0 mb-0">
                                    @foreach($category->activePosts as $record)



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
                                                    <h6 class="text-sm truncate text-danger"  style="z-index: 20">{{ \Illuminate\Support\Str::limit($record->title,30) }}</h6>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <a href="{{route('post.view',[$record->slug])}}">
                                                            <div class="hover-buttons">
                                                                <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i> Read Now</span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>

                                                <div class="block-social-info">
                                                    <ul class="list-inline p-0 m-0 music-play-lists ">
                                                        <li ><span class="bg-dark"><i class="fas fa-share-alt"></i></span></li>
                                                        <li wire:click="likeAction({{$record->id}})"><span class="bg-dark"><i class="far fa-thumbs-up"></i></span></li>
                                                        <li wire:click="inlistAction({{$record->id}})"><span class="bg-dark"><i class="ri-add-line"></i></span></li>
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


        @endif



    @endforeach

</div>
