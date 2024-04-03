
<script setup>
import NavBar from '../Components/Header/Navbar.vue';
import LeftSideBar_1 from '../Components/LeftSide/LeftSidebar_1.vue';
import LeftSideBar_2 from '../Components/LeftSide/LeftSidebar_2.vue';

import MainSection_1 from '../Components/MainSection/MainSection_1.vue';
import MainSection_2 from '../Components/MainSection/MainSection_2.vue';
import MainSection_3 from '../Components/MainSection/MainSection_3.vue';
import MainSection_4 from '../Components/MainSection/MainSection_4.vue';

import addSection_1 from '../Components/RightSide/AddSection_1.vue';
import RightSection_1 from '../Components/RightSide/RightSection_1.vue';
import SearchForm from '../Components/Search/Search.vue';

defineProps({
    category: Object,
    featured: Object,
    news: Object,
    newsSkip1Take2: Object,
    newsSkip1Take2: Object,
    newsSkip3Take3: Object,
    rajnitiCategoryNews: Object

})
</script>
<template>
<div class="container">
    <div class="row">
       <div class="col-md-12">
       <NavBar/>
       </div>
    </div>
</div>
<div class="container-fluid cbackgraund">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-3">
            <a href=""><img src="https://tpc.googlesyndication.com/simgad/1409315922313000973" alt=""></a>
        </div>
    </div>  
    
       
         
        
   

