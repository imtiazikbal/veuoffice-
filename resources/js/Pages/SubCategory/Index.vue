<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Notification from '@/Components/Notification.vue';

defineProps({
  subcategory: Object
})

</script>


<template>
  

    <AuthenticatedLayout>
     
        
    
            <!-- Table 1 - Bootstrap Brain Component -->

            <main class="p-4 md:ml-64 h-auto pt-20">

<div class=" mt-5 border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4">
 <!-- Table 1 - Bootstrap Brain Component -->
 <section class="py-3 py-md-5 ">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 col-xl-8">
        <div class="card  border-light shadow-sm">
          <div class="card-body p-4">
            <Link href="/subCategory/create" class="btn btn-primary">Add SubCategory</Link>
            <div class="table-responsive">
              <table class="table table-borderless bsb-table-xl text-nowrap align-middle m-0">
                <thead>
                  <tr>
                    <th>Sub Category</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="subcategory in subcategory" :key="subcategory.id">
                    <td>{{ subcategory.sub_category_name }}</td>
                    <td>
                      <span class="badge rounded-pill bg-success"> {{ subcategory.status == 1 ? 'Active' : 'Inactive' }} </span>
                    </td>
                    <td>
                      <Link  :href="`/subCategory/edit/${subcategory.id}`" class="btn btn-primary mr-3">Edit</Link>
                      <Link :href="`/subCategory/destroy/${subcategory.id}`" class="btn btn-primary">Delete</Link>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>

</main>
               
    
       
    </AuthenticatedLayout>
</template>


