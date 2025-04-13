<a
    x-data="{{ $data }}"
    @class([
        $display,
        'select-none rounded-full focus:outline-none hover:bg-surface-2 p-[var(--padding-small)]'
    ])
    @click.prevent="toggle()"
    >

    <template x-if="!checked">
        <x-icon :name="$default" class="size-[20px]" />
    </template>
    <template x-if="checked">
        <x-icon :name="$checked" class="size-[20px]" />
    </template>
</a>