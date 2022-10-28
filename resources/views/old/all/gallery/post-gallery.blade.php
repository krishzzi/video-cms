@extends('theme')

@section('content')

    @include('blocks.header')
{{--    @include('blocks.Slider')--}}

    <!-- MainContent -->
    <div class="main-content">
{{--        @include('blocks.suggested_video-slider')--}}

{{--        @include('blocks.gallery-widget')--}}

        @if($categories->count() > 1)

        @foreach($categories as $category)

            @include('blocks.post-slider')

        @endforeach

        @else
            @if(isset($category) && $category->exists)
            @include('blocks.post-slider')
            @else
                <div class="mt-5 mx-auto text-center">
                    <h1> No Post Available!</h1>
                </div>
            @endif
        @endif


    </div>


    @include('blocks.footer')
@endsection
