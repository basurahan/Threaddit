<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Enums\Display;

class TextIconButton extends Component
{
    public $display;
    public $icon;
    public $label;

    public function mount(string $display = Display::Mobile->value)
    {
        $this->display = match (Display::tryFrom($display)) {
            Display::Desktop => "hidden lg:inline-flex",
            Display::Mobile => "inline-flex lg:hidden",
        };
    }

    public function render()
    {
        return view('livewire.components.text-icon-button');
    }
}