</div>
<!-- <SearchForm/> -->
    <div class="container">
        <div class="row g-3">
            <div class="col-md-3 cbr-1">
    <div class="row">
        </div>
            <LeftSideBar_1 :news = "rajnitiCategoryNews"/>
            <LeftSideBar_2/>
            <LeftSideBar_2/>
            <LeftSideBar_2/>
            <LeftSideBar_2/>       
         </div>    
        <div class="col-md-6 cbr-1 px-3">
                <div class="row">
                    <MainSection_1 :news = "news"/>
                </div>
                <div class="row mb-3 d-flex justify-content-space-between bb cbt py-3">                    
                    <MainSection_2 :newsSkip1Take2 = "newsSkip1Take2"/>
                 
                </div>
                <div class="row pt-3 pb-3 bb">
                    <MainSection_3 :newsSkip3Take3 = "newsSkip3Take3"/>  
  
                </div>
                <div class="row pt-3">
                    <MainSection_3 :newsSkip3Take3 = "newsSkip3Take3"/>  

                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                   <addSection_1/>
                    <div class="col-md-12">
                        <RightSection_1/>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    <div class="container-fluid adsBg my-5">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12">
                <div class="container">
                    <div class="adsBanner d-flex justify-content-center">
                        <img src="https://tpc.googlesyndication.com/simgad/12497680246295311678" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="container bb Cpb">
        <div class="row">
            <a href="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                    <div class="CategoryName">
                        <h2>ধর্ম<i class="bi bi-chevron-right"></i></h2>
                    </div>
                </a>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-12 col-xl-6 br">
                <a href="" class="Category_content d-flex Cpr">
                   <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="300px" height="200px" alt="Category_content_img">
                   <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                   <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                   <span>৬ ঘণ্টা আগে</span>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-xl-3 col-12 CatRegion">
                <a href="" class="content_1 d-flex mb-3 ">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fb168f23a-6655-4e6d-a1d6-ca687ae86f7b%2FIMG_20180803_082337.jpg?rect=450%2C0%2C3016%2C3016&auto=format%2Ccompress&fmt=webp&format=webp&w=100&dpr=0.8" alt="Responsive image" width="100px" height="100px">
                    <h2 class="pr">১৭ রমজান ছিল বদর যুদ্ধ</h2>
                </a>
             
               
            </div>
            <div class="col-lg-3 col-md-3 col-xl-3 col-12">
                <div class="content_1 mb-3">
                    <img src="https://beta.sobarkotha.com/img/gifads8.gif" alt="Responsive image" width="100%">
                   
                </div>
                
               
            </div>
        </div>
      </div>


      <div class="container">
        <div class="row">
            <a href="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                    <div class="CategoryName">
                        <h2>আপনার জন্য<i class="bi bi-chevron-right"></i></h2>
                    </div>
                </a>
        </div>
        <div class="row">
            <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
                <div class="extraCategory_img">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-01%2F5d0d3286-23c0-4f69-8c1f-9d8c7e343064%2FMehazabien__W.jpg?rect=72%2C0%2C1098%2C732&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0" width="300px" height="200px" alt="">
                </div>
                <div class="extraCategory_content d-flex justify-content-between pt-3">
                    <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                   <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                   <span>৬ ঘণ্টা আগে</span>
                </div>

            </a>
            <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
                <div class="extraCategory_img">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1a772445-76a4-450a-b51c-fe97b06af244%2FPutin_russia.jpg?rect=0%2C0%2C3000%2C2000&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0" width="300px" height="200px" alt="">
                </div>
                <div class="extraCategory_content d-flex justify-content-between pt-3">
                    <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                   <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                   <span>৬ ঘণ্টা আগে</span>
                </div>

            </a>
            <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
                <div class="extraCategory_img">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2023-11%2F25f1a373-ad66-4686-b295-7c6b207b86c8%2FUSA_India_REuters.jpg?rect=145%2C0%2C942%2C628&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0" width="300px" height="200px" alt="">
                </div>
                <div class="extraCategory_content d-flex justify-content-between pt-3">
                    <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                   <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                   <span>৬ ঘণ্টা আগে</span>
                </div>

            </a>
            <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
                <div class="extraCategory_img">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fc7b64a1c-c087-434b-8708-38449ac59745%2Fnetanyahu.jpg?rect=0%2C1%2C5500%2C3667&auto=format%2Ccompress&fmt=webp&format=webp&w=360&dpr=1.0" width="300px" height="200px" alt="">
                </div>
                <div class="extraCategory_content d-flex justify-content-between pt-3">
                    <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                   <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                   <span>৬ ঘণ্টা আগে</span>
                </div>

            </a>    
        </div>
      </div>


      <div class="container">
        <div class="row">
            <a href="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                    <div class="CategoryName">
                        <h2>বাংলাদেশ<i class="bi bi-chevron-right"></i></h2>
                    </div>
                </a>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-12 catBanSearchBox ">
                <div class="row py-5">
                    <div class="col-md-3 search_title text-center">
                        <h2>আমার এলাকার খবর</h2>
                    </div>

                    <div class="col-md-9">
                        <div class="newsSearch">
                    <form action="" class="d-flex justify-content-between">
                       <div class="py">
                        <select  class="form-select bg-transparent" aria-label="Default select example">
                            <option selected>বিভাগ</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                       </div>
                          <div class="py">
                            <select class="form-select bg-transparent" aria-label="Default select example">
                                <option selected>জেলা</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>  
                          </div> 
                          <div class="py">
                            <select class="form-select bg-transparent" aria-label="Default select example">
                                <option selected>উপজেলা</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                          </div>
                          <div class="d-flex w-100px">
                            <button class="btn btn-primary" type="submit">Search</button>
                          </div>
                    </form>       
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 col-12 col-xl-4 br">
               <a class="catBangladesh">
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2022-04%2F64d0a465-9310-47d8-9081-17a565eb59f8%2Ff99ffd0a-f76c-414d-bb85-0ee27ba3dc3b.jpeg?rect=390%2C0%2C960%2C720&auto=format%2Ccompress&fmt=webp&format=webp&w=480&dpr=1.0" alt="Responsiveimage" width="100%">
                <h2 class="pt-3">রেলের টিকিট পেতে আধা ঘণ্টায় ১ কোটি ৩০ লাখ হিট</h2>
                <h3>আজ পশ্চিমাঞ্চলের (রাজশাহী, রংপুর ও খুলনা বিভাগের জন্য) ১৫ হাজার ৮৯০টি টিকিট বিক্রির জন্য ছাড়া হয়। প্রথম ১৫ মিনিটে ৭ হাজার ১৯৪টি টিকিট বিক্রি হয়।</h3>
                <span>১৩ মিনিট আগে</span>
               </a>
            </div>
            <div class="lastBorderRemove col-md-5 col-lg-5 col-sm-12 col-xs-12 col-12 col-xl-5 br">

                <a href="" class="Category_content d-flex Cpr bb pt-3">
                   <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                   <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                   <span>৬ ঘণ্টা আগে</span>
                   <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                </a>
                <a href="" class="Category_content d-flex Cpr bb pt-3">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                    <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                    <span>৬ ঘণ্টা আগে</span>
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                 </a>

                 <a href="" class="Category_content d-flex Cpr bb pt-3">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                    <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                    <span>৬ ঘণ্টা আগে</span>
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                 </a>
 

            </div>

            
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 px-3">
                
                
                    <a href="" class="content_1 d-flex">

                        <h2 class="pr">১৭ রমজান ছিল বদর যুদ্ধ</h2>
                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fb168f23a-6655-4e6d-a1d6-ca687ae86f7b%2FIMG_20180803_082337.jpg?rect=450%2C0%2C3016%2C3016&auto=format%2Ccompress&fmt=webp&format=webp&w=100&dpr=0.8" alt="Responsive image" width="100px" height="100px">
                    </a>

                    <a href="" class="content_1 d-flex">

                        <h2 class="pr">১৭ রমজান ছিল বদর যুদ্ধ</h2>
                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fb168f23a-6655-4e6d-a1d6-ca687ae86f7b%2FIMG_20180803_082337.jpg?rect=450%2C0%2C3016%2C3016&auto=format%2Ccompress&fmt=webp&format=webp&w=100&dpr=0.8" alt="Responsive image" width="100px" height="100px">
                    </a>

                    <a href="" class="content_1 d-flex">

                        <h2 class="pr">১৭ রমজান ছিল বদর যুদ্ধ</h2>
                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fb168f23a-6655-4e6d-a1d6-ca687ae86f7b%2FIMG_20180803_082337.jpg?rect=450%2C0%2C3016%2C3016&auto=format%2Ccompress&fmt=webp&format=webp&w=100&dpr=0.8" alt="Responsive image" width="100px" height="100px">
                    </a>

                    <a href="" class="content_1 d-flex">

                        <h2 class="pr">১৭ রমজান ছিল বদর যুদ্ধ</h2>
                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fb168f23a-6655-4e6d-a1d6-ca687ae86f7b%2FIMG_20180803_082337.jpg?rect=450%2C0%2C3016%2C3016&auto=format%2Ccompress&fmt=webp&format=webp&w=100&dpr=0.8" alt="Responsive image" width="100px" height="100px">
                    </a>
                    <a href="" class="content_1 d-flex">

                        <h2 class="pr">১৭ রমজান ছিল বদর যুদ্ধ</h2>
                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fb168f23a-6655-4e6d-a1d6-ca687ae86f7b%2FIMG_20180803_082337.jpg?rect=450%2C0%2C3016%2C3016&auto=format%2Ccompress&fmt=webp&format=webp&w=100&dpr=0.8" alt="Responsive image" width="100px" height="100px">
                    </a>
               
            </div>
        </div>
      </div>


      <div class="container bb Cpb">
        <div class="row">
            <a href="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                    <div class="CategoryName">
                        <h2>বিশ্ব<i class="bi bi-chevron-right"></i></h2>
                    </div>
                </a>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-12 col-xl-6  br">
                <a class="catBangladesh">
                 <img src="https://images.prothomalo.com/prothomalo-bangla%2F2022-04%2F64d0a465-9310-47d8-9081-17a565eb59f8%2Ff99ffd0a-f76c-414d-bb85-0ee27ba3dc3b.jpeg?rect=390%2C0%2C960%2C720&auto=format%2Ccompress&fmt=webp&format=webp&w=480&dpr=1.0" alt="Responsiveimage" width="100%">
                 <h2 class="pt-3">রেলের টিকিট পেতে আধা ঘণ্টায় ১ কোটি ৩০ লাখ হিট</h2>
                 <h3>আজ পশ্চিমাঞ্চলের (রাজশাহী, রংপুর ও খুলনা বিভাগের জন্য) ১৫ হাজার ৮৯০টি টিকিট বিক্রির জন্য ছাড়া হয়। প্রথম ১৫ মিনিটে ৭ হাজার ১৯৪টি টিকিট বিক্রি হয়।</h3>
                 <span>১৩ মিনিট আগে</span>
                </a>
             </div>
            <div class="col-md-6 catWordContent">
                <div class="row">
                   <div class="col-md-12 d-flex  pb-3">
                    <a class="catBangladesh px-3 bb">
                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2022-04%2F64d0a465-9310-47d8-9081-17a565eb59f8%2Ff99ffd0a-f76c-414d-bb85-0ee27ba3dc3b.jpeg?rect=390%2C0%2C960%2C720&auto=format%2Ccompress&fmt=webp&format=webp&w=480&dpr=1.0" alt="Responsiveimage" width="100%">
                        <h2 class="pt-3">রেলের টিকিট পেতে আধা ঘণ্টায় ১ কোটি ৩০ লাখ হিট</h2>
                       
                       </a>
                       <a class="catBangladesh bb">
                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2022-04%2F64d0a465-9310-47d8-9081-17a565eb59f8%2Ff99ffd0a-f76c-414d-bb85-0ee27ba3dc3b.jpeg?rect=390%2C0%2C960%2C720&auto=format%2Ccompress&fmt=webp&format=webp&w=480&dpr=1.0" alt="Responsiveimage" width="100%">
                        <h2 class="pt-3">রেলের টিকিট পেতে আধা ঘণ্টায় ১ কোটি ৩০ লাখ হিট</h2>
                       
                       </a>
                   </div>
                      
                     
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex  pb-3">
                     <a class="catBangladesh px-3 bb">
                         <img src="https://images.prothomalo.com/prothomalo-bangla%2F2022-04%2F64d0a465-9310-47d8-9081-17a565eb59f8%2Ff99ffd0a-f76c-414d-bb85-0ee27ba3dc3b.jpeg?rect=390%2C0%2C960%2C720&auto=format%2Ccompress&fmt=webp&format=webp&w=480&dpr=1.0" alt="Responsiveimage" width="100%">
                         <h2 class="pt-3">রেলের টিকিট পেতে আধা ঘণ্টায় ১ কোটি ৩০ লাখ হিট</h2>

                        </a>
                        <a class="catBangladesh bb">
                         <img src="https://images.prothomalo.com/prothomalo-bangla%2F2022-04%2F64d0a465-9310-47d8-9081-17a565eb59f8%2Ff99ffd0a-f76c-414d-bb85-0ee27ba3dc3b.jpeg?rect=390%2C0%2C960%2C720&auto=format%2Ccompress&fmt=webp&format=webp&w=480&dpr=1.0" alt="Responsiveimage" width="100%">
                         <h2 class="pt-3">রেলের টিকিট পেতে আধা ঘণ্টায় ১ কোটি ৩০ লাখ হিট</h2>
                         
                        </a>
                    </div>
                       
                      
                 </div>
                
            </div>
         
        </div>
    </div>

    <div class="container">
        <div class="row">
            <a href="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                    <div class="CategoryName">
                        <h2>বিনোদন<i class="bi bi-chevron-right"></i></h2>
                    </div>
                </a>
        </div>

        

        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 col-12 col-xl-4 br">
                <a href="" class="Category_content d-flex Cpr bb pt-3">
                    <h2 class="">চাঁদরাতে চরকিতে ফারুকীর সিনেমা, চঞ্চল-জেফার ছাড়াও রয়েছে আরও চমক
                    </h2>
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F81bf1cc4-ac26-4239-bd9f-03096177d467%2FMonogamy__Chorki_MOL__23_.JPG?rect=571%2C0%2C3080%2C2053&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=1.0" width="160x" height="106px" alt="Category_content_img">
                 </a>
                 <a href="" class="Category_content d-flex Cpr bb pt-3">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F26aa2326-0b37-438b-8166-5e934b886614%2FMonogamy__Chorki_MOL__20_.JPG?auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=1.0" width="160x" height="106px" alt="Category_content_img">
                 </a>
                 <a href="" class="Category_content d-flex Cpr bb pt-3">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                 </a>
                 <a href="" class="Category_content d-flex Cpr bb pt-3">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                 </a>
                 
            </div>
            <div class="lastBorderRemove col-md-5 col-lg-5 col-sm-12 col-xs-12 col-12 col-xl-5 br">
                 <a href="" class="Category_content Cpr bb pt-3">                  
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="100%" alt="Category_content_img">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                    <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
                    <span>৬ ঘণ্টা আগে</span>
                 </a>
            </div>

            
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 px-3">
                <a href="" class="Category_content d-flex Cpr bb">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                </a>

                <a href="" class="Category_content d-flex Cpr bb">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                </a>

                <a href="" class="Category_content d-flex Cpr bb">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                </a>

                <a href="" class="Category_content d-flex Cpr bb">
                    <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                    <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                </a>
               
            </div>
        </div>
      </div>
