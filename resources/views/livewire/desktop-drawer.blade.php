<aside class="hidden lg:block size-full bg-surface-1 border-r border-surface-1-border">
    <ul class="list-none px-[var(--padding-content)] mt-[var(--margin-content)]">
        @foreach ($drawerItems as $item)
            <livewire:drawer-menu :path="$item['path']" :icon="$item['icon']" :label="$item['label']" :selected="$item['path'] === $section" />
        @endforeach
    </ul>

    <div class="border-t border-surface-1-border mt-[var(--margin-content)]"></div>
    <h6 class="text-sm text-[var(--color-typhography-muted)] m-[var(--margin-content)]">COMMUNITIES</h6>

    <ul class="list-none px-[var(--padding-content)] mt-[var(--margin-content)]">
        <li class="mt-[var(--margin-small)]">
            <livewire:drawer-menu src="https://avatar.iran.liara.run/public" label="r/adviceph" />
        </li>

        <li class="mt-[var(--margin-small)]">
            <livewire:drawer-menu src="https://avatar.iran.liara.run/public" label="r/android" />
        </li>

        <li class="mt-[var(--margin-small)]">
            <livewire:drawer-menu src="https://avatar.iran.liara.run/public" label="r/iOS" />
        </li>
    </ul>
</aside>
