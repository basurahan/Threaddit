<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DrawerMenu extends Component
{
    public $icon;
    public $src;
    public $label;
    public $selected;
    public $path;

    public function mount(string $path = '#')
    {
        $this->path = $path;
    }

    public function render()
    {
        return view('livewire.components.drawer-menu');
    }
}
