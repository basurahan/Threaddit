import StoreDrawer from './store/store.drawer'

declare module 'alpinejs' {
    interface Stores {
        drawer: StoreDrawer
    }
}