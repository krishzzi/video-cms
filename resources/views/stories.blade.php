<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name}}|Stories
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mt-4">
            @livewire('mintreu.slider.content-slider',['type'=>'post','title' => 'Top Posts'])


            <div class="container">
                <div class="col-12 mt-4">
                    <div class="iq-main-header align-items-center justify-content-between display-3 text-white text-center">
                        All Posts
                    </div>
                    <div class=" row list-unstyled">
                        @foreach($contents as $content)
                            <div class="col-3">
                                <livewire:mintreu.card.post-card :content="$content" />
                            </div>
                        @endforeach
                    </div>
                    <div class="text-white p-2 m-2 list-unstyled">
                        {!! $contents->links() !!}
                    </div>
                </div>
            </div>


            @livewire('mintreu.slider.suggestion-slider',['type'=>'post','title' => 'For You'])


        </div>

            <livewire:mintreu.panel.panel-footer :setting="$setting" />
    @endsection
</x-theme>

