<x-layout::bootstrap :support="$support">
    <x-slot name="style">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/theme/streamit/css/typography.css') }}">
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('vendor/theme/streamit/css/style.css') }}" />
        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('vendor/theme/streamit/css/responsive.css') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </x-slot>

    <x-slot name="slot">
        {{-- HEADER NAVIGATION SECTION--}}
        <x-mintreu.themes.thirdparty.stream-it.blocks.header-block></x-mintreu.themes.thirdparty.stream-it.blocks.header-block>
        {{-- MAIN CONTENT SECTION--}}
        {{$slot ?? 'No Content Found For Display'}}
        {{-- FOOTER SECTION--}}
        <x-mintreu.themes.thirdparty.stream-it.blocks.footer-block></x-mintreu.themes.thirdparty.stream-it.blocks.footer-block>
    </x-slot>


    <x-slot name="script">
        <!-- Slick JS -->
        <script src="{{ asset('vendor/theme/streamit/js/slick.min.js')}}"></script>
        <!-- owl carousel Js -->
        <script src="{{ asset('vendor/theme/streamit/js/owl.carousel.min.js')}}"></script>
        <!-- select2 Js -->
        <script src="{{ asset('vendor/theme/streamit/js/select2.min.js')}}"></script>
        <!-- Magnific Popup-->
        <script src="{{ asset('vendor/theme/streamit/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Slick Animation-->
        <script src="{{ asset('vendor/theme/streamit/js/slick-animation.min.js')}}"></script>
        <!-- Custom JS-->
        <script src="{{ asset('vendor/theme/streamit/js/custom.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('script')
    </x-slot>
</x-layout::bootstrap>
