{{--<div class="main-content mb-5">--}}
{{--    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->--}}

{{--    <div class="card bg-transparent p-5">--}}

{{--        @livewire('mintreu.widgets.paginate-gallery',['type' => $type])--}}

{{--        @livewire('mintreu.widgets.infinite-scroller',['type' => $type])--}}

{{--        @livewire('mintreu.widgets.category-wise-content-gallery',['type'=> $type,'limit'=> 10])--}}


{{--    </div>--}}
{{--</div>--}}



@if(!empty($widgets['above']))
    @foreach($widgets['above'] as $widget)
        {{ $widget['instance']->renderToView() }}
    @endforeach
@endif


@if(!empty($widgets['between']))
    <div class="main-content">
        @foreach($widgets['between'] as $widget)
            {{ $widget['instance']->renderToView() }}
        @endforeach
    </div>
@endif

@if(!empty($widgets['below']))
    @foreach($widgets['below'] as $widget)
        {{ $widget['instance']->renderToView() }}
    @endforeach
@endif
