<x-layout::layout :manifest="false" :vite="false" :ogTag="true" :preloader="true">


    <x-slot name='layout_title'>@yield('layout_title')</x-slot>

    <x-slot name='layout_keyword'></x-slot>
    <x-slot name='layout_description'></x-slot>

    <x-slot name="layout_favicon">
        {{asset('storage/'.$setting->logo)}}
    </x-slot>

    <x-slot name="og_tag_slot">
        @if(!empty($setting->meta))
        @foreach($setting->meta as $meta)
            <meta property="og:{{$meta['key']}}" content="{{$meta['value']}}">
        @endforeach
        @endif

    </x-slot>


    <x-slot name="header">{{ $setting->header }}</x-slot>

    <x-slot name="footer">{{$setting->footer}}</x-slot>



    <x-slot name="stylesheet">
        <!-- Bootstrap CSS -->
{{--        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </x-slot>


    <x-slot name="javascript">
        <!-- jQuery, Popper JS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Slick JS -->
        <script src="{{ asset('js/slick.min.js')}}"></script>
        <!-- owl carousel Js -->
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <!-- select2 Js -->
        <script src="{{ asset('js/select2.min.js')}}"></script>
        <!-- Magnific Popup-->
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Slick Animation-->
        <script src="{{ asset('js/slick-animation.min.js')}}"></script>
        <!-- Custom JS-->
        <script src="{{ asset('js/custom.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </x-slot>

    <x-slot name="slot">


    @yield('content')
    </x-slot>

</x-layout::layout>
