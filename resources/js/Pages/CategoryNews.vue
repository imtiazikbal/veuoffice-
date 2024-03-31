<script setup>
import NavBar from '../Components/Header/Navbar.vue';
defineProps({
    news: Object
})
</script>
<template>
<NavBar/>
    <div class="container">

        <div class="row mb-3">
            <!-- First Lead -->
            <div class="col-sm-9 col-12">
                <div class="row">

                    <div class="col-md-8 col-12 border-right mb-3">
                        <!-- query start
              
              query start -->



                        <div class="mb-3" v-for="news in news" :key="news.id">
                            <a href="" class="card text-decoration-none border-0">
                                <div class="zoomImg" style="overflow: hidden;">
                                    <img src="" width="100%" class="img-fluid" alt="Responsive image">
                                </div>
                                <h1 class="">{{ news.title }}</h1>
                                <div class="col-12 og:description detailsStyle mt-3">
                                    <div v-html="news.nBody"></div>



                                    <div class="py-3 sharethis-inline-share-buttons"></div>

                                </div>


                            </a>
                            <a href=""
                                style="color: darkblue; background-color: yellow; font-size: 14px; font-style: italic; text-decoration-line: underline; padding: 0px 10px;">আরও
                                পড়ুন >></a>
                        </div>

                        <!--  query End -->
                    </div>


                    <div class="col-sm-4 border-right mb-3">
                        <div class="row">

                            <div class="col-sm-12 col-6 mb-3 px-2 px-sm-3">
                                <a href="" class="text-decoration-none">
                                    <div class="zoomImg" style="overflow: hidden;">
                                        <img src=" " class="img-fluid" alt="Responsive image">
                                    </div>
                                    <h4 class="titleHead31 border-bottom"> Title
                                    </h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-4 col-6 mb-3 px-sm-3">
                        <a href="" class="text-decoration-none">
                            <div class="zoomImg" style="overflow: hidden;">
                                <img src="" width="100%" class="imgsizeM rounded-0"
                                    alt="Responsive Image Here">
                            </div>
                            <h4 class="titleHead31 border-bottom">Title</h4>
                        </a>
                    </div>


                </div>
            </div>

            <!-- SideBar -->
            <div class="col-sm-3 col-12">
                <!--biggapon -->
                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <a href="https://www.digitalsolutions.ltd" target="_blank">
                            <img src="https://waltonbd.com/image/catalog/category-banner/air-conditioner/6-star-latest.jpg"
                                width="100%" class="img-fluid" alt="Total Digital Solutions Agencies in Bangladesh.">
                        </a>
                    </div>
                </div>
                <!--biggapon End -->

                <div class="form-row mb-3">

                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 ">
                        <a class="btn btn-block btnStyle555" href="#">ডাক্তার আছেন</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 ">
                        <a class="btn btn-block btnStyle555" href="#">টিউটোরিয়াল</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 ">
                        <a class="btn btn-block btnStyle555" href="#">চিত্র বিচিত্র</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6">
                        <a class="btn btn-block btnStyle555" href="#">ইসলাম ও জীবন</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</template>

<style scoped>
    .btnStyle555 {
        color: white;

        font-size: 20px;
        font-weight: 600;
        padding: 10px 0px;
        border-radius: 12px;
        margin-bottom: 10px;
        background-color: #3A495E;
        transition: 0.3s ease-in;
    }

    .btnStyle555:hover {
        background-color: #eee;
    }
</style>
