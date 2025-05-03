<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Enums\Display;

class ImageButton extends Component
{
    public $display;
    public $src;

    public function mount(string $display = Display::Mobile->value)
    {
        $this->display = match (Display::tryFrom($display)) {
            Display::Desktop => "hidden lg:inline-flex",
            Display::Mobile => "inline-flex lg:hidden",
            Display::Multiplatform => 'inline-flex'
        };
    }

    public function render()
    {
        return view('livewire.components.image-button');
    }
}
