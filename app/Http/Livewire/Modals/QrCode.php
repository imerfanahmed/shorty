<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class QrCode extends Component
{
    public $short_url;
    protected $listeners = ['qrModalOpen'];

    public function qrModalOpen($short_url)
    {
        $this->short_url = $short_url;
        $this->dispatchBrowserEvent('toggleModal');
    }

    public function render()
    {
        return view('livewire.modals.qr-code');
    }
}
