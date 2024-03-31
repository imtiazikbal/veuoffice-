
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
  sub_category_name: null,
  category_id: props.category.id
})

function submit() {
  router.post('/subCategory/store',form)
}



</script>

<template>
    <Head title="SubCategory" />

    <AuthenticatedLayout>
        <template #header>
           Sub Category
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
                <select class="form-control" v-model="form.category_id">
                    <option v-for="category in props.category" :key="category.id" :value="category.id">{{category.cName}}</option>
                </select>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Sub Category <span class="text-danger">*</span></label>
                <input type="text" v-model="form.sub_category_name" class="form-control"  placeholder="Category" required>
              </div>
              <div class="col-12">
               
                  <button class="btn btn-primary text-black" type="submit">Add SubCategory</button>
                
              </div>
            </div>
          </form>
          
         
        </div>
      </div>
    </div>
  </div>

    
               
    
       
    </AuthenticatedLayout>
</template>

