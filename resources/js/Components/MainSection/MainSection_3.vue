<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
    newsSkip3Take3: Object
})
</script>

<template>

<Link  :href="route('newsByTitle', { news: news.id })" class="col-4 cbr-2" v-for="news in newsSkip3Take3" :key="news.id">
    <div class="mainSecond">
    <img :src="'/' + news.image" alt="" width="100%">
    <h2 class="mt-3">{{ news.title }}</h2>
     </div>
    </Link>
</template>

<style></style>