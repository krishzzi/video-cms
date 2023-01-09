{{-- Video Player Widget --}}
<div class="card bg-transparent border-0" style="min-height: 400px">

    <div class="card-header">
        {{-- Desktop Tablet Player--}}
        <div class="text-center d-none d-md-block">
            <iframe  class="embed-responsive-item" src="{{$record->embed_code}}" width="{{ ($record->width > 0) ? $record->width : '100%'}}" @if($record->height)height="{{$record->height}}" @endif frameborder="0"></iframe>
        </div>
        {{--Mobile Player--}}
        <div class="text-center d-sm-block d-md-none">
            <iframe  class="embed-responsive-item w-100" src="{{$record->embed_code}}" width="{{ ($record->width > 0) ? $record->width : '100%'}}" @if($record->height)height="{{$record->height}}" @endif frameborder="0"></iframe>
        </div>
    </div>

    <div class="card-body">
        <h2 class=" text-white d-none d-md-block">{{ucfirst($record->title)}}</h2>
        <h4 class=" text-white d-sm-block d-md-none">{{ucfirst($record->title)}}</h4>
        <div class="col-12 p-2">
            @if(isset($record->category) && $record->category->count())
                <span class="text-sm h5">Categories : </span>
                @foreach($record->category as $category)
                    <a class="text-success">{{$category->name}},</a>
                @endforeach
            @endif

            @if(isset($record->tags) && $record->tags->count())
                    <span class="text-sm h5">Tags : </span>
                @foreach($record->tags as $tag)
                    <a class="text-warning">{{$tag->name}}</a>
                @endforeach
            @endif
        </div>
        <p class="p-5 col-12 h5 text-justify"> {!! $record->desc !!}</p>
    </div>


</div>
