<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name ?? config('app.name')}}|Watch|{{$video->slug}}
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mx-auto">

            <div class="row col-12 mt-4">
                @if(!empty($adverts))
                    <div class="bg-transparent col-2 mt-4">
                        @foreach( $adverts as $ads)

                            @if($ads->position == 'left')
                                @if($ads->type == 'block')
                                    @if($ads->provider == 'private')

                                        <a target="_blank" href="{{ $ads->target_url}}">
                                            <img class="img-fluid" src="{{ asset('/storage/'.$ads->target_banner)}}">
                                        </a>

                                    @elseif($ads->provider == 'google')
                                        {!! $ads->code !!}
                                    @endif

                                @endif
                            @endif

                        @endforeach
                    </div>
                @endif

                <div class="container @if(!empty($adverts)) col-8 @else col-12 @endif">

                    <div class="card  bg-transparent col-12">
                        <div class="card-header bg-transparent ">
                            <div class="text-center  p-3 ">
                                <iframe  class="embed-responsive-item mt-3" src="{{$video->embed_code}}" width="{{$video->width}}" height="{{$video->height}}" frameborder="0"></iframe>
                            </div>



                            <h3 class=" text-white">{{$video->title}}</h3>
                            <h4 class="text-white"><b>By : </b> {{ $video->channel }}</h4>
                            <ul class="list-unstyled">
                                <li>

                                    @if($video->category->count())
                                       <i> Categories :</i>
                                        @foreach($video->category as $category)
                                            <a class="" href="{{route('category.single',[$category->slug])}}"><i>{{$category->name}}</i></a>,
                                        @endforeach
                                    @endif

                                </li>

                                <li>

                                    @if($video->tags->count())
                                       <i> Tags :</i>
                                        @foreach($video->tags as $tag)

                                            <a class="" href="{{route('search.tag',[$tag->name])}}"><i>{{$tag->name}}xxx</i></a>,

                                        @endforeach

                                    @endif

                                </li>


                            </ul>

                        </div>

                        @if(!empty($adverts))
                            <div class="bg-transparent col-2 mt-4">
                                @foreach( $adverts as $ads)

                                    @if($ads->position == 'middle')
                                        @if($ads->type == 'block')
                                            @if($ads->provider == 'private')

                                                <a target="_blank" href="{{ $ads->target_url}}">
                                                    <img class="img-fluid w-100" src="{{ asset('/storage/'.$ads->target_banner)}}">
                                                </a>

                                            @elseif($ads->provider == 'google')
                                                {!! $ads->code !!}
                                            @endif

                                        @endif
                                    @endif

                                @endforeach
                            </div>
                        @endif



                        <div class="card-body justify-content-center m-2">
                            {!! $video->desc !!}
                        </div>
                    </div>

                </div>


                @if(!empty($adverts))
                    <div class="bg-transparent col-2 mt-4">
                        @foreach( $adverts as $ads)

                            @if($ads->position == 'right')
                                @if($ads->type == 'block')
                                    @if($ads->provider == 'private')

                                        <a target="_blank" href="{{ $ads->target_url}}">
                                            <img class="img-fluid" src="{{ asset('/storage/'.$ads->target_banner)}}">
                                        </a>

                                    @elseif($ads->provider == 'google')
                                        {!! $ads->code !!}
                                    @endif

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

