<x-master>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    @livewire('create-link')
                </div>
                <div class="col-lg-7">
                    @livewire('link-record')
                </div>
            </div>
        </div>
    </div>

    @push('modals')
        @livewire('modals.qr-code')
    @endpush

</x-master>
