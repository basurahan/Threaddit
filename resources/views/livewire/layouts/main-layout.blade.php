@php
    use App\Enums\Display;
@endphp

<div class="grid grid-cols-(--grid-mobile-layout) lg:grid-cols-(--grid-desktop-layout) size-full">
    <livewire:floating-action-button :display="Display::Mobile->value" />
    <livewire:components.app-bar />
    <livewire:drawer />
    <livewire:components.desktop-drawer />
    <livewire:main-layout-content />
</div>