</template>

<style>
    @import url('https://fonts.maateen.me/solaiman-lipi/font.css');
.container {
    max-width: 1280;
}
a,h1,h2,h3,h4,h5,h6,p,span{
    font-family: 'SolaimanLipi', sans-serif;

    padding: 0;
    margin: 0;
    text-decoration: none;

}
    a{
        text-decoration: none;
        padding: 0 px;
        max-width: 0 px ;
    }
.cbr-1 {
	border-right: 2px solid #c4c4c4;

}
.cbr-2 {
	border-right: 1px solid #c4c4c4;

}
.cbt{

    border-top: 1px solid #a09e9e;
}
.headNews span a {
	font-size: 18px;
	font-weight: 600;
    text-decoration: none;

}
.headNews span span a {
	font-size: 18px;
	font-weight: 600;
    text-decoration: none;

}
.headNews {
	margin-bottom: 8px;
}
.headNews_body span a{
    color: #929292;
    text-decoration: none;

}

.mainText span a {
	font-size: 28px;
	font-weight: 600;
    text-decoration: none;
}
.mainImage span a {
	font-size: 12px;
    line-height: 2px;
    text-decoration: none;
}

.mainText h6 a {
    margin-top: 8px;
	font-size: 16px;
    text-decoration: none;
    color: #929292;

}
.mainText h6  {
    margin-top: 8px;
	font-size: 16px;
    text-decoration: none;
    color: #929292;

}

