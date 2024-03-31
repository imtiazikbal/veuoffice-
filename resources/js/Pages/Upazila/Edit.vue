<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

let props = defineProps({
  district: Object,
  upazila: Object
})
const form = reactive({
  upazila_name: props.upazila.upazila_name,
  district_id:null
})

function submit() {
  router.post('/update/upazila/'+props.upazila.id+'', form)
}



</script>

<template>
    <Head title="Division" />

    <AuthenticatedLayout>
        <template #header>
          Division
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
                <label for="email" class="form-label">Division <span class="text-danger">*</span></label>
                <select v-model="form.district_id" class="form-select" id="">
                  <option v-for="district in district" :key="district.id" :value="district.id">{{ district.dist_name }}</option>
                </select>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Upazila <span class="text-danger">*</span></label>
                <input type="text" v-model="form.upazila_name" class="form-control"  placeholder="Upazila" required>
              </div>
              <div class="col-12">
               
                  <button class="btn btn-primary text-black" type="submit">Update Upazila</button>
                
              </div>
            </div>
          </form>        
        </div>
      </div>
    </div>
  </div> 
    </AuthenticatedLayout>
</template>


