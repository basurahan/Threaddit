<?php

namespace App\Livewire;

use Livewire\Component;
use App\Enums\Display;

class FloatingActionButton extends Component
{
    public $display;

    public function mount(string $display = Display::Mobile->value)
    {
        $this->display = match (Display::tryFrom($display)) {
            Display::Mobile => "fixed lg:hidden"
        };
    }

    public function render()
    {
        return view('livewire.floating-action-button');
    }
}
