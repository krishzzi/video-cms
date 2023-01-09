<div class="main-content mb-5">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->

    <div class="card bg-transparent" style="min-height: 80vh">
    {{-- In work, do what you enjoy. --}}

        <div class="card-img-top ">
            @if(!is_null($record->display))
                <img  src="{{ str_contains($record->display,'http') ? $record->display : asset('storage/'.$record->display) }}"
                      class="card-img-to w-100 " height="500px"
                      alt="{{ $record->title}}
                                                          ">
            @elseif(!is_null($record->thumbnail) && $type == 'video')
                <img  src="{{ str_contains($record->thumbnail,'http') ? $record->thumbnail : asset('storage/'.$record->thumbnail) }}"
                      class="img-fluid w-100" height="500px"
                      alt="{{ $record->title}}
                                                          ">
            @else
                <img  src="https://via.placeholder.com/200x300?text=placeholder" height="500px"
                      alt="{{ $record->title}} ">
            @endif


                <h1 class="display-4 text-white d-none d-md-block  p-3">{{ucfirst($record->title)}}</h1>
                <h3 class=" text-white  d-sm-block d-md-none p-3">{{ucfirst($record->title)}}</h3>

            <div class="col-12 p-2">
                @if(isset($record->category) && $record->category->count())
                    @foreach($record->category as $category)
                    <a class="btn btn-outline-primary">{{$category->name}}</a>
                    @endforeach

                @endif


                    @if(isset($record->tags) && $record->tags->count())
                        @foreach($record->tags as $tag)
                            <a class="btn btn-outline-primary">{{$tag->name}}</a>
                        @endforeach

                    @endif



            </div>

        </div>

        <div class="card-body bg-transparent  p-3">
            <p class="mt-2 mb-2 p-1 h5 text-justify bg-transparent">
                {!! trim($record->desc) !!}
            </p>
        </div>

    </div>
</div>






