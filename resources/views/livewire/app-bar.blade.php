@php
    use App\Enums\Display;
@endphp

<nav class="absolute top-[0px] flex flex-row items-center bg-surface-1 border-b border-surface-1-border h-[var(--appbar-height)] w-full px-[var(--margin-content)]">
    <img src="/assets/brand-logo.png" class="size-[32px]" />
    <h1 class="font-bold text-lg ms-[var(--margin-small)]">{{ config('app.name') }}</h1>

    <div class="flex flex-row grow justify-center items-center mx-[var(--margin-content)]">
        <div class="hidden lg:flex flex-row grow items-center bg-surface-2 rounded-full h-[40px] max-w-[560px]">
            <x-icon-search class="ms-[var(--margin-content)] size-[20px]" />
            <input type="text" placeholder="Search {{ config('app.name') }}" class="h-full w-full focus:outline-none mx-small" />
        </div>
    </div>

    <div class="flex flex-row items-center justify-end gap-x-[var(--margin-small)]">
        <livewire:icon-button icon="message" :display="Display::Desktop->value" />
        <livewire:text-icon-button icon="plus" label="Create" :display="Display::Desktop->value" />
        <livewire:icon-button icon="bell" :display="Display::Desktop->value" />
        <livewire:image-button src="/assets/placeholder-user.jpg" :display="Display::Desktop->value" />

        @if ($isDrawerOpen)
            <livewire:icon-button icon="close" action="open-drawer" />
        @else
            <livewire:icon-button icon="more" action="open-drawer" />
        @endif
    </div>
</nav>
