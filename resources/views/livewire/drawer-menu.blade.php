<a 
    wire:click.prevent="onMenuClicked"
    @class([
        'bg-surface-2' => $selected,
        'inline-flex flex-row items-center w-full rounded-[8px] hover:bg-surface-2 cursor-pointer py-[var(--padding-medium)] px-[var(--padding-content)]'
    ])>
    
    @if (!is_null($icon))
        <x-icon :name="$icon" class="w-[20px]" />
    @else
        <img src="{{ $src }}" class="rounded-full w-[20px]" />
    @endif
    
    <p
        @class([
            'font-bold' => $selected,
            'ms-[var(--margin-content)] text-sm'
        ])>

        {{ $label }}
    </p>
</a>
