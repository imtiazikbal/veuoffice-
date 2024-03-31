
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Notification from '@/Components/Notification.vue';

defineProps({
  featured: Object
})

</script>

<template>
    <Head title="Category" />

    <AuthenticatedLayout>
      
       
      <main class="p-4 md:ml-64 h-auto pt-20">
        <section class="py-3 py-md-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 col-xl-8">
        <div class="card  border-light shadow-sm">
          <div class="card-body p-4">
            <Link href="/create/featured" class="btn btn-primary">Add Feature</Link>
            <div class="table-responsive">
              <table class="table table-borderless bsb-table-xl text-nowrap align-middle m-0">
                <thead>
                  <tr>
                    <th>Featured</th>
                   
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="featured in featured" :key="featured.id">
                    <td>{{ featured.featured }}</td>
                   
                    <td>
                      <Link  :href="`/edit/featured/${featured.id}`" class="btn btn-primary mr-3">Edit</Link>
                      <Link :href="`/destroy/featured/${featured.id}`" class="btn btn-primary">Delete</Link>
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
  </main> 
    
            <!-- Table 1 - Bootstrap Brain Component -->


               
    
       
    </AuthenticatedLayout>
</template>

