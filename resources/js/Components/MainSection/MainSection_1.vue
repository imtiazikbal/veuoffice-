<script setup>
    import {
        Link
    } from '@inertiajs/vue3'
    defineProps({
        news: Object
    })
</script>
<template>

    <div class="col-md-12 col-12 d-flex justify-content-evenly mainSection">
        <Link :href="route('newsByTitle', { news: news.id })" class="main_section1_image mr-3 d-block">
        <img :src="news.image" alt="" width="100%">
        <span class="d-block mt-1">{{ news . nCaption }}</span>
        </Link>
        <Link :href="route('newsByTitle', { news: news.id })" class="main_section1_content">
        <h2> {{ news . title }}</h2>
        <h3 class="mt-3" v-html="news.nBody.substr(0, 300)"> </h3>
        <span class="d-block mt-3">{{ news . created_at }}</span>
        </Link>
    </div>
</template>
<style scoped>
@media screen and (max-width: 768px) {
    .mainSection {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
}
    .main_section1_content h2 {
        font-weight: 600;
        font-size: 20px;

    }

    .main_section1_image span {
        font-weight: 400;
        font-size: 12px;
        line-height: 15px;
    }
</style>
