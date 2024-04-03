<script setup>
import { Link } from '@inertiajs/vue3';


defineProps({
    news: Object
})
</script>
<template>
    
                    <Link  :href="route('newsByTitle', { news: news.id })" class="col-12">
                        <div class="headNews d-flex">
                         <h2>{{ news.title }}</h2>
                            <img :src=" '/' + news.image" alt="responsive image" width="100px" height="67px">
                         </div>
                             <div class="headNews_body mb-2">
                                 <h2 v-html="news.nBody.substr(0, 100)">  
                                 </h2>                    
                             </div>
                            </Link >
               
</template>

<style scoped>
.headNews h2{
    font-weight: 500;
    font-size: 16px;
}
</style>