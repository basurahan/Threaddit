<nav class="flex flex-row items-center bg-surface-1 border-b border-surface-1-border h-[56px] px-[var(--margin-content)]">
    <img src="/assets/brand-logo.png" class="size-[32px]" />
    <h1 class="font-bold text-lg ms-[var(--margin-small)]">{{ config('app.name') }}</h1>

    <div class="flex flex-row grow justify-center items-center mx-[var(--margin-content)]">
        <div class="hidden sm:flex flex-row grow items-center bg-surface-2 rounded-full h-[40px] max-w-[560px]">
            <x-icon-search class="ms-[var(--margin-content)] size-[20px]" />
            <input type="text" placeholder="Search {{ config('app.name') }}" class="h-full w-full focus:outline-none mx-small" />
        </div>
    </div>

    <div class="flex flex-row items-center justify-end gap-x-[var(--margin-small)">
        <a href="#" class="hidden sm:inline-block rounded-full focus:outline-none hover:bg-surface-2 p-[var(--padding-small)]">
            <x-icon-message class="size-[20px]" />
        </a>
        <a href="#" class="hidden sm:inline-flex flex-row items-center justify-center rounded-full focus:outline-none hover:bg-surface-2 p-[var(--padding-small)]">
            <x-icon-plus class="size-[20px]" />
            <p class="ms-[var(--margin-small)]">Create</p>
        </a>
        <a href="#" class="hidden sm:inline-block rounded-full focus:outline-none hover:bg-surface-2 p-[var(--padding-small)]">
            <x-icon-bell class="size-[20px]" />
        </a>
        <a href="#" class="hidden sm:inline-block rounded-full overflow-hidden focus:outline-none hover:bg-surface-2 size-[28px]">
            <img src="/assets/placeholder-user.png" class="size-full" />
        </a>
        <a href="#" class="inline-block sm:hidden rounded-full focus:outline-none hover:bg-surface-2 p-[var(--padding-small)]">
            <x-icon-more class="size-[20px]" />
        </a>
    </div>
</nav>
