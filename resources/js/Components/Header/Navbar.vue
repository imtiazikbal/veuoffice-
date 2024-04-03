<script setup>
    import {
        ref
    } from 'vue'
    import {
        Link
    } from '@inertiajs/vue3'
    import {
        reactive
    } from 'vue'
    // Search Bar
    const isSearchFormVisible = ref(false)
    const toggleSearchFormVisibility = () => {
        isSearchFormVisible.value = !isSearchFormVisible.value;
    }

    // Menu Bar
    const MenuBar = ref(false);
    const toggleMenuBar = () => {
        MenuBar.value = !MenuBar.value;
    }

    // login form Bar
</script>
<template>

    <!-- Search Bar -->

    <div class="bg-white h-screen flex justify-center items-center relative" v-if="isSearchFormVisible">
        <form action="/search" class="max-w-[480px] w-full px-4">
            <div class="relative">

                <input type="text" class="w-full border h-12 shadow p-4 rounded-full" placeholder="search">
                <button type="submit">
                    <svg class="text-teal-400 h-5 w-5 absolute top-3.5 right-3 fill-current"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
    </div>

    <!-- Menu bar -->
    <!-- component -->
    <div class="flex justify-center items-center relative" v-if="MenuBar">
        <div>
            <!-- Sidebar Overlay -->
            <div class="fixed inset-0 customZindex">

                <!-- Sidebar Content -->
                <section class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
                    <div x-show="open" x-transition:enter="transition-transform ease-out duration-300"
                        x-transition:enter-start="transform translate-x-full"
                        x-transition:enter-end="transform translate-x-0"
                        x-transition:leave="transition-transform ease-in duration-300"
                        x-transition:leave-start="transform translate-x-0"
                        x-transition:leave-end="transform translate-x-full" class="w-screen max-w-md">
                        <div class="h-full flex flex-col py-6 bg-white shadow-xl">
                            <!-- Sidebar Header -->
                            <div class="flex items-center justify-between px-4">
                                <h2 class="text-xl font-semibold text-black">Search</h2>
                                <button @click="toggleMenuBar()" class="text-gray-500 hover:text-gray-700">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: x"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Search Input -->
                            <div class="mt-4 px-4">
                                <input type="text" placeholder="Search post here"
                                    class="w-full p-2 border border-gray-300 rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
                            </div>

                            <!-- Sidebar Content -->


                        </div>
                    </div>
                </section>
            </div>
            <!-- Your main content goes here -->
            <!-- Open sidebar button -->

        </div>
    </div>
    <!-- Include Alpine.js -->



    <!-- Navbar start -->

    <div class="d-sm-none navbar navbar-light shadow-sm sticky-top"
        style="background:#eee; box-shadow: 0 .2rem .2rem rgba(0,0,0,.15) !important; padding-bottom: 0rem;">
        <a class="navbar-brand" href="">
            <Link href="/">
            <img :src="'/' + $page.props.logo.logo" width="140px" style="" alt="">
            </Link>
        </a>
        <button class="navbar-toggler navbar-light border-0 mt-1 p-0" type="button" data-toggle="collapse"
            data-trigger="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="font-size:26px; padding:0px!important;"></span>
        </button>
    </div>

    <div style="background:#fff;">
        <div class="container d-none d-sm-block">
            <div class="row d-flex justify-content-between py-3" style="color: #ddd;">
                <div class="col-2 d-flex align-items-center">
                    <Link href="/">
                    <img :src="'/' + $page.props.logo.logo" width="100%" style="" alt="">
                    </Link>
                </div>



                <div class="col-10 d-flex justify-content-center align-items-center">
                    <Link class="text-decoration-none">
                    <div class="row no-gutters">
                        <img src="https://tpc.googlesyndication.com/simgad/1409315922313000973" alt="">
                    </div>
                    </Link>
                </div>
            </div>
        </div>
    </div>

    <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light sticky-top py-1 px-md-0"
        style="background: #fff !important; text-align: center!important; border-top: 1px solid #ddd; border-bottom: 2px solid #bbb5b5;">
        <div class="container d-flex justify-content-center">
            <ul id="style1stNav" class="navbar-nav">
                <li class="nav-item style1stNav">
                    <a class="nav-link pl-0" href="#">সর্বশেষ</a>
                </li>
                <!-- Input Cat page start -->
                <li class="nav-item style1stNav" v-for="category in $page.props.headerData" :key="category.id">
                    <Link class="nav-link" :href="`/admin/get-news-by-category/${category.id }`">
                    {{ category . cName }}</Link>
                </li> 
            </ul>
            <!-- <ul id="" class="navbar-nav ml-auto">

                <li class="nav-item style2ndNav">
                    <a @click="toggleSearchFormVisibility" class="nav-link"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-search"
                            viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg> খুজুন </a>
                </li>

              

                <li class="nav-item style2ndNav">

                    <button href="" @click="toggleMenuBar" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="50" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>

                </li>
            </ul> -->
        </div>
    </nav>

    <!-- Navbar End -->
