<x-theme :setting="$setting">
    @section('layout_title')
        {{ $setting->name}}|Story
    @endsection

    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content mx-auto">

            <div class="row col-12 mt-4">
                <div class="bg-primary col-1">
                    ss
                </div>

                <div class="container col-10">

                    <livewire:mintreu.content.read-post :post="$post" />



                </div>
                <div class="bg-primary col-1">
                    we
                </div>
            </div>

        </div>

        {{--        @include('blocks.footer')--}}
    @endsection
</x-theme>

