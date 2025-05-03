<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class MainLayout extends Component
{
    public $section;

    public function mount()
    {
        $this->section = request()->path();
    }

    public function render()
    {
        return view('livewire.layouts.main-layout');
    }
}
