{{--<div>--}}
{{--    --}}{{-- The Master doesn't talk, he acts. --}}
{{--</div>--}}





<!--Center Modal -->
{{--<div class="modal fade" id="adsModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--            </div>--}}
{{--            <div class="modal-footer">--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{-- Right Corner--}}
{{--<div class="modal fade" id="adsModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >--}}
{{--    <div class="modal-dialog" style="position:fixed; bottom:0px; right:0px; margin:0px;">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--            </div>--}}
{{--            <div class="modal-footer">--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




{{-- Left Corner--}}
{{--<div class="modal fade" id="adsModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >--}}
{{--    <div class="modal-dialog" style="position:fixed; bottom:0px; left:0px; margin:0px;">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--            </div>--}}
{{--            <div class="modal-footer">--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



{{--Full Right--}}
{{--<div class="modal fade" id="adsModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >--}}
{{--    <div class="modal-dialog" style="position:fixed; bottom:0px; right:0px; margin:0px;">--}}
{{--        <div class="modal-content"  style="height: 100vh">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--            </div>--}}
{{--            <div class="modal-footer">--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



{{--Full Left--}}
<div class="modal fade" id="adsModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" style="position:fixed; bottom:0px; left:0px; margin:0px;">
        <div class="modal-content"  style="height: 100vh">
            <div class="modal-header">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">


            </div>
        </div>
    </div>
</div>


















@push('script')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#adsModals').modal('show');
        });
    </script>
@endpush
