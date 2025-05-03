<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Enums\Display;

class ToggleIconButton extends Component
{
    public $data;
    public $display;
    public $default;
    public $checked;

    public function mount(string $display = Display::Mobile->value, string $data = 'toggleData')
    {
        $this->display = match (Display::tryFrom($display)) {
            Display::Desktop => "hidden lg:inline-block",
            Display::Mobile => "inline-block lg:hidden",
        };
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.components.toggle-icon-button');
    }
}
