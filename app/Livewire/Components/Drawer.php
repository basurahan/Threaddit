<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Constants\DrawerItems;

class Drawer extends Component
{
    public $section;
    public $drawerItems = DrawerItems::items;

    public function mount()
    {
        $this->section = request()->path();
    }

    public function render()
    {
        return view('livewire.components.drawer');
    }
}
