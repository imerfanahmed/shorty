<?php

namespace App\Http\Livewire;


use App\Models\Link;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateLink extends Component
{

    public $url;
    public $short_url;


    public function createShortUrl(){
        $this->validate([
            'url' => 'required|url',
            'short_url' => 'nullable|alpha_num|min:3|max:6|unique:links,short_url'
        ]);

        $this->short_url = $this->short_url ?: Str::random(6);
        $link = new Link();
        $link->long_url = $this->url;
        $link->short_url = $this->short_url;
        $link->user_id = auth()->user()->id;
        $link->save();
        $this->url = '';
        $this->short_url = '';

        $this->emit('shortUrlGenerated');
    }

    public function render()
    {
        return view('livewire.create-link');
    }
}
