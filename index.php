<?php header('Content-type: text/html; charset=UTF-8') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- МЕТА ТЕГИ -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/img/favs/favicon.ico">
		
		<!-- /МЕТА ТЕГИ -->
		
		<!-- СТИЛИ -->
		<link rel="stylesheet" type="text/css" href="css/compiled.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<style type="text/css">
			canvas{ display:block;
    		position: absolute;
    		z-index: -1; 
    		top: 0} 
		</style>
		<!-- СТИЛИ -->
	</head>

	<body>
		<div id="loader" style="display: none;" class="loading-wrap wrap">
			<div class="wrap-int">
				<center>
					<div class="preloader-wrapper big active">
						  <div class="spinner-layer spinner-blue">
							<div class="circle-clipper left">
							  <div class="circle"></div>
							</div><div class="gap-patch">
							  <div class="circle"></div>
							</div><div class="circle-clipper right">
							  <div class="circle"></div>
							</div>
						  </div>

						  <div class="spinner-layer spinner-red">
							<div class="circle-clipper left">
							  <div class="circle"></div>
							</div><div class="gap-patch">
							  <div class="circle"></div>
							</div><div class="circle-clipper right">
							  <div class="circle"></div>
							</div>
						  </div>

						  <div class="spinner-layer spinner-yellow">
							<div class="circle-clipper left">
							  <div class="circle"></div>
							</div><div class="gap-patch">
							  <div class="circle"></div>
							</div><div class="circle-clipper right">
							  <div class="circle"></div>
							</div>
						  </div>

						  <div class="spinner-layer spinner-green">
							<div class="circle-clipper left">
							  <div class="circle"></div>
							</div><div class="gap-patch">
							  <div class="circle"></div>
							</div><div class="circle-clipper right">
							  <div class="circle"></div>
							</div>
						  </div>
						</div>    
					<p id="loader-text"></p>
				</center>
			</div>
		</div>
		<div class="wrapper">
			<div class="content">
				<header class="z-depth-1">
					<div id="backg" class="jarallax" data-jarallax='{"speed": 0.5}'>
						<nav class="menu-top navbar navbar-expand-md">
							<div class="menu-wrap">
								<div class="row justify-content-between">
									<div class="col-md-4 align-self-center">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Открыть меню"><i class="fa fa-bars" aria-hidden="true"></i></button>
										<div class="logo"><img align=middle src="/img/logo.svg"> RapidStudy</div>
									</div>
									<div class="col-md-auto align-self-center">
										<div style="z-index: 1000;" class="collapse navbar-collapse" id="navbarSupportedContent">
											<ul class="navbar-nav mr-auto">
												<a class="waves-effect link" href="/">Главная</a>
												<a class="waves-effect link" href="/my/">Личный кабинет</a>
												<a class="waves-effect link" target="_blank" href="https://vk.com/id1">Наш ВК</a>
												<div class="dropdown">
													<a class="waves-effect dropdown-toggle link" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/">Информация</a>
													<div class="dropdown-menu dropdown-success">
														<a class="dropdown-item" href="/about/">Что мы такое</a>
														<!--<a class="dropdown-item" href="/faq/">FAQ</a>-->
														<a class="dropdown-item" href="/contact/">Связь с нами</a>
													</div>
												</div>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</nav>
												<div class="wrapper-1200 head-centr">
							<h2 class="h2-responsive">Предоставляем прекрасные возможности<br>для учеников и преподавателей<br>Быстро. Просто. <span>Надежно</span>.</h2>
							<a style="margin-top: 32px;" class="btn blue-gradient btn-rounded waves-effect" href="/reg">Вход/Регистрация</a>
						</div>
											</div>
				</header>
				
				<title>Главная | RapidStudy</title><section class="infoabout">
	<div class="wrapper-1200">
		<div class="row">
			<div class="col-md-auto col-12 align-self-center">
			</div>
			<div class="col">
				<h3 class="h3-responsive">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h3>
				<p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
			</div>
		</div>
	</div>
</section>

<section class="aboutmore z-depth-1">
	<div class="wrapper-1200">
		<div class="row">
			<div class="col-md-4">
				<div class="col-1 col-md-2 float-left">
					<img src="/img/smartphone.svg">
				</div>
				<div class="col-10 col-md-9 col-lg-10 float-right">
					<h4 class="h4-responsive">Lorem ipsum</h4>
					<p class="grey-text">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-1 col-md-2 float-left">
					<img src="/img/tuition-and-fees.svg">
				</div>
				<div class="col-10 col-md-9 col-lg-10 float-right">
					<h4 class="h4-responsive">Lorem ipsum</h4>
					<p class="grey-text">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-1 col-md-2 float-left">
					<img src="/img/account.svg">
				</div>
				<div class="col-10 col-md-9 col-lg-10 float-right">
					<h4 class="h4-responsive">Lorem ipsum</h4>
					<p class="grey-text">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt</p>
				</div>
			</div>
		</div>
	</div>
</section>
			 </div>
			
			<div class="footer">
				<footer>
					<div class="wrapper-1200">
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<p class="logo">RapidStudy</p>
								<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
								<p><a href="/agreement/">Соглашение о использовании ресурса</a></p>
								<p class="logo">Пишите нам: <a href="mailto://a@a.a">mail@mail.mail</a></p>
							</div>
							<div class="col-md-6 col-xs-12 align-self-center">
								<div class="float-left float-md-right">
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		
		
		<!-- JS -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script src="https://use.fontawesome.com/8c726e34c1.js"></script>
		<script src="https://cdn.nsoq.ru/js/compiled.min.js"></script>
		<script src="/js/main.js"></script>
		<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
		<script type="text/javascript">
			particlesJS("backg", {"particles":{"number":{"value":30,"density":{"enable":true,"value_area":600}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"top-right","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
		</script>
		<!-- /JS -->
	</body>
</html>