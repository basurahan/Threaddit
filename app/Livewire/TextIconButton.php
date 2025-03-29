<?php

namespace App\Livewire;

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
            Display::Desktop => "hidden sm:inline-flex",
            Display::Mobile => "inline-flex sm:hidden",
        };
    }

    public function render()
    {
        return view('livewire.text-icon-button');
    }
}
