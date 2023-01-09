<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name}}|Search
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content border-0">

            <div class="card bg-transparent m-4 p-4 border-0">
                <h1 class="mt-4 text-center">-: Search :-</h1>
                <div class="card bg-transparent border-0">
                    <div class="card-body m-4 p-4">
                        <form action="{{ route('search.via.form') }}" method="post" class="form-control border-0">
                            @csrf


                            <div class="input-group mb-3">
                                <input type="text" name="tag" class="form-control" placeholder="type here to search..." aria-label="Search Keyword" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary text-white" type="submit"><i class="search-link ri-search-line"></i></button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>





                @if($found)

                    @if($allVideos->count())
                        <div class="container">
                            <div class="col-12 mt-4">
                                <div class="iq-main-header align-items-center justify-content-between h3 text-white text-center">
                                    Matching Videos
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


                    @if($allPosts->count())
                        <div class="container">
                            <div class="col-12 mt-4">
                                <div class="iq-main-header align-items-center justify-content-between h3 text-white text-center">
                                    Matching Stories
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
                @else

                    <div class="container text-center">
                        <h2 class="display-4"> No Result Found!</h2>
                    </div>

                @endif







                @livewire('mintreu.slider.suggestion-slider',['type'=>'video','title' => 'Top Videos'])

                @livewire('mintreu.slider.content-slider',['type'=>'post','title' => 'Top Stories'])
            </div>

        </div>

            <livewire:mintreu.panel.panel-footer :setting="$setting" />
    @endsection
</x-theme>

