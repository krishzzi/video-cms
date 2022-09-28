<div>

    @if($contents->count())
        <section id="iq-favorites">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">{{ $title }}</h4>
                            @if($type == 'video')
                                <a href="{{ route('gallery.video') }}" class="text-primary">View all</a>
                            @endif
                            @if($type == 'post')
                                <a href="{{ route('gallery.post') }}" class="text-primary">View all</a>
                            @endif
                        </div>
                        <div class="favorites-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @if($type == 'video')
                                    @foreach($contents as $content)
                                        <livewire:mintreu.card.video-card :content="$content" />
                                    @endforeach
                                @endif

                                @if($type == 'post')
                                    @foreach($contents as $content)
                                        <livewire:mintreu.card.post-card :content="$content" />
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
