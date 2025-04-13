<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class AppBar extends Component
{
    public $isDrawerOpen = false;

    #[On('icon-button-click')]
    public function handleIconButtonClick(string $action)
    {
        switch ($action) {
            case 'open-drawer':
                $this->toggleDrawer();
                break;
            default:
        }
    }

    private function toggleDrawer()
    {
        $this->isDrawerOpen = !$this->isDrawerOpen;
    }

    public function render()
    {
        return view('livewire.app-bar');
    }
}
