


<x-theme :setting="$setting">

    @section('layout_title') {{config('app.name')}}|Home @endsection


    @section('content')

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mt-8 p-5">



            @livewire('mintreu.slider.big-slider',['type'=> 'video'])
            @livewire('mintreu.slider.suggestion-slider',['type'=>'video','title' => 'Suggested Video'])
            @livewire('mintreu.slider.content-slider',['type'=>'video','title' => 'Popular Video'])
            @livewire('mintreu.slider.x-y-slider',['type'=> 'video','title' => 'Top 20 Videos'])

        </div>

            <livewire:mintreu.panel.panel-footer :setting="$setting" />
    @endsection
</x-theme>


