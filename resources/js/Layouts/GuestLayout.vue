<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-white">
        <div>
            <Link href="/">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEVcofjrYj9XQJchDG30jIk45kVjbPpNZ2Z2fwYa1lxA&s" alt="">
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-900 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot/>
        </div>
    </div>
</template>
