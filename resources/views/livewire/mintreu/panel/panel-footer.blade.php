<footer class="mb-0">
    <div class="container-fluid">
        <div class="block-space">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <ul class="f-link list-unstyled mb-0">
                        @if(!is_null($aboutUs))
                            <li><a href="{{ route('read.policy',[$aboutUs->slug]) }}">{{$aboutUs->title}}</a></li>
                        @endif
                        @foreach($policies->where('section',1)->take(5) as $policy)
                                <li><a href="{{ route('read.policy',[$policy->slug]) }}">{{ $policy->title }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <ul class="f-link list-unstyled mb-0">
                        @foreach($policies->where('section',1)->take(5) as $policy)
                            <li><a href="{{ route('read.policy',[$policy->slug]) }}">{{ $policy->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <ul class="f-link list-unstyled mb-0">
                        @foreach($policies->where('section',1)->take(4) as $policy)
                            <li><a href="{{ route('read.policy',[$policy]) }}">{{ $policy->title }}</a></li>
                        @endforeach
                        <li><a href="{{route('contact.us.form')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 r-mt-15">
                    <div class="d-flex">
                        @if(!is_null($setting->social))
                            @foreach( $setting->social as $social)
                                <a href="{{$social['link']}}" class="s-icon">
                                    <i class="ri-{{$social['name']}}-fill"></i>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright py-2">
        <div class="container-fluid">
            <p class="mb-0 text-center font-size-14 text-body">{{ ucwords(config('app.name')) }} - {{ \Illuminate\Support\Carbon::now()->yearIso }} All Rights Reserved |  <i class="text-white">Powered By <a href="https://mintreu.com">Mintreu Services</a></i></p>
        </div>
    </div>
</footer>
<!-- MainContent End-->
<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
</div>

