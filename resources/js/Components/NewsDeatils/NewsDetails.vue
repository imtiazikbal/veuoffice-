<script setup>
defineProps({
    news: Object
})
</script>
<template>
	<!-- Breadcrumb Breadcrumb -->
		<section class="bg-light">
			<div class="container p-0">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-light pb-1 pt-2 ">
						<li class="breadcrumb-item"><a href=""><i class="fas fa-home text-dark"> </i></a></li>
					
						<li class="breadcrumb-item active" aria-current="page">{{ news.cName }}</li>

						
					</ol>
				</nav>
			</div>
		</section>
	
	
<!-- Details aria Start -->
	<section class="">
		<div class="container">
			<div class="row">
                <div class="col-md-2" style="margin-top:20px;">
					<a href="https://www.google.com/search?q=digitalsolutions.ltd&ei=LvqAY6OaOrTf4-EPmJuU6A0&ved=0ahUKEwij6fvL7Mn7AhW07zgGHZgNBd0Q4dUDCA4&uact=5&oq=digitalsolutions.ltd" target="_blank">
			          	<img src="" class="img-fluid animated fadeInUp" width="100%" alt="Digital Solutions Ltd">
			        </a>
				</div>
				<!--News Details aria-->
				<div class="col-md-7 col-12">
					<div class="row">
						<div class="col">
							<span class="sharethis-inline-share-buttons hidden"></span>
							<h2 class="">News Title</h2>
							<div class="row">
								<div class="col">
									<h6 class="pb-1" style="color: #999999;"> 
										<span class="font-weight-bold"> Publish : Created </span>.
									</h6>
									<img src="" class="card-img-top rounded-0" 
										title="news title" alt="">
									<p class="text-center font-italic pt-2" style="color: #666;">caption</p>
								</div>
							</div>
							<div class="row">
								<style type="text/css">
									p {
										padding: 0px 20px 0px 0px;
									}
								</style>
								<div class="col-12 og:description detailsStyle">
									<!-- News Body -->
									<h5 class="py-3 text-muted"> 
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
											</svg>
										</span>
									</h5>
                                    

								<!-- body -->
									<div class="py-3 sharethis-inline-share-buttons"></div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
				
		
		    <!-- @include('fontend.component.popular') -->
	</section>
		

	
</template>

<style>
		.cstomWidth {
			width: 80%;
		}


		h2 {
			font-weight: bold;
			padding: 15px 0;

		} @media (max-width: 768px) {
			h2 { 
				font-size: 24px;
				padding: 10px 0;
			 } 
		}
		
		.detailsStyle p {
			color: #444; 
			text-align: justify;
			font-size: 20px;
			line-height: 1.5;
			margin-bottom: 18px;
		}  @media (max-width: 768px) {
			.detailsStyle p { 
				font-size: 20px;
			}
		}
		
		.detailsStyle h5 {
			font-size: 22px;
			color: #333;
			font-weight: bold;

		}

		.topboxstyle a {
			text-decoration: none;
		}
		.topboxstyle a:hover {
			background-color: #e5f7ff;
		}
		.topboxstyle p {
			font-size: 16px;
			background-color: #fff;
			padding: 5px 5px;
			height: 55px;
			overflow: hidden;
			line-height: 1.3em;
			text-decoration: none;
		}
		

		.tagbtnstyle2Modify a {
			font-size: 16px!important;
			margin-left: 5px;
		}

		.share-this-cstmstyle {
			margin-top: -33px;
			opacity: 100%;
		}
		.share-this-cstmstyle:hover {
			opacity: 30%;
		}
	</style>