
<section id="iq-favorites ">
    <div class="container-fluid mt-5 mb-2">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="iq-main-header d-flex align-items-center justify-content-between">
                    <h4 class="main-title">{{ $category->name }}</h4>
                    <a href="{{route('gallery.video.category',[$category->slug])}}" class="text-primary">View all</a>
                </div>
                <div class="favorites-contens">
                    <ul class="favorites-slider list-inline  row p-0 mb-0">
                        @foreach($category->posts as $post)
                            <li class="slide-item">
                                <a href="{{route('display.post',[$post->id])}}">
                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="{{ empty($post->display ) ? 'https://picsum.photos/300/200' : asset('storage/'.$post->display) }}" class="img-fluid" alt="{{$post->title}}">
                                        </div>
                                        <div class="block-description ">
                                            <h6 class="">{{ \Illuminate\Support\Str::limit($post->title,20) }}</h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                {{--                                            <div class="badge badge-secondary p-1 mr-2">7+</div>--}}
                                                {{--                                            <span class="text-white">2 Seasons</span>--}}
                                            </div>
                                            <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Read Now
                                          </span>
                                            </div>
                                        </div>
                                        <div class="block-social-info">
                                            <ul class="list-inline p-0 m-0 music-play-lists">
                                                <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                <li><span><i class="ri-heart-fill"></i></span></li>
                                                <li><span><i class="ri-add-line"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
