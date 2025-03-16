<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownSnippyPage extends Component
{

    public $isOpen = false;


    public function render()
    {
        return view('livewire.dropdown-snippy-page');
    }

    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }
    
}
