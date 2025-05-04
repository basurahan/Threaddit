<aside class="hidden lg:block bg-surface-1 border-r border-surface-1-border">
    <ul class="list-none px-[var(--padding-content)] mt-[var(--margin-content)]">
        @foreach ($drawerItems as $key => $val)
            <livewire:components.drawer-menu :path="$key" :icon="$val['icon']" :label="$val['label']" :selected="$key === $section" />
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
