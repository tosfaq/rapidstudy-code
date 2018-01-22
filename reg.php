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
					<div class="jarallax" data-jarallax='{"speed": 0.5}'>
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
											</div>
				</header>
				
				<div class="wrapper-1200">
	

<ul class="nav md-pills nav-justified pills-secondary">
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#reg" role="tab">Регистрация</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#login" role="tab">Вход</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#forgot" role="tab">Забыли пароль?</a>
    </li>
</ul>

<!-- Tab panels -->
<div class="tab-content">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="login" role="tabpanel">

<div class="auth-form">
	<div class="card card-body">
		<h4 class="card-title">Авторизация</h4>
		<form id="form-auth" onSubmit="auth(1);  return false;">
			<div class="md-form">
				<i class="fa fa-user prefix grey-text"></i>
				<input name="email" type="text" id="defaultForm-login" class="form-control" required>
				<label for="defaultForm-login">E-Mail</label>
			</div>
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input name="password" type="password" id="defaultForm-pass" class="form-control" required>
				<label for="defaultForm-pass">Пароль</label>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary btn-block">Вход</button>
			</div>
			<input type="hidden" name="auth">
		</form>
	</div>
</div>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="reg" role="tabpanel">
        
        <div class="auth-form">
	<div class="card card-body">
		<h4 class="card-title">Регистрация</h4>
		<form id="form-reg" onSubmit="auth(0);  return false;">
			<div class="md-form">
				<i class="fa fa-envelope prefix grey-text"></i>
				<input name="email" type="text" id="defaultForm-login" class="form-control" required>
				<label for="defaultForm-login">E-Mail</label>
			</div>
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input name="password" type="password" id="defaultForm-pass" class="form-control" required>
				<label for="defaultForm-pass">Пароль</label>
			</div>
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input name="password2" type="password" id="defaultForm-pass2" class="form-control" required>
				<label for="defaultForm-pass2">Пароль еще раз</label>
			</div>
			<div class="form-group">
				<input name="accept" type="checkbox" id="checkbox100">
				<label for="checkbox100">Я принимаю <a target="_blank" href="/agreement/">правила использовании ресурса</a> и обязуюсь подчиняться им.</label>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
			</div>
			<input type="hidden" name="register">
		</form>
	</div>
</div>

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="forgot" role="tabpanel">
       
       <div class="wrapper-1200">
	<div class="auth-form">
	<div class="card card-body">
		<h4 class="card-title">Восстановление пароля</h4>
		<form id="form-auth" onSubmit="newpassword();  return false;">
			<div class="md-form">
				<i class="fa fa-user prefix grey-text"></i>
				<input name="email" type="text" id="defaultForm-login" class="form-control" required>
				<label for="defaultForm-login">E-Mail</label>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary btn-block">Отправить письмо</button>
			</div>
			<input type="hidden" name="recover">
		</form>
	</div>
</div>


    </div>
    <!--/.Panel 3-->

</div>


<title>Авторизация | RapidStudy</title></div>			 </div>
			
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
		<!-- /JS -->
	</body>
</html>