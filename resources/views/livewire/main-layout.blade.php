@php
    use App\Enums\Display;
@endphp

<div>
    <livewire:floating-action-button :display="Display::Mobile->value" />
    <livewire:app-bar />
    <livewire:drawer />
    <livewire:desktop-drawer />
    <livewire:main-layout-content />
</div>