</template>

<style>
    h4.titleHead5 {
        color: black;
    }

    .nav-link {
        color: #111 !important;
    }

    .style1stNav {
        font-size: 18px;
        font-size: bold;
        padding: 5px 5px 0px;
        text-align: left;
    }

    .style1stNav:hover {
        background: #eee;
        border-bottom: 3px solid red;
        margin-bottom: -5px;
    }

    .style2ndNav {
        font-size: 20px;
        font-size: bold;
        margin-left: 5px;
        padding: 5px 5px 0px;
        border-right: 1px solid #999;
        text-align: right;
    }

    .style2ndNav:hover {
        background: #eee;
        border-bottom: 3px solid red;
        margin-bottom: -5px;
    }

    .activedd {
        background: #eee;
        border-bottom: 3px solid red;
        margin-bottom: -5px;
    }

    .style1stNav:focus {
        border-bottom: 2px solid red;
        border-radius: 5px;
    }

    .offcanvas-header {
        display: none;
    }

    .screen-overlay {
        height: 100%;
        z-index: 30;
        position: fixed;
        top: 0;
        left: 0;
        opacity: 0;
        visibility: hidden;
        background-color: rgba(34, 34, 34, 0.6);
        transition: opacity .2s linear, visibility .1s, width 1s ease-in;
    }

    .screen-overlay.show {
        transition: opacity .5s ease, width 0s;
        opacity: 1;
        width: 100%;
        visibility: visible;
    }

    .cstmBG {
        background: rgb(182, 182, 182);
        background: linear-gradient(0deg, rgba(182, 182, 182, 1) 0%, rgba(255, 255, 255, 1) 5%);
        z-index: 2
    }

    .dropdown-item:hover {
        background-color: #eee;
    }

    #logo {
        overflow: hidden;
        transition: 0.5s;
        width: 300px;
        z-index: 0;

    }

    @media all and (max-width:676px) {
        .cstmBG {
            padding: 0em .8em;
        }

        .offcanvas-header {
            display: block;
        }

        .mobile-offcanvas {
            visibility: hidden;
            transform: translateX(-100%);
            border-radius: 0;
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1200;
            width: 70%;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: visibility .2s ease-in-out, transform .2s ease-in-out;
        }

        .mobile-offcanvas.show {
            visibility: visible;
            transform: translateX(0);
        }
    }

    /*dropdown_hover */
    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-item:hover {
        background-color: #e4e4e4;
    }

    /*mega menu */
    .menu-large {
        position: static !important;
    }

    .megamenu {
        margin-top: 0px;
        padding: 0px 20px;
        width: 100%;
    }

    .megamenu>div>li>ul {

        padding: 10px 0 0;
    }

    .megamenu>div>li>ul>li {
        list-style: none;

    }

    .megamenu>div>li>ul>li>a {
        font-size: 18px;
        clear: both;
        color: #444;
        font-weight: normal;
        white-space: normal;
        display: block;
        margin: 5px 0px;
        padding: 2px 3px;
        text-decoration: none;
        border-bottom: 1px solid #ddd;
        transition: all .4s;
    }

    .megamenu>div>li>ul>li>a:hover {
        background-color: white;
        border-left: 10px solid hsla(190, 80%, 40%, 1);
        padding-left: 5px;
    }


    .megamenu2>div>li>a {
        font-size: 22px;
        clear: both;
        color: #333 !important;
        display: block;
        padding: 10px 10px;
        text-decoration: none;
        transition: all .4s;
    }






    .dropdown-header {
        color: #333 !important;
        font-size: 18px;
        font-weight: bold;
        padding: 5px 0px !important;
    }

    .dropdown-header:hover {
        text-decoration: none;
    }

    .singleDDMenu>div>a {
        font-size: 18px;
        padding-left: 15px;
        color: #333 !important;
        white-space: normal;
        text-decoration: none;
        transition: all .4s;
    }

    .singleDDMenu>div>a:hover {
        border-left: 10px solid hsla(190, 80%, 40%, 1);
    }


    /* ======Navbar Margin ======*/
    .navmargin {
        margin-top: 100px;
    }

    @media (max-width: 768px) {
        .navmargin {
            margin-top: 120px;
        }
    }

    /*mega menu */
    /*trending menu start */
    div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
    }

    @media only screen and (max-width: 600px) {
        div.scrollmenu {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    }

    div.scrollmenu::-webkit-scrollbar {
        display: none;
    }

    div.scrollmenu a {
        color: white;
        font-size: 12px;
        padding: 3px 12px;
        margin-right: 10px;
        border-radius: 15px;
        background-color: #3A495E;
        text-decoration: none;
        border-image-slice: 1;
        transition: all;
        transition: 0.3s ease-in;
    }

    @media only screen and (max-width: 600px) {
        div.scrollmenu a {
            display: inline-block;
            margin-right: 2px;
        }
    }


    div.scrollmenu a:hover {
        background-color: #eee;
    }

    .customZindex {
        z-index: 100000000;
    }
</style>
