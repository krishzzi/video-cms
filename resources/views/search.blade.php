<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name}}|Search
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mt-4">
            <h1 class="mt-4 text-center">-: Search :-</h1>
            <div class="card bg-transparent">
                <form action="{{ route('search.via.form') }}" method="post" class="form-control">
                    @csrf
                    <div class="form-group ">
                        <input name="tag" type="text" class="form-control"
                               placeholder="type here to search...">
                        {{--                                                <button type="submit"></button>--}}
                        <button><i class="search-link ri-search-line"></i></button>
                    </div>
                </form>
            </div>


            @livewire('mintreu.slider.content-slider',['type'=>'post','title' => 'Top Stories'])


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


        </div>

        {{--        @include('blocks.footer')--}}
    @endsection
</x-theme>

