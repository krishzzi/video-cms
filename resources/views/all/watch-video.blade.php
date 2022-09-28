@extends('theme')


@section('content')
    @include('blocks.header')

    <div class="main-content">
        <div class="container">
            <div class="text-center  p-3 ">
                <iframe  class="embed-responsive-item mt-3" src="{{$video->embed_code}}" width="{{$video->width}}" height="{{$video->height}}" frameborder="0"></iframe>
            </div>

            <div class="mt-2">
                <h3 class="text-white"><b>Video : </b>{{ $video->title }}</h3>
                <h4 class="text-white"><b>Channel : </b> {{ $video->channel }}</h4>
                {{--            Search Fields--}}
                <h5 class="text-white">Tags : {{ implode(',',$video->tags->pluck('name')->toArray()) }}</h5>
                <p class="text-white m-2">{{ $video->desc }}</p>
            </div>


        </div>

    </div>

    @include('blocks.footer')

@endsection