.mainText{
    padding-left: 5px;

}
.cheadTitle span a{
    text-decoration: none;
    color: red;
}
.mainSecond span a{

  font-size: 18px;
	font-weight: 600;
    text-decoration: none;
}
.col-4:last-child {
    border:none;
}
.col-6:last-child {
    border:none;
}

  :root {
    --primary-heading: 20px; /* Example primary size */
    --primary-font-wight: 600; /* Example primary color */
    --primary-lineHieght: 30px; /* Example secondary color */
    --secondary-heading: 20px; /* Example secondary color */
    --secondary-color: #000000ad; /* Example secondary color */
    --font-size: 16px; /* Example font size */
    --border-right: 1px solid #e5e5e5af; /* Example border right */
    --padding-right: 10px; /* Example border right */
    /* Add more custom CSS variables as needed */
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    list-style: none;
    font-family: 'SolaimanLipi', sans-serif;

    text-decoration: none;
}
a{
    text-decoration: none;
    color: black;
}
a:hover{
 
    color: blue;
}
.CategoryName {
    padding-top: 10px;
    border-top: 4px solid #8c8787;
    margin-top: 50px;
}

span{
   font-size: small;
   padding: 0px 5px 0px 5px;
}
.adsBg{
    background-color:#F7F7F7;
    padding: 40px 0px 40px 0px;
}

