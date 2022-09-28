


<x-theme :setting="$setting">
    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content m-4">



            @livewire('mintreu.slider.big-slider',['type'=> 'video'])
            @livewire('mintreu.slider.suggestion-slider',['type'=>'video','title' => 'Suggested Video'])
            @livewire('mintreu.slider.content-slider',['type'=>'video','title' => 'Popular Video'])
            @livewire('mintreu.slider.x-y-slider',['type'=> 'video','title' => 'Top 20 Videos'])

        </div>

{{--        @include('blocks.footer')--}}
    @endsection
</x-theme>

