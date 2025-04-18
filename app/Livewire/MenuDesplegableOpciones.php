<?php

namespace App\Livewire;

use Livewire\Component;

class MenuDesplegableOpciones extends Component
{

    public $isOpen = false;

    public function render()
    {
        return view('livewire.menu-desplegable-opciones');
    }

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

}
