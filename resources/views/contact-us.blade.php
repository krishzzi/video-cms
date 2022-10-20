


<x-theme :setting="$setting">

    @section('layout_title') {{config('app.name')}}|Contact Us @endsection


    @section('content')

        {{--    @include('blocks.header')--}}

        <livewire:mintreu.panel.panel-header :setting="$setting" />
        <!-- MainContent -->
        <div class="main-content m-4">




            <div class="container">

                <div class="card bg-dark mt-5 mb-5">
                    <div class="card-header">
                        <h1 class="display-1 text-center">Contact Us</h1>
                    </div>

                    <div class="card-body">


                        <form  method="post" action="{{route('contact.us')}}">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Phone:</strong>
                                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Subject:</strong>
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                            @if ($errors->has('subject'))
                                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <strong>Message:</strong>
                                            <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                            @if ($errors->has('message'))
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </form>




                    </div>


                    <div class="card-footer">

                    </div>


                </div>


            </div>




        </div>

        @livewire('mintreu.panel.panel-footer')
        {{--        @include('blocks.footer')--}}
    @endsection
</x-theme>
