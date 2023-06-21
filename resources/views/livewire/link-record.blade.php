<div>
    <div class="h1">Created Links</div>
    @forelse($links as $link)
        @livewire('components.single-link-item', ['link' => $link],key($link->id))
    @empty
        <div class="card card-sm">
            <div class="card-body text-center fw-bold text-muted">
                No {{config('app.name')}} Created.
            </div>
        </div>
    @endforelse
</div>
