@php
    use App\Enums\Display;
@endphp

<nav class="col-span-2 flex flex-row items-center bg-surface-1 border-b border-surface-1-border h-[var(--appbar-height)] w-full px-[var(--margin-content)]">
    <img src="/assets/brand-logo.png" class="size-[32px]" />
    <h1 class="font-bold text-lg ms-[var(--margin-small)]">{{ config('app.name') }}</h1>

    <div class="flex flex-row grow justify-center items-center mx-[var(--margin-content)]">
        <div class="hidden lg:flex flex-row grow items-center bg-surface-2 rounded-full h-[40px] max-w-[560px]">
            <x-icon-search class="ms-[var(--margin-content)] size-[20px]" />
            <input type="text" placeholder="Search {{ config('app.name') }}" class="h-full w-full focus:outline-none mx-small" />
        </div>
    </div>

    <div class="flex flex-row items-center justify-end gap-x-[var(--margin-small)]">
        <livewire:components.icon-button icon="search" :display="Display::Mobile->value" />
        <livewire:components.icon-button icon="message" :display="Display::Multiplatform->value" />
        <livewire:components.text-icon-button icon="plus" label="Create" :display="Display::Desktop->value" />
        <livewire:components.icon-button icon="bell" :display="Display::Multiplatform->value" />
        <livewire:components.image-button src="/assets/placeholder-user.jpg" :display="Display::Desktop->value" />
        <livewire:components.toggle-icon-button default="more" checked="close" data="drawerData" />
    </div>
</nav>
