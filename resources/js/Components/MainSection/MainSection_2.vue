<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
   newsSkip1Take2: Object
})


</script>

<template>
    <div class="col-6 cbr-2" v-for="news in newsSkip1Take2" :key="news.id">
        <Link :href="route('newsByTitle', { news: news.id })" class="main_section1_image mr-3 d-block">

        <div class="main_section1_content_image_title d-flex justify-content-space-between">
            <h2 class="d-block">{{ news.title }}</h2>
            <img :src="'/' + news.image"
                alt="Responsive image" width="50px">
        </div>

        <div>
            <h3 class="main_section1_content_body mt-3" v-html="news.nBody.substr(0, 300)"></h3>
            <span class="d-block mt-3"></span>
        </div>





        </Link>
    </div>
</template>

<style scoped>
    .main_section1_content_image_title img {
        width: 100px;
        height: 100px;
    }

    .main_section1_content_image_title h2 {
        font-size: var(--primary-heading);
        font-weight: 500;
    }
</style>