.Category_content img {
    padding: 0px 10px 0px 0px;
}
.Category_content h2 {
   font-size: var( --primary-heading);
   line-height: var(--primary-lineHieght);
   margin-right: 10px;
   font-weight:var(--primary-font-wight);

}.Category_content h3 {
   font-size: var( --secondary-heading);
   color: var(--secondary-color);
}
.br {
    border-right: var(--border-right);
    padding-right: var(--padding-right);
}
.bb{
    border-bottom:var(--border-right);
    padding-bottom:var(--padding-right);
}
.Cpr {
    padding-right: var(--padding-right);
}
.Cpb {
    padding-bottom: 20px;
}
.pr{
    padding-right: var(--padding-right);
}

.content_1 img {
    margin-right: 20px;
    padding-bottom: var(--padding-right);
}
.content_1 h2{
    font-size: 20px;
   font-weight:var(--primary-font-wight);

}
.extraCategory_img img {
    width: 100%;
}

.extraCategory_content h2{
   font-weight:var(--primary-font-wight);

    font-size: var(--primary-heading);
}
.extraCategory_content h3{
    font-size: var(--secondary-heading);
   color: var(--secondary-color);

}
.row .col-md-3:last-child {
    border-right: none;
}
@media screen and (max-width: 768px) {
    .Category_content{
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
    }
    .content_1 img {
    margin-right: 0px;
    padding-bottom: var(--padding-right);
}

.content_1{
display: flex;
justify-content: space-between;
}
.Category_content img{
    width: 300px;
    height: 200px;
}

.newsSearch form{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
    margin-bottom: 20px;
}
.newsSearch form bg-transparent{
    padding-top: 50px;
}
.py{
    padding-bottom: 10px;
}
}

.search_title h2{
    font-size: var(--primary-heading);
    color: black;
}
.catBangladesh h2{
    font-size: var(--primary-heading);
    font-weight: var(--primary-font-wight);
}
.catBangladesh h3{
    font-size: var(--secondary-heading);
}


.col-md-5 .row > a:second-child {
    padding-top: 10px; /* Remove top padding for the first child element */
}

.col-md-5 .row > a:last-child {
    border-bottom: none; /* Remove bottom border for the last child element */
}
.row > a:last-child {
    padding-bottom: 0px;
}
.lastBorderRemove > a:last-child {
    border-bottom: none;
}
.lastBorderRemove > a:first-child {
  padding-top:  0px !important;
}
</style>