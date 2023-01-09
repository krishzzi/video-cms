{{-- Ads Spot Widget --}}
@if(isset($records) && $records->count())
   @foreach($records as $record)
       {{-- Modal Based Adverts--}}
       @if($record->is_modal)
           <div class="modal fade bg-transparent border-0" id="adsModals{{$record->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog bg-transparent border-0
               @if($record->alignment == \App\Models\Business\Spot::SPOT_SPLASH) modal-dialog-centered @endif"
                    @if($record->alignment == \App\Models\Business\Spot::SPOT_LEFT)
                        style="position:fixed; bottom:0px; left:0px; margin:0px;"
                        @elseif($record->alignment == \App\Models\Business\Spot::SPOT_RIGHT)
                        style="position:fixed; bottom:0px; right:0px; margin:0px;"
                            @elseif($record->alignment == \App\Models\Business\Spot::SPOT_BOTTOM_LEFT)
                            style="position:fixed; bottom:0px; left:0px; margin:0px;"
                        @elseif($record->alignment == \App\Models\Business\Spot::SPOT_BOTTOM_RIGHT)
                        style="position:fixed; bottom:0px; right:0px; margin:0px;"
                   @endif>
                   <div class="modal-content bg-transparent border-0"
                        @if($record->alignment == \App\Models\Business\Spot::SPOT_LEFT || $record->alignment == \App\Models\Business\Spot::SPOT_RIGHT) style="height: 100vh; width: 150px" @else style="height: 350px" @endif>
                       <div class="modal-header bg-transparent border-0 text-center mx-auto">
                           <button type="button" class="btn text-white text-lg btn-transparent " data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="Close">X</button>
                           @if($record->is_private)
                                <a href="{{$record->target_url}}" target="_blank">
                                    <img class="img-fluid" src="{{asset('storage/'.$record->target_banner)}}">
                                </a>

                               @else
                               {!! $record->code !!}

                           @endif
                       </div>
                   </div>
               </div>
           </div>

           {{-- Modal Based Scripts--}}
           @push('script')
               <script type="text/javascript">
                   $(window).on('load', function() {
                       $('#adsModals{{$record->id}}').modal('show');
                   });
               </script>
           @endpush


       @else
           {{-- Fixed Spot Adverts--}}
           <div class="col-12 mx-auto text-center">
               @if($record->is_private)
                   <a href="{{$record->target_url}}" target="_blank">
                       <img class="w-100" height="150px" src="{{asset('storage/'.$record->target_banner)}}">
                   </a>
               @else
                   {!! $record->code !!}
               @endif
           </div>
       @endif

   @endforeach
@endif
