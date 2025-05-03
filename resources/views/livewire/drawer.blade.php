<aside x-data="drawerData" x-show="checked" class="block lg:hidden fixed top-[var(--appbar-height)] h-[var(--drawer-height)] w-full bg-surface-1">
    
    <div class="flex items-center justify-center mt-[var(--margin-content)]">
        <a class="select-none inline-flex flex-col items-center justify-center rounded-[12px] border-1 border-[var(--color-surface-1-border)] p-[12px] hover:bg-surface-2">
            <img src="https://avatar.iran.liara.run/public" class="size-[54px]">
            <span class="text-sm mt-[var(--margin-medium)]">Renz Carlo Salanga</span>
        </a>
    </div>
    
    <ul class="list-none px-[var(--padding-content)] mt-[var(--margin-content)]">
        @foreach ($drawerItems as $item)
            <livewire:components.drawer-menu :path="$item['path']" :icon="$item['icon']" :label="$item['label']" :selected="$item['path'] === $section" />
        @endforeach
    </ul>

    <div class="border-t border-surface-1-border mt-[var(--margin-content)]"></div>
    <h6 class="text-sm text-[var(--color-typhography-muted)] m-[var(--margin-content)]">COMMUNITIES</h6>

    <ul class="list-none px-[var(--padding-content)] mt-[var(--margin-content)]">
        <li class="mt-[var(--margin-small)]">
            <livewire:components.drawer-menu src="https://avatar.iran.liara.run/public" label="r/adviceph" />
        </li>

        <li class="mt-[var(--margin-small)]">
            <livewire:components.drawer-menu src="https://avatar.iran.liara.run/public" label="r/android" />
        </li>

        <li class="mt-[var(--margin-small)]">
            <livewire:components.drawer-menu src="https://avatar.iran.liara.run/public" label="r/iOS" />
        </li>
    </ul>
</aside>
