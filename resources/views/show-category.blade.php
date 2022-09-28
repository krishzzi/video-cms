<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name}}|Category
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mt-4">
{{--            @livewire('mintreu.slider.content-slider',['type'=>'post','title' => 'Top Posts'])--}}




        @if($allPosts->count())
            <div class="container">
                <div class="col-12 mt-4">
                    <div class="iq-main-header align-items-center justify-content-between h3 text-white text-center">
                        {{$category->name}} Posts
                    </div>
                    <div class=" row list-unstyled">
                        @foreach($allPosts as $content)
                            <div class="col-3">
                                <livewire:mintreu.card.post-card :content="$content" />
                            </div>
                        @endforeach
                    </div>
                    <div class="text-white p-2 m-2 list-unstyled">
                        {!! $allPosts->links() !!}
                    </div>
                </div>
            </div>
        @endif



            @if($allVideos->count())
                <div class="container">
                    <div class="col-12 mt-4">
                        <div class="iq-main-header align-items-center justify-content-between h3 text-white text-center">
                            {{$category->name}} Videos
                        </div>
                        <div class=" row list-unstyled">
                            @foreach($allVideos as $content)
                                <div class="col-3">
                                    <livewire:mintreu.card.video-card :content="$content" />
                                </div>
                            @endforeach
                        </div>
                        <div class="text-white p-2 m-2 list-unstyled">
                            {!! $allVideos->links() !!}
                        </div>
                    </div>
                </div>
            @endif




{{--            @livewire('mintreu.slider.suggestion-slider',['type'=>'post','title' => 'For You'])--}}


        </div>

        {{--        @include('blocks.footer')--}}
    @endsection
</x-theme>

