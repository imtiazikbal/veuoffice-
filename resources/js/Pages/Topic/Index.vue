
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Notification from '@/Components/Notification.vue';

defineProps({
  topics: Object
})

</script>

<template>
    <Head title="Topic"/>

    <AuthenticatedLayout>
        <template #header>
           Topic
           
        </template>
        <main class="p-4 md:ml-64 h-auto pt-20">
          <section class="py-3 py-md-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 col-xl-8">
        <div class="card  border-light shadow-sm">
          <div class="card-body p-4">
            <Link href="/create/topic" class="btn btn-primary">Add Topic</Link>
            <div class="table-responsive">
              <table class="table table-borderless bsb-table-xl text-nowrap align-middle m-0">
                <thead>
                  <tr>
                    <th>Topic</th>
                   
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="topics in topics" :key="topics.id">
                    <td>{{ topics.topic }}</td>
                   
                    <td>
                      <Link  :href="`/edit/topic/${topics.id}`" class="btn btn-primary mr-3">Edit</Link>
                      <Link method="delete" :href="`/destroy/topic/${topics.id}`" class="btn btn-primary">Delete</Link>
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

