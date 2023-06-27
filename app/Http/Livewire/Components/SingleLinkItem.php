<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class SingleLinkItem extends Component
{
    public $link;

    public $clicks;

    public function qrCodeModal(): void
    {
        $this->emit('qrModalOpen', $this->link->short_url);
    }

    public function deleteLink()
    {
        $this->link->delete();
        $this->emit('linkDeleted');
    }

    public function render()
    {
        //click count
        $this->clicks = $this->link->clicks()->count();

        return view('livewire.components.single-link-item');
    }
}
