<?php

namespace App\Livewire;

use Livewire\Component;
use App\Enums\Display;

class IconButton extends Component
{
    public $display;
    public $icon;
    public $action;

    public function mount(string $display = Display::Mobile->value)
    {
        $this->display = match (Display::tryFrom($display)) {
            Display::Desktop => "hidden lg:inline-block",
            Display::Mobile => "inline-block lg:hidden",
        };
    }

    public function render()
    {
        return view('livewire.icon-button');
    }
}
