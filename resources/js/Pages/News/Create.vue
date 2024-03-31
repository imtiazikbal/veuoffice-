<script setup>

import { useForm } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'
import { useEditor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import Editor from '@/Components/Editor.vue'
import axios from 'axios';

const editor = useEditor({
  content: '<p>I’m running Tiptap with Vue.js.</p>',
  extensions: [
    StarterKit,
  ],
})

defineProps({
    category: Object,
    subcategory: Object,
    featured: Object,
    topic: Object

})
const form = useForm({
    title : null,
    nBody : null,
    nCaption : null,
    nTag: null,
    image: null,
    scroll : null,
    topic_id : null,
    category_id : null,
    sub_category_id : null,
    user_id : null,
    featured_id : null,
    division_id : null,
    district_id : null,
    upazila_id : null

})
const division = ref([]);

// let selectedDivision = ref(1);
// let selectedDistrict = ref(1);

const district = ref([]);
const upazila = ref([]);

const getDivision = () => {
  axios
    .get('/api/getDivision')
    .then((response) => {
        division.value = response.data;
    });
};


function getDistrict(e) { 
    let selectedDivision = e.target.value
  axios
    .get('/api/getDistrict/' + selectedDivision )
    .then((response) => {
        district.value = response.data;
    });
};
function getUpazila(e) {
    let selectedDistrict = e.target.value
  axios
  .get('/api/getUpazila/' + selectedDistrict)
    .then((response) => {
        upazila.value = response.data;
    });
};

onMounted(() => {
    getDivision(),
    getDistrict(),
    getUpazila()
});

function submit() {
  router.post('/store/news', form)
}
</script>


<style>

element {
	width: 300px;
	height: 300px;
}

</style>
<template>
    <Head title="News"/>

    <AuthenticatedLayout>
        <template #header>
           News Creation
        </template>

        
   
 


<main class="p-4 md:ml-64 h-auto pt-20">
    <div class="card mt-10">

    
<!-- end card header -->
<div class="card-body ">
   
    <div class="live-preview">
        <form @submit.prevent="submit">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <label for="" class="form-label">Title</label>
<input type="text" v-model="form.title" class="form-control"  placeholder="Enter your title">
                        
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="row">
                    <div class="col-lg-4"> 
                        <label for="firstv-modelfloatingInput" class="form-label">Category</label>
                       <select v-model="form.category_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                        <option disabled selected="">Category</option>
                       
                        <option v-for="category in category" :key="category.id" :value="category.id">{{ category.cName }}</option> 
                        
                        </select>
                </div>
                
                    <div class="col-lg-4"> 
                        <label for="firstv-modelfloatingInput" class="form-label">SubCategory</label>

                         <select v-model="form.sub_category_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">SubCategory</option>
                        <option v-for="subcategory in subcategory" :key="subcategory.id" :value="subcategory.id">{{ subcategory.sub_category_name }}</option> 

                       
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="firstv-modelfloatingInput" class="form-label">Divsion</label>

                          <select v-model="form.division_id" @change="(e) => getDistrict(e)"  class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">Division</option>
                        <option v-for="division in division" :key="division.id" :value="division.id">{{ division.div_name }}</option> 

                       
                      
                        </select>
                    </div>
                   </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-floating">
                        <div>
                            <h3>NewsBody</h3>
                            <span>Editor as MS Word</span>

    <editor v-model="form.nBody"  width="100px" height="300px" />


  </div>
  </div>
    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6"> 
                        <label for="firstv-modelfloatingInput" class="form-label">District</label>

                             <select v-model="form.district_id" @change="(e) => getUpazila(e)" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">District</option>
                        <option v-for="district in district" :key="district.id" :value="district.id">{{ district.dist_name }}</option> 
                           
                          
                        </select>
                    </div>
                    <div class="col-lg-6"> 
                        <label for="firstv-modelfloatingInput" class="form-label">Upazila</label>
                        
                        <select v-model="form.upazila_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">Upazila</option>
                        <option v-for="upazila in upazila" :key="upazila.id" :value="upazila.id">{{ upazila.upazila_name }}</option> 
                         
                        
                        </select>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">  
                            <input v-model="form.nCaption" type="text" class="form-control" id="firstv-modelfloatingInput" placeholder="Image Caption">
                            <label for="firstv-modelfloatingInput">Image Caption</label>
                        </div>
                        <div class="col-lg-6">  
                            <input v-model="form.nTag" type="text" class="form-control" id="firstv-modelfloatingInput" placeholder="Image Tag">
                            <label for="firstv-modelfloatingInput">News Tags(Comma Separated)</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    
                        <div class="row">
                            <div class="col-lg-4">  
                        <label for="firstv-modelfloatingInput" class="form-label">Featured</label>

                                <select v-model="form.featured_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option disabled selected="">Featured</option>
                        <option v-for="featured in featured" :key="featured.id" :value="featured.id">{{ featured.featured }}</option> 
                                   
                         
                          
                                </select>
                            </div>
                            <div class="col-lg-4">  
                        <label for="firstv-modelfloatingInput" class="form-label">Category</label>

                                <select v-model="form.topic_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option disabled selected="">Topic</option>
                        <option v-for="topic in topic" :key="topic.id" :value="topic.id">{{ topic.topic }}</option> 
                                 
                                   
                                   
                                </select>
                            </div>
                            <div class="col-lg-4">  
                        <label for="firstv-modelfloatingInput" class="form-label">Status</label>

                                <select v-model="form.status" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option disabled selected="">Status</option>
                                    <option value="published">Publish</option>
                                    <option value="unpublished">Unpublish</option>
                                    
                                </select>
                            </div>
                        </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">News Picture</h4>
                            </div>
                            <div class="card-body">
                                <input type="file" @input="form.image = $event.target.files[0]" />
                                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                    {{ form.progress.percentage }}%
                                    </progress>
                            </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-6">
                        <label for="firstv-modelfloatingInput" class="form-label">Scroll?</label>
                           
                            <div class="form-check form-check-outline form-check-warning mb-3">
                                <select v-model="form.scroll" class="form-select rounded-pill mb-3" aria-label="Default select example">
                             
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    
                                </select>
                            </div>
                               
                            </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="live-preview">
                        <div class="d-grid gap-2">
                          <button class="btn btn-primary text-black" type="submit">Add News</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>
</div>
</main>

    
               
    
       
    </AuthenticatedLayout>
</template>


