<?php

namespace App\Livewire;

use Livewire\Component;

class MenuHeader extends Component
{

    public $isOpen = false;


    public function render()
    {
        return view('livewire.menu-header');
    }

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }
}
