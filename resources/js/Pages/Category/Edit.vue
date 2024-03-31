<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

let props = defineProps({
    category: Object
})
const form = reactive({
  cName: props.category.cName,

})

function submit() {
  router.post('/category/update/'+props.category.id,form);
}



</script>

<template>
    <Head title="Category Edit" />

    <AuthenticatedLayout>
        <template #header>
           Category Edit
        </template>

        
   
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Add Category</h2>
              </div>
            </div>
          </div>
          <form @submit.prevent="submit">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Category <span class="text-danger">*</span></label>
                <input type="text" v-model="form.cName" class="form-control"  placeholder="Category" required>
              </div>
              <div class="col-12">
               
                  <button class="btn btn-primary text-black" type="submit">Update Category</button>
                
              </div>
            </div>
          </form>
          
         
        </div>
      </div>
    </div>
  </div>

    
               
    
       
    </AuthenticatedLayout>
</template>


