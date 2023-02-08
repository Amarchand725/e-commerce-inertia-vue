<script setup>
    import AdminTopNavigation from './AdminTopNavigation.vue'
    import AdminSidebar from './AdminSidebar.vue'
    import { Head } from '@inertiajs/vue3'
</script>
<template>
    <main>
        <!-- <AdminTopNavigation />

        <AdminSidebar />

        <Head>
            <title>Admin Dashboard</title>
            <meta head-key="description" name="description" content="This is the default description" />
            <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        </Head> -->

        <slot />
    </main>
</template>
