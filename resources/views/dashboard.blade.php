<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    You're logged in!--}}
{{--                </div>--}}
{{--            </div>--}}


            <h1> My Watchlist</h1>

        </div>
    </div>

{{--    {{--}}
{{--    dd($inlist,$liked)--}}

{{--}}--}}


    <section class="overflow-hidden text-gray-700 ">

        <div class="container grid grid-cols-3 px-5 py-2 mx-auto lg:pt-12 lg:px-32">
            @foreach($inlist as $list)
            <div class="flex-m-1 md:-m-2">
                @foreach($list->videos as $video)

                <a  href="{{route('display.video',[$video->video_code])}}">
                    <div class="flex flex-wrap w-1/2 m-2">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                 height="{{ $video->thumb_height ?? 200 }}" width="{{ $video->thumb_width ?? 300 }}" src="{{ empty($video->display ) ? $video->thumbnail : asset('storage/'.$video->display) }}"  alt="{{$video->title}}">
                        </div>
                        {{ $video->title }}
                    </div>
                </a>
                @endforeach
            </div>
            @endforeach
        </div>

    </section>








</x-app-layout>
