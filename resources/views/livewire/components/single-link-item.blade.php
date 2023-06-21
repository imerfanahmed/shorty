<div class="card card-sm mb-2">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-1">
                <span class="avatar avatar-sm" style=""></span>
            </div>

            <div class="col-lg-3">
                <a class="fw-bold underline"
                   href={{config('app.url').$link->short_url}}>{{config('app.url').$link->short_url}}</a>
                <div class="text-muted small">{{$link->long_url}}</div>
            </div>

            <div class="col-lg-4 mt-2">
                <a class="btn btn-close-white btn-sm">
                                <span class="tox-button--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-antenna-bars-5" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                       <path d="M6 18l0 -3"></path>
                                       <path d="M10 18l0 -6"></path>
                                       <path d="M14 18l0 -9"></path>
                                       <path d="M18 18l0 -12"></path>
                                    </svg>
                                </span>
                    {{$clicks}} Clicks
                </a>
                <a class="btn btn-sm btn-close-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-qrcode" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                        <path d="M7 17l0 .01"></path>
                        <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                        <path d="M7 7l0 .01"></path>
                        <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                        <path d="M17 7l0 .01"></path>
                        <path d="M14 14l3 0"></path>
                        <path d="M20 14l0 .01"></path>
                        <path d="M14 14l0 3"></path>
                        <path d="M14 20l3 0"></path>
                        <path d="M17 17l3 0"></path>
                        <path d="M20 17l0 3"></path>
                    </svg>
                    QR Code
                </a>

                <a class="btn btn-sm btn-close-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                    </svg>
                    Copy
                </a>
            </div>
            <div class="col text-center text-muted">
                {{$link->updated_at->diffForHumans()}}
            </div>
            <div class="col text-end">

                    <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                      data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                       width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path
                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                 </svg>
                                  Edit
                                </a>
                                <a class="dropdown-item" href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copy"
                                       width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"></path>
                                    <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"></path>
                                 </svg>
                                  Duplicate
                                </a>
                                <a class="dropdown-item" href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive"
                                       width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                    <path d="M10 12l4 0"></path>
                                 </svg>
                                  Archive
                                </a>
                                  <a class="dropdown-item" href="#" wire:click="deleteLink">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                       width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7l16 0"></path>
                                    <path d="M10 11l0 6"></path>
                                    <path d="M14 11l0 6"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                 </svg>
                                  Delete
                                </a>
                              </div>
                            </span>
            </div>
        </div>
    </div>
</div>
