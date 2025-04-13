<?php

namespace App\Livewire;

use Livewire\Component;
use App\Constants\DrawerItems;

class DesktopDrawer extends Component
{
    public $section;
    public $drawerItems = DrawerItems::items;

    public function mount()
    {
        $this->section = request()->path();
    }

    public function render()
    {
        return view('livewire.desktop-drawer');
    }
}
