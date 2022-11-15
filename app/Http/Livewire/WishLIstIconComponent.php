<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishLIstIconComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function render()
    {
        return view('livewire.wish-l-ist-icon-component');
    }
}
