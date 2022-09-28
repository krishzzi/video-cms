@extends('theme')

@section('content')

    @include('blocks.header')
    {{--    @include('blocks.Slider')--}}

    <!-- MainContent -->
    <div class="main-content">

        <div class="container mt-3 mb-2">

            <div>
                <h1 class="display-2 text-white">{{$post->title}}</h1>
                <img src="{{ empty($post->display ) ? 'https://picsum.photos/1500/400' : asset('storage/'.$post->display) }}" class="img-fluid" alt="{{$post->title}}">
            </div>

            <div class="justify-content-center p-2">
               {!! $post->desc !!}
            </div>

        </div>


    </div>


    @include('blocks.footer')
@endsection
