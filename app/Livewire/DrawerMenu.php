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
    public $path;

    public function mount(string $path = '#')
    {
        $this->path = $path;
    }

    public function render()
    {
        return view('livewire.drawer-menu');
    }
}
