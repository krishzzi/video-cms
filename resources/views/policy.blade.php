
<x-theme :setting="$setting">

    @section('layout_title') {{config('app.name')}}|Home @endsection


    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content m-4">


                <div class="card mt-4 p-4 bg-transparent text-white border-0 ">

                    <div class="card-title"><h1 class="text-center">{{ $policy->title }}</h1></div>
                    <div class="card-body text-justify"> {!! $policy->desc !!}</div>
                    @if(!is_null($policy->redirect_url))
                    <div class="card-footer text-center"> <a class="btn btn-sm btn-outline-success" href="{{ $policy->redirect_url }}"> Click Here</a></div>
                    @endif
                </div>



        </div>

            <livewire:mintreu.panel.panel-footer :setting="$setting" />

    @endsection
</x-theme>
