{{-- Pagination Gallery Widget --}}
<div>

    @if(isset($records))

        <div class=" card-body row">

            @foreach($records as $record)

                <div class="card col-12 col-md-6 col-lg-3  border-none bg-transparent col-3 px-2">
                    <a href="{{route('video.view',[$record->slug])}}">
                        @if(!is_null($record->display))
                            <img  src="{{ str_contains($record->display,'http') ? $record->display : asset('storage/'.$record->display) }}"
                                  class="card-img-to w-100 "
                                  alt="{{ $record->title}}
                                                          ">
                        @elseif(!is_null($record->thumbnail) && $type == 'video')
                            <img  src="{{ str_contains($record->thumbnail,'http') ? $record->thumbnail : asset('storage/'.$record->thumbnail) }}"
                                  class="img-fluid w-100 "
                                  alt="{{ $record->title}}
                                                          ">
                        @else
                            <img  src="https://via.placeholder.com/200x300?text=placeholder"
                                  alt="{{ $record->title}}
                                                          ">
                        @endif
                    </a>

                    <div class="card-body">
                        <h6 class="text-white " style="font-size: 1.5rem">{{ \Illuminate\Support\Str::limit($record->title,30) }}</h6>
                        <div class="py-2 justify-center justify-items-center">
                            <div class="float-left">
                                <a href="{{route($type.'.view',[$record->slug])}}">
                                    <div class="hover-buttons">
                                        <span class="btn btn-hover py-2 px-3 rounded" style="font-size: 0.8rem"><i class="fa fa-play mr-1" aria-hidden="true"></i> @if($type == 'video') Play @else Read @endif Now</span>
                                    </div>
                                </a>
                            </div>

                            <ul class="list-unstyled p-0 m-0  d-inline-flex float-right">
                                <li class="mx-1"><span><i class="fas fa-share-alt"></i></span></li>
                                <li class="mx-1" wire:click="likeAction({{$record->id}})"><span><i class="far fa-thumbs-up"></i></span></li>
                                <li class="mx-1" wire:click="inlistAction({{$record->id}})"><span><i class="ri-add-line"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

        <div class="col-12 mx-auto mt-2 mb-2 p-4">
            @if(!$records->hasMorePages())<a class="btn btn-outline-info float-left px-10" href="{{route('videos')}}"> First</a>@endif
            @if($page >1)<a class="btn btn-outline-warning float-right px-10" href="{{route('videos').'/?page='.$page-1}}"> Prev</a>@endif
            @if($records->hasMorePages())<a class="btn btn-outline-success btn float-right px-10" href="{{route('videos').'/?page='.$page+1}}"> Next</a>@endif
        </div>


    @else

        <div class="card-12 shadow-lg text-danger display-3 text-center">
            No Videos Found!
        </div>

    @endif

</div>
