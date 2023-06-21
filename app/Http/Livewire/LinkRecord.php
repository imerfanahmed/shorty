<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LinkRecord extends Component
{
    public $links;
    protected $listeners = ['shortUrlGenerated' => '$refresh', 'linkDeleted' => '$refresh'];

    public function render()
    {
        $this->links = auth()->user()->links()->latest()->get();
        return view('livewire.link-record');
    }
}
