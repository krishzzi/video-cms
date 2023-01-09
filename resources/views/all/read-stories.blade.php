<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name ?? config('app.name')}}|Read|{{$post->slug}}
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mx-auto">


            <div class="row mt-4 p-3">


                @if(!is_null($leftAdvert) && $leftAdvert->count())
                    <div class="bg-transparent col-2 ">
                        @foreach( $leftAdvert as $ads)
                            @if($ads->type == 'block')
                                @if($ads->provider == 'private')

                                    <a target="_blank" href="{{ $ads->target_url}}">
                                        <img class="img-fluid" src="{{ asset('/storage/'.$ads->target_banner)}}">
                                    </a>

                                @elseif($ads->provider == 'google')
                                    {!! $ads->code !!}
                                @endif

                            @endif

                        @endforeach
                    </div>
                @endif

                <div class="card border-0 bg-transparent @if(!is_null($leftAdvert) && !is_null($rightAdvert)) col-8 @elseif(!is_null($leftAdvert) || !is_null($rightAdvert)) col-10 @else col-12 @endif ">

                    <div class="card-header border-0">
                        <div class="text-center">
                            <img src="{{ empty($post->display ) ? 'https://picsum.photos/1200/400' : asset('storage/'.$post->display) }}" class="img-fluid rounded " width="100%" alt="{{$post->title}}">
                        </div>
                    </div>
                    <div class="card-body p-2 m-2 border-0">
                        <h1 class="{{$post->font_size_title}} text-white">{{$post->title}}</h1>
                        <ul class="list-group border-0">
                            <li class="list-group-item bg-transparent border-0">
                                @if($post->category->count())
                                    <i class="text-success h5"> Categories :</i>
                                    @foreach($post->category as $category)
                                        <span><a class="text-success text-sm hover" href="{{route('category.single',[$category->slug])}}"><i>{{$category->name}}</i>,</a> </span>
                                    @endforeach
                                @endif
                            </li>
                            <li class="list-group-item bg-transparent border-0">
                                @if($post->tags->count())
                                    <i> Tags :</i>
                                    @foreach($post->tags as $tag)
                                        <a class="btn btn-sm btn-outline-info rounded" href="{{route('search.tag',[$tag->name])}}"><i>{{$tag->name}}xxx</i></a>,
                                    @endforeach
                                @endif
                            </li>
                        </ul>


                        @if(!is_null($middleAdvert) && $middleAdvert->count())
                            <div class="bg-transparent col-2 mt-4">
                                @foreach( $middleAdvert as $ads)
                                    @if($ads->type == 'block')
                                        @if($ads->provider == 'private')

                                            <a target="_blank" href="{{ $ads->target_url}}">
                                                <img class="img-fluid" src="{{ asset('/storage/'.$ads->target_banner)}}">
                                            </a>

                                        @elseif($ads->provider == 'google')
                                            {!! $ads->code !!}
                                        @endif

                                    @endif

                                @endforeach
                            </div>
                        @endif



                    </div>
                    <div class="card-footer border-0">
                        {!! $post->desc !!}
                    </div>

                </div>

                    @if(!is_null($rightAdvert) && $rightAdvert->count())
                        <div class="bg-transparent col-2 ">
                            @foreach( $rightAdvert as $ads)
                                @if($ads->type == 'block')
                                    @if($ads->provider == 'private')

                                        <a target="_blank" href="{{ $ads->target_url}}">
                                            <img class="img-fluid" src="{{ asset('/storage/'.$ads->target_banner)}}">
                                        </a>

                                    @elseif($ads->provider == 'google')
                                        {!! $ads->code !!}
                                    @endif

                                @endif

                            @endforeach
                        </div>
                    @endif


            </div>






        </div>

            <livewire:mintreu.panel.panel-footer :setting="$setting" />
    @endsection
</x-theme>

