
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
