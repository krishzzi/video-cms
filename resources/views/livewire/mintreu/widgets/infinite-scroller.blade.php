{{-- Infinite Content Scroller Widget --}}
<div class="container p-4 mx-auto">
{{--    <h1 class="text-muted">Infinite Load Records</h1>--}}

    <div class="row">
        @foreach($records as $record)
            <div class="card col-12 col-md-6 col-lg-3  border-none bg-transparent col-3 px-2">
                <a href="{{route($type.'.view',[$record['slug']])}}">
                    @if(!is_null($record['display']))
                        <img  src="{{ str_contains($record['display'],'http') ? $record['display'] : asset('storage/'.$record['display']) }}"
                              class="card-img-to w-100 "
                              alt="{{ $record['title']}}
                                                          ">
                    @elseif(!is_null($record['thumbnail']) && $type == 'video')
                        <img  src="{{ str_contains($record['thumbnail'],'http') ? $record['thumbnail'] : asset('storage/'.$record['thumbnail']) }}"
                              class="img-fluid w-100 "
                              alt="{{ $record['title']}}
                                                          ">
                    @else
                        <img  src="https://via.placeholder.com/200x300?text=placeholder"
                              alt="{{ $record['title']}}
                                                          ">
                    @endif
                </a>

                <div class="card-body">
                    <h6 class="text-white " style="font-size: 1.5rem">{{ \Illuminate\Support\Str::limit($record['title'],30) }}</h6>
                    <div class="py-2 justify-center justify-items-center">
                        <div class="float-left">
                            <a href="{{route($type.'.view',[$record['slug']])}}">
                                <div class="hover-buttons">
                                    <span class="btn btn-hover py-2 px-3 rounded" style="font-size: 0.8rem"><i class="fa fa-play mr-1" aria-hidden="true"></i> @if($type == 'video') Play @else Read @endif Now</span>
                                </div>
                            </a>
                        </div>

                        <ul class="list-unstyled p-0 m-0  d-inline-flex float-right">
                            <li class="mx-1"><span><i class="fas fa-share-alt"></i></span></li>
                            <li class="mx-1" wire:click="likeAction({{$record['id']}})"><span><i class="far fa-thumbs-up"></i></span></li>
                            <li class="mx-1" wire:click="inlistAction({{$record['id']}})"><span><i class="ri-add-line"></i></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        @if($hasMorePages)
            <div class="col-12 p-5 text-center">
                <button class="btn btn-lg btn-outline-danger text-white" wire:click.prevent="loadRecords">Load Records</button>
            </div>
        @endif
    </div>

    @if($hasMorePages)
        <div
            x-data="{
                init () {
                    let observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                @this.call('loadRecords')
                            }
                        })
                    }, {
                        root: null
                    });
                    observer.POLL_INTERVAL = 100
                    observer.observe(this.$el);
                }
            }"
            class="grid grid-cols-1 gap-8 mt-4 md:grid-cols-1 lg:grid-cols-1"
        >
        </div>
    @endif
</div>
