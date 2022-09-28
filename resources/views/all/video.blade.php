@extends('theme')

@section('content')


    @include('blocks.header')

    <!-- MainContent -->
    <div class="main-content">

        <div class="row">
            @foreach($content as $video)
                <div class="col-3">
                    <livewire:mintreu.card.video-card :content="$video" />
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center   text-sm-center bg-transparent float-right">
{{--            {!! $content->render() !!}--}}
            {{ $content->render() }}
        </div>


{{--        <livewire:mintreu.slider.x-y-slider  :content="$content" />--}}

    </div>


    @include('blocks.footer')
@endsection
