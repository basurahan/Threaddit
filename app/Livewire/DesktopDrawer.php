<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class DesktopDrawer extends Component
{
    public $home = 'Home';
    public $popular = 'Popular';
    public $all = 'All';

    public $selected;

    #[On('drawer-menu-click')]
    public function onMenuClick(string $label)
    {
        $this->selected = $label;
        $this->dispatch('drawer-menu-selected', label: $this->selected);
    }

    public function mount()
    {
        $this->selected = $this->home;
    }

    public function render()
    {
        return view('livewire.desktop-drawer');
    }
}
