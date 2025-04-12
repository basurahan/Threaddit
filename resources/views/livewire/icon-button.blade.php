<a 
    wire:click.prevent="onIconButtonClick"
    @class([
        $display,
        'rounded-full focus:outline-none hover:bg-surface-2 p-[var(--padding-small)]'
    ])>

    <x-icon :name="$icon" class="size-[20px]" />
</a>