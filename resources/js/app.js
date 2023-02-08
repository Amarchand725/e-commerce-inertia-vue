import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
        .component('inertia-link', Link)
        .use(plugin)
        .mount(el)
    },
})
