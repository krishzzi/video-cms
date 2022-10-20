<x-theme :setting="$setting">
   @section('layout_title')
        {{ $setting->name ?? config('app.name')}}|Videos
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mt-4">
            @livewire('mintreu.slider.content-slider',['type'=>'video','title' => 'Top Videos'])


            <div class="container">
                <div class="col-12 mt-4">
                    <div class="iq-main-header align-items-center justify-content-between display-3 text-white text-center">
                        All Videos
                    </div>
                    <div class=" row list-unstyled">
                        @foreach($contents as $content)
                            <div class="col-3">
                                <livewire:mintreu.card.video-card :content="$content" />
                            </div>
                        @endforeach
                    </div>
                    <div class="text-white p-2 m-2 list-unstyled">
                        {!! $contents->links() !!}
                    </div>
                </div>
            </div>


            @livewire('mintreu.slider.suggestion-slider',['type'=>'video','title' => 'For You'])


        </div>

{{--        @include('blocks.footer')--}}
    @endsection
</x-theme>

