<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  featured: null,
})

function submit() {
  router.post('/store/featured', form)
}



</script>

<template>
    <Head title="Category" />

    <AuthenticatedLayout>
        <template #header>
           Featured
        </template>

        
   
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
               
              </div>
            </div>
          </div>
          <form @submit.prevent="submit">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Featured <span class="text-danger">*</span></label>
                <input type="text" v-model="form.featured" class="form-control"  placeholder="Featured" required>
              </div>
              <div class="col-12">
               
                  <button class="btn btn-primary text-black" type="submit">Add Featured</button>
                
              </div>
            </div>
          </form>
          
         
        </div>
      </div>
    </div>
  </div>

    
               
    
       
    </AuthenticatedLayout>
</template>


