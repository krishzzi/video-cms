<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name}}|Story
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mx-auto">

            <div class="row col-12 mt-4">
                <div class="bg-primary col-1">
                    ss
                </div>

                <div class="container col-10">

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

                        <div class="card-body justify-content-center m-2">
                            {!! $video->desc !!}
                        </div>
                    </div>

                </div>
                <div class="bg-primary col-1">
                    we
                </div>
            </div>

        </div>

        {{--        @include('blocks.footer')--}}
    @endsection
</x-theme>

