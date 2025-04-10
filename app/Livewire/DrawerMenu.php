<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class DrawerMenu extends Component
{
    public $icon;
    public $src;
    public $label;
    public $selected;

    #[On('drawer-menu-selected')]
    public function onMenuSelected(string $label)
    {
        $this->selected = $label === $this->label;
    }

    public function onMenuClicked()
    {
        $this->dispatch('drawer-menu-click', label: $this->label);
    }

    public function render()
    {
        return view('livewire.drawer-menu');
    }
}
