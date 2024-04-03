<script setup>
    import {
        Head,
        Link
    } from '@inertiajs/vue3';
    import NavBar from '../Components/Header/Navbar.vue';

    defineProps({
        news: Object,
        relatedNews: Object
    })
</script>


<template>
    <NavBar />
    <!-- Breadcrumb Breadcrumb -->
    <!-- <section class="bg-light">
        <div class="container p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light pb-1 pt-2 ">
                    <li class="breadcrumb-item"><a href=""><i class="fas fa-home text-dark"> </i></a></li>

                    <li class="breadcrumb-item active" aria-current="page"></li>


                </ol>
            </nav>
        </div>
    </section> -->


    <!-- Details aria Start -->

        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="catInfo bb">
                        <h2 class="py-1"><span>{{ news . category . cName }}</span></h2>
                        <h2 class="py-2">{{ news . title }}</h2>
                        <h3 class="py-3"><span>বিনোদন প্রতিবেদক</span></h3>
                        <div class="newsPostAndShre d-flex justify-content-between">
                            <div>
                                <h2><span>প্রকাশ:{{ news . created_at }}</span></h2>

                            </div>
                            <div class="ShareButton d-flex">
                                <li><a href="">Facebook</a></li>
                                <li><a href="">Twitter</a></li>
                                <li><a href="">Font plus</a></li>
                                <li><a href="">Font Minus</a></li>
                                <li><a href="">Print</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="newsDetails py-5 d-flex flex-column justify-content-center align-items-center ">
                        <img :src="'/' + news.image" width="50%" alt="responsive image">
                        <h3 class="bb mt-1">{{ news . nCaption }}<span>
                            </span></h3>

                        <h2 class="py-3" v-html="news.nBody"></h2>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center position-sticky top-0">
                    <div class="detailsSideBar">
                        <div class="detailsAdd1">
                            <img src="https://tpc.googlesyndication.com/simgad/18288574991889935630" alt="">
                        </div>
                        <div class="detailsAdd2 pt-3">
                            <img src="https://tpc.googlesyndication.com/simgad/18288574991889935630" alt="">
                        </div>
                    </div>



                    <Link class="relatedNew pt-3" v-for="news1 in relatedNews.news" :key="news1.id"
                        :href="route('newsByTitle', { news: news1.id })">

                    <h2>{{ news1 . title }}</h2>
                    <div class="relDesPic d-flex justify-content-between py-1">
                        <h2 v-html="news1.nBody.substr(0, 50)">
                        </h2>

                        <img :src="'/' + news1.image" alt="" width="30%">

                    </div>
                    </Link>
                    <div class="detailsSideBar py-2">
                        <div class="detailsAdd1">
                            <img src="https://tpc.googlesyndication.com/simgad/18288574991889935630" alt="">
                        </div>
                        
                    </div>


                </div>
            </div>







        </div>


        <!-- @include('fontend.component.popular') -->




</template>

<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {

        color: blue;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a,
    li,
    span,
    p,
    option {

        padding: 0px;
        margin: 0px;
    }

    span {
        font-size: small;
        padding: 0px 5px 0px 5px;
    }

    .br {
        border-right: var(--border-right);
        padding-right: var(--padding-right);
    }

    .bb {
        border-bottom: var(--border-right);
        padding-bottom: var(--padding-right);
    }

    .Cpr {
        padding-right: var(--padding-right);
    }

    .Cpb {
        padding-bottom: 20px;
    }

    .pr {
        padding-right: var(--padding-right);
    }

    .cbb {
        border-bottom: 2px solid black;
    }

    .catInfo h2 span {
        color: var(--primary-color);
        font-weight: var(--primary-font-wight);
        font-size: 16px;
    }

    .catInfo h2 {
        color: var(--primary-color);
        font-weight: var(--primary-font-wight);
        font-size: 42px;
    }

    .catInfo h3 span {
        color: var(--secondary-color);
        font-weight: var(--primary-font-wight);
        font-size: var(--secondary-heading);
    }

    .newsPostAndShre h2 span {
        color: var(--secondary-color);
        font-size: 16px;
    }

    .newsDetails h3 span {
        font-size: var(--primary-newsCaption);
    }

    .newsDetails {
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .newsDetails h2 {
        font-size: var(--primary-newsDetailsheading);
        line-height: 1.7;
        white-space: space;

    }

    .detailsSideBar {
        display: flex;
        flex-direction: column;

    }

    .relatedNew {
        width: 300px;
        /* height: 250px; */
    }

    .relatedNew h2 {
        font-weight: var(--primary-font-wight);

    }

    .relDesPic h2 {
        font-weight: var(--secondary-color);

    }
</style>
