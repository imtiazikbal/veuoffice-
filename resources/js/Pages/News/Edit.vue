<script setup>

import { useForm } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

import { useEditor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import Editor from '@/Components/Editor.vue'
const editor = useEditor({
  content: '<p>I’m running Tiptap with Vue.js. 🎉</p>',
  extensions: [
    StarterKit,
  ],
})
let props = defineProps({
    news: Object,
    category: Object,
    subcategory: Object,
    featured: Object,
    division: Object,
    district: Object,
    upazila: Object,
    topic: Object
})

const form = useForm({
    title :  props.news.title,
    nBody : props.news.nBody,
    nCaption : props.news.nCaption,
    nTag: props.news.nTag,
    image: props.news.image,
    scroll :  props.news.scroll,
    topic_id :  props.news.topic_id,
    category_id :   props.news.category_id,
    sub_category_id :   props.news.sub_category_id,
    user_id :   props.news.user_id,
    featured_id :   props.news.featured_id,
    division_id :   props.news.division_id,
    district_id :   props.news.district_id,
    upazila_id :   props.news.upazila_id,
    status :   props.news.status

})

function submit() {
  router.post('/update/news/'+props.news.id+'', form)
}



</script>

<template>
    <Head title="News" />

    <AuthenticatedLayout>
        <template #header>
           News Creation
        </template>

        
   
 
<div class="card">

    
<!-- end card header -->
<div class="card-body ">
   
    <div class="live-preview">
        <form @submit.prevent="submit">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" v-model="form.title" class="form-control" id="firstv-modelfloatingInput" placeholder="Enter your firstv-model">
                        <label for="firstv-modelfloatingInput">News Title</label>
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="row">
                    <div class="col-lg-4"> 
                       <select v-model="form.category_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                        <option disabled selected="">Category</option>
                       
                        <option v-for="category in props.category" :key="category.id" :value="category.id">{{ category.cName }}</option> 
                        
                        </select>
                </div>
                
                    <div class="col-lg-4"> 
                         <select v-model="form.sub_category_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">SubCategory</option>
                        <option v-for="subcategory in props.subcategory" :key="subcategory.id" :value="subcategory.id">{{ subcategory.sub_category_name }}</option> 

                       
                        </select>
                    </div>
                    <div class="col-lg-4">
                          <select v-model="form.division_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">Division</option>
                        <option v-for="division in props.division" :key="division.id" :value="division.id">{{ division.div_name }}</option> 

                       
                      
                        </select>
                    </div>
                   </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-floating">
                        <div>
                            <h3>Body</h3>

    <editor v-model="form.nBody" class="border rounded p-3" />


  </div>
  </div>
    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6"> 
                             <select v-model="form.district_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">District</option>
                        <option v-for="district in props.district" :key="district.id" :value="district.id">{{ district.dist_name }}</option> 
                           
                          
                        </select>
                    </div>
                    <div class="col-lg-6">  
                        <select v-model="form.upazila_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">Upazila</option>
                        <option v-for="upazila in props.upazila" :key="upazila.id" :value="upazila.id">{{ upazila.upazila_name }}</option> 
                         
                        
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
                                <select v-model="form.featured_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option disabled selected="">Featured</option>
                        <option v-for="featured in props.featured" :key="featured.id" :value="featured.id">{{ featured.featured }}</option> 
                                   
                         
                          
                                </select>
                            </div>
                            <div class="col-lg-4">  
                                <select v-model="form.topic_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option disabled selected="">Topic</option>
                        <option v-for="topic in props.topic" :key="topic.id" :value="topic.id">{{ topic.topic }}</option> 
                                 
                                   
                                   
                                </select>
                            </div>
                            <div class="col-lg-4">  
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
                          <button class="btn btn-primary text-black" type="submit">Update News</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>
</div>



    
               
    
       
    </AuthenticatedLayout>
</template>


