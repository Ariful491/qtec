<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="">
        <div class="text-center">
            <Link href="/">
                <ApplicationLogo class=" img-fluid"  style="height: 120px"/>
            </Link>
        </div>

        <div class="">
            <slot />
        </div>
    </div>
</template>
