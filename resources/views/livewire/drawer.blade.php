<aside class="block lg:hidden absolute top-[var(--appbar-height)] h-[var(--drawer-height)] w-full bg-surface-1">
    <ul class="list-none px-[var(--padding-content)] mt-[var(--margin-content)]">
        <li class="mt-[var(--margin-small)]">
            <livewire:drawer-menu icon="home" label="Home" :selected="false" />
        </li>

        <li class="mt-[var(--margin-small)]">
            <livewire:drawer-menu icon="star-off" label="Popular" :selected="false" />
        </li>

        <li class="mt-[var(--margin-small)]">
            <livewire:drawer-menu icon="like-o" label="All" :selected="false" />
        </li>
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
