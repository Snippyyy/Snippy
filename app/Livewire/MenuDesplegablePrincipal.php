<?php

namespace App\Livewire;

use Livewire\Component;

class MenuDesplegablePrincipal extends Component
{

    public $isOpen = false;

    public function render()
    {
        return view('livewire.menu-desplegable-principal');
    }

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

}
