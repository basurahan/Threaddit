import {  Livewire, Alpine } from '@livewire'

document.addEventListener('alpine:init', () => {

    Alpine.store('drawer', {
        checked: false,
        toggle() {
            this.checked = !this.checked
        }
    })

    Alpine.data('drawerData', () => ({
        get checked() {
            return Alpine.store('drawer').checked
        },

        toggle() {
            Alpine.store('drawer').toggle()
        }
    }))

    Alpine.data('toggleData', () => ({
        checked: false,

        toggle() {
            this.checked = !this.checked
        }
    }))
})

Livewire.start()