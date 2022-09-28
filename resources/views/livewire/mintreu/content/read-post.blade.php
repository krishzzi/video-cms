<div class="card  bg-transparent col-12">
    <div class="card-header bg-transparent ">
        <img src="{{ empty($post->display ) ? 'https://picsum.photos/1500/400' : asset('storage/'.$post->display) }}" class="img-fluid m-2 " alt="{{$post->title}}">
        <h1 class="display-3 text-white">{{$post->title}}</h1>
        <ul class="list-unstyled">
            <li>

                @if($post->category->count())
                    <i> Categories :</i>
                    @foreach($post->category as $category)
                        <a class="" href="{{route('category.single',[$category->slug])}}"><i>{{$category->name}}</i></a>,
                    @endforeach
                @endif

            </li>

            <li>

                @if($post->tags->count())
                    <i> Tags :</i>
                    @foreach($post->tags as $tag)

                        <a class="" href="{{route('search.tag',[$tag->name])}}"><i>{{$tag->name}}xxx</i></a>,

                    @endforeach

                @endif

            </li>


        </ul>

    </div>

    <div class="card-body justify-content-center m-2">
        {!! $post->desc !!}
    </div>
    <div class="card-footer">

       @auth()

            <div class="row col-12">

                <div class="col-8">
                    {{--            <form  wire:submit.prevent="save">--}}
                    <div class="form-group">
                        <textarea class="form-control" rows="3" cols="10" placeholder="Enter Comment" wire:model.defer="newComment"></textarea>
                    </div>
                    <button class="btn btn-sm btn-outline-danger" type="submit" wire:click="save">Submit</button>
                    {{--            </form>--}}
                </div>

                <div class="col-md-8" data-spy="scroll">

                    @if(!empty($post->comments))
                        @foreach($post->comments->sortDesc() as $comment)
                            <div class="media">
                                <p class="pull-right"><small>{{ $comment->created_at->diffForHumans() }}</small></p>
                                <a class="media-left" href="#">
                                <img src="{{  "http://lorempixel.com/40/40/people/1/" }}">
                                </a>
                                <div class="media-body">

                                    <h5 class="media-heading user_name">{{$comment->user->name}}</h5>
                                    {{ $comment->body }}

                                    <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        @endauth


    </div>

</div>
