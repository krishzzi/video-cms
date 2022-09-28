<div>
    <div class="row col-12">

        <div class="col-8">
{{--            <form  wire:submit.prevent="save">--}}
                <div class="form-group">
                    <textarea class="form-control" rows="3" cols="10" placeholder="Enter Comment" wire:model.defer="comment.body"></textarea>
                </div>
                <button class="btn btn-sm btn-outline-danger" type="submit" wire:click="saveComment({{ $model }})">Submit</button>
{{--            </form>--}}
        </div>

        <div class="col-md-8">

            @if(!empty($allComments))
                @foreach($allComments as $comment)
                    <div class="media">
                        <p class="pull-right"><small>5 days ago</small></p>
                        <a class="media-left" href="#">
                            {{--                                            <img src="http://lorempixel.com/40/40/people/1/">--}}
                        </a>
                        <div class="media-body">

                            <h4 class="media-heading user_name">Baltej Singh</h4>
                            Wow! this is really great.

                            <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</div>
