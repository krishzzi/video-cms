<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name ?? config('app.name')}}|Read|{{$post->slug}}
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mx-auto">

            <div class="row col-12 mt-4">



                   @if(!is_null($leftAdvert) && $leftAdvert->count())
                    <div class="bg-transparent col-2 mt-4">
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




                    <div class="card bg-transparent ">
                        <div class="card-header bg-transparent ">
                            <img src="{{ empty($post->display ) ? 'https://picsum.photos/1500/400' : asset('storage/'.$post->display) }}" class="img-fluid m-2 " alt="{{$post->title}}">
                            <h1 class="{{$post->font_size_title}} text-white">{{$post->title}}</h1>
                            <ul class="list-unstyled">
                                <li>

                                    @if($post->category->count())
                                        <i> Categories :</i>
                                        @foreach($post->category as $category)
                                            <a class="" href="{{route('category.single',[$category->slug])}}"><i>{{$category->name}}</i></a>,
                                        @endforeach
                                    @endif

                                </li>

                                <li>

                                    @if($post->tags->count())
                                        <i> Tags :</i>
                                        @foreach($post->tags as $tag)

                                            <a class="" href="{{route('search.tag',[$tag->name])}}"><i>{{$tag->name}}xxx</i></a>,

                                        @endforeach

                                    @endif

                                </li>


                            </ul>

                        </div>

                        <div class="card-body align-self-stretch  m-2">
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


                                {!! $post->desc !!}
                        </div>
                    </div>


                       @if(!is_null($rightAdvert) && $rightAdvert->count())
                           <div class="bg-transparent col-2 mt-4">
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

        {{--        @include('blocks.footer')--}}
    @endsection
</x-theme>

