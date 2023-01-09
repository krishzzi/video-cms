<div class="main-content mb-5">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->

    <div class="col-12 py-4 bg-transparent" style="min-height: 80vh">
        {{-- In work, do what you enjoy. --}}


        @livewire('mintreu.widgets.video-player',['record' => $record])




{{--        <div class="col-12 mt-4 " style="min-height: 400px">--}}

{{--            <div class="text-center d-none d-md-block">--}}
{{--                <iframe  class="embed-responsive-item" src="{{$record->embed_code}}" width="{{ ($record->width > 0) ? $record->width : '100%'}}" @if($record->height)height="{{$record->height}}" @endif frameborder="0"></iframe>--}}
{{--            </div>--}}

{{--            <div class="text-center d-sm-block d-md-none">--}}
{{--                <iframe  class="embed-responsive-item w-100" src="{{$record->embed_code}}" width="{{ ($record->width > 0) ? $record->width : '100%'}}" @if($record->height)height="{{$record->height}}" @endif frameborder="0"></iframe>--}}
{{--            </div>--}}


{{--            <h1 class="display-4 text-white d-none d-md-block  p-3">{{ucfirst($record->title)}}</h1>--}}
{{--            <h3 class=" text-white  d-sm-block d-md-none p-3">{{ucfirst($record->title)}}</h3>--}}

{{--            <div class="col-12 p-2">--}}
{{--                @if(isset($record->category) && $record->category->count())--}}
{{--                    @foreach($record->category as $category)--}}
{{--                        <a class="btn btn-outline-primary">{{$category->name}}</a>--}}
{{--                    @endforeach--}}

{{--                @endif--}}


{{--                @if(isset($record->tags) && $record->tags->count())--}}
{{--                    @foreach($record->tags as $tag)--}}
{{--                        <a class="btn btn-outline-primary">{{$tag->name}}</a>--}}
{{--                    @endforeach--}}

{{--                @endif--}}



{{--            </div>--}}

{{--        </div>--}}





{{--        <div class="col-12  p-3">--}}
{{--            <p class="mt-2 mb-2 p-1 h5 text-justify"> {!! $record->desc !!}</p>--}}
{{--        </div>--}}


    </div>
</div>
