<div class="main-content mb-5">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->

    <div class="card bg-transparent px-2 py-3 p-lg-5 border-none">

        <div class="card-header row border-none" >
            <div class="col-12 col-md-8">
                <a class="bg-danger px-2 py-2 rounded text-white">View All Categories</a>
            </div>

            <div class="col-12 col-md-4">
                <form class="d-inline-flex float-right">
                    <input class="form-control rounded px-10">
                    <button class="btn btn-xs btn-outline-danger rounded text-white" type="submit">Search</button>
                </form>
            </div>

            <div class="col-12 d-inline-flex">
                @if(isset($tags) && !empty($tags))
                    <span class=""> Popular Search   </span>
                    @foreach($tags as $tag)
                        <a class=" mx-1 my-1 "><span class="bg-danger px-2 py-1 rounded text-white">{{$tag->name}}</span></a>
                    @endforeach

                @endif


            </div>


        </div>


        @if(isset($records))

            <div class=" card-body row border-none">

                @foreach($records as $record)

                    <div class="card col-12 col-md-6 col-lg-3  border-none bg-transparent col-3 px-2 rounded">
                        <a href="{{route('post.view',[$record->slug])}}">
                        @if(!is_null($record->display))
                            <img  src="{{ str_contains($record->display,'http') ? $record->display : asset('storage/'.$record->display) }}"
                                  class="card-img-to w-100 rounded"
                                  alt="{{ $record->title}}
                                                          ">
                        @elseif(!is_null($record->thumbnail) && $type == 'video')
                            <img  src="{{ str_contains($record->thumbnail,'http') ? $record->thumbnail : asset('storage/'.$record->thumbnail) }}"
                                  class="img-fluid w-100 rounded"
                                  alt="{{ $record->title}}
                                                          ">
                        @else
                            <img class="rounded img-fluid w-100"  src="https://via.placeholder.com/200x300?text=placeholder"
                                  alt="{{ $record->title}}
                                                          ">
                        @endif
                        </a>

                        <div class="card-body border-none">
                            <h6 class="text-white " style="font-size: 1.5rem">{{ \Illuminate\Support\Str::limit($record->title,30) }}</h6>
                            <div class="py-2 justify-center justify-items-center">
                                <div class="float-left">
                                    <a href="{{route('post.view',[$record->slug])}}">
                                        <div class="hover-buttons">
                                            <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i> Read Now</span>
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
                @if(!$records->hasMorePages())<a class="btn btn-outline-info float-left px-10" href="{{route('posts')}}"> First</a>@endif
                @if($page >1)<a class="btn btn-outline-warning float-right px-10" href="{{route('posts').'/?page='.$page-1}}"> Prev</a>@endif
                @if($records->hasMorePages())<a class="btn btn-outline-success btn float-right px-10" href="{{route('posts').'/?page='.$page+1}}"> Next</a>@endif
            </div>


        @else

            <div class="card-12 shadow-lg text-danger display-3 text-center">
                No Stories Found!
            </div>

        @endif



    </div>
</div>
