@php
    use App\Enums\Display;
    use App\Constants\DrawerItems;
@endphp

<div class="grid grid-cols-(--grid-mobile-layout) lg:grid-cols-(--grid-desktop-layout) size-full">
    <livewire:components.floating-action-button :display="Display::Mobile->value" />
    <livewire:components.app-bar />
    <livewire:components.drawer />
    <livewire:components.desktop-drawer />
    
    @livewire(DrawerItems::getSectionPage($section))
</div>
