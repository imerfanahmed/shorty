<div class="modal" id="qrcode" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">QR Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                {{QrCode::eye('circle')
                    ->size('250')
                    ->style('dot')
                    ->mergeString(asset('dist/img/logo.svg'))
                    ->errorCorrection('H')
                    ->generate(config('app.url').$short_url)
                 }}
                <h3 class="p-2">{{config('app.url').$short_url}}</h3>
                <h3 class="p-1">Use your phone to scan the QRCode</h3>
            </div>
            {{--            <div class="modal-footer">--}}
            {{--                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>--}}
            {{--                --}}{{--                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('toggleModal', event => {
            console.log(event.detail);
            //toggle modal with raw js
            var myModal = new bootstrap.Modal(document.getElementById('qrcode'), {
                keyboard: false
            });
            myModal.toggle();
        })
    </script>

@endpush
