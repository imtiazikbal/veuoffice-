<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import NavBar from '@/Pages/NavBar.vue'
import Sidebar from '@/Pages/Sidebar.vue'

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>



<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
    
<NavBar/>
  
<Sidebar/>
   

   <slot />

   
  </div>
</template>
