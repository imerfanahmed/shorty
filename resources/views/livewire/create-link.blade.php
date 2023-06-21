<div class="card card-md">
    <div class="card-stamp card-stamp-lg">
        <div class="card-stamp-icon bg-primary">
            <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path
                    d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7"/>
                <path d="M10 10l.01 0"/>
                <path d="M14 10l.01 0"/>
                <path d="M10 14a3.5 3.5 0 0 0 4 0"/>
            </svg>
        </div>
    </div>
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-10">
                <h3 class="h1">Create</h3>
                <form wire:submit.prevent="createShortUrl">
                    <div class="mb-3">
                        <label class="form-label">Paste Your Long URL Here</label>
                        <div class="input-icon mb-3">
                            <input type="url"
                                   class="form-control"
                                   placeholder="URL"
                                   wire:model.lazy="url"/>
                            @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <div class="input-icon mb-3">
                            <label class="form-label">Short Link</label>
                            <div class="input-group mb-2">
                            <span class="input-group-text">
                                {{config('app.url')}}
                            </span>
                                <input type="text"
                                       class="form-control"
                                       placeholder="github"
                                       autocomplete="off"
                                       wire:model.lazy="short_url"
                                       wire:keydown.enter="createShortUrl"
                                />

                            </div>
                            @error('short_url') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <button class="btn btn-primary">
                        Create
                        <span class="tox-button--icon" wire:loading>
                              <div class="spinner-border spinner-border-sm text-white ml-2" role="status"></div>
                        </span>
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
