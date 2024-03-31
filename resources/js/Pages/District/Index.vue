
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Notification from '@/Components/Notification.vue';

defineProps({
  district: Object
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
            <Link href="/create/district" class="btn btn-primary">Add District</Link>
            <div class="table-responsive">
              <table class="table table-borderless bsb-table-xl text-nowrap align-middle m-0">
                <thead>
                  <tr>
                    <th>District</th>
                   
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="district in district" :key="district.id">
                    <td>{{ district.dist_name }}</td>
                                      <td>
                      <Link  :href="`/edit/district/${district.id}`" class="btn btn-primary mr-3">Edit</Link>
                      <Link :href="`/destroy/district/${district.id}`" class="btn btn-primary">Delete</Link>
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

