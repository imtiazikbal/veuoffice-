
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
    skip1Get2: Object
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
            <a href=""><img src="https://tpc.googlesyndication.com/simgad/17282694357066508670" alt=""></a>
        </div>
    </div>  
    
       
         
        
   

</div>
<!-- <SearchForm/> -->
    <div class="container">
        <div class="row g-3">
            <div class="col-md-3 cbr-1">
    <div class="row">
        </div>
            <LeftSideBar_1/>
            <LeftSideBar_2/>
            <LeftSideBar_2/>
            <LeftSideBar_2/>
            <LeftSideBar_2/>       
         </div>    
        <div class="col-md-6 cbr-1">
                <div class="row">
                    <MainSection_1 :news = "news"/>0
                </div>
                <div class="row mb-3  cbt py-3">                    
                    <MainSection_2 :mainnews2 = "skip1Get2"/>
                </div>
                <div class="row pt-3 pb-3">
                    <MainSection_3/>  
                    <MainSection_3/>  
                    <MainSection_3/>  
                </div>
                <div class="row pt-3">
                    <MainSection_4/>
                    <MainSection_4/>
                    <MainSection_4/>
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
</template>

<style>

@import url('https://fonts.maateen.me/solaiman-lipi/font.css');
a,h1,h2,h3,h4,h5,h6,p,span{
    font-family: 'SolaimanLipi', sans-serif !important;
    padding: 0;
    margin: 0;
    text-decoration: none;

}
    a{
        text-decoration: none;
        padding: 0 px;
        max-width: 0 px ;
    }
    img{
        width: 100%;
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

</style>