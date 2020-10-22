<?php
$myUrl = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<title><?=$data[5];?> Ваш умелец</title>
<link href="<?=$myUrl?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=$myUrl?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=$myUrl?>/css/myStyle.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ремонт компьютеров <?=$data[3];?>, ремонт ноутбуков <?=$data[3];?>, компьютерная помощь в <?=$data[4];?> " />
<meta name="description" content="<?=$data[6];?> <?=$data[2];?>">
<script > addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
<!-- <script src="js/jquery.min.js"></script> -->
<!-- <script src="js/responsiveslides.min.js"></script> -->
<!-- <script> -->
    <!-- $(function () { -->
      <!-- $("#slider").responsiveSlides({ -->
      	<!-- auto: true, -->
      	<!-- nav: true, -->
      	<!-- speed: 500, -->
        <!-- namespace: "callbacks", -->
        <!-- pager: true, -->
      <!-- }); -->
    <!-- }); -->
	
  <!-- </script> -->
	
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="/"><img src="<?=$myUrl?>/images/logo.png" class="img-responsive" alt=""></a>
			</div>
			
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-1">

							<li class="active"><a href="<?=$myUrl?>/<?=$data[0]?>/pc-help.html">Компьютерная помощь</a></li>
							<li><a href="<?=$myUrl?>/<?=$data[0]?>/routers.html">Настройка роутеров</a></li>
							 <li><a href="<?=$myUrl?>/<?=$data[0]?>/sites.html">Разработка сайтов</a></li>

										
						</ul>
				</div>
						
							<script>
							 $( "span.menu" ).click(function() {
								$( ".head-nav ul" ).slideToggle(300, function() { 
								
								   });
								 });
							 </script>
					
				
						
			
					<div class="clearfix"> </div>
		</div>
	</div>
<!-- header -->
<div class="container">
	<div class="col-md-9 bann-right">
		<!-- banner -->
		<div class="banner">		
			<div class="header-slider">
				<div class="slider">
					<div class="callbacks_container">
					  	<ul class="rslides" id="slider">
							<li>
								<img src="<?=$myUrl?>/images/1.jpg" class="img-responsive" alt="">
								<div class="caption">
									<h3>Любые компьютерные услуги</h3>
									<p>Ремонт компьютеров и ноутбуков. Настройка роутеров и сетей. Установка любых леценцзионных программ и операционных систем на дому</p>
								</div>
							</li>
							
							
						</ul>
			  		</div>
				 </div>
			</div>
		</div>
		<!-- banner -->	
		<!-- nam-matis -->
		<div class="nam-matis">
			<div class="nam-matis-top">
				<?=$content?>
					</div>	
		</div>
		<!-- nam-matis -->	
	</div>
	<div class="col-md-3 bann-left">
		<div class="b-search">
			<form>
				<input type="text">
				<input type="submit" value="">
			</form>
		</div>
		<h3>Ссылки</h3>
		
		<h3>Категории работ</h3>
		<div class="blo-top">
		<ul>
			<li><a href="#">Компьютерные услуги</a></li>
			<li><a href="#">Ремонт бытовой техники</a></li>
			<li><a href="#">Мастер на час</a></li>
			<li><a href="#">Отделочные работы</a></li>
			<li><a href="#">Разработка сайтов</a></li>
		</ul>
		</div>
		<h3>Новости</h3>
		
		<div class="blo-top">
			<div class="name">
				<form>
					<input type="text" placeholder="email" required="">
				</form>
			</div>	
			<div class="button">
				<form>
					<input type="submit" value="Subscribe">
				</form>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
		<div class="fle-xsel">
			
							<?=$breadCrumbs?>
							 <!-- <script type="text/javascript"> -->
								<!-- $(window).load(function() { -->
									
									<!-- $("#flexiselDemo3").flexisel({ -->
										<!-- visibleItems: 5, -->
										<!-- animationSpeed: 1000, -->
										<!-- autoPlay: true, -->
										<!-- autoPlaySpeed: 3000,    		 -->
										<!-- pauseOnHover: true, -->
										<!-- enableResponsiveBreakpoints: true, -->
										<!-- responsiveBreakpoints: {  -->
											<!-- portrait: {  -->
												<!-- changePoint:480, -->
												<!-- visibleItems: 2 -->
											<!-- },  -->
											<!-- landscape: {  -->
												<!-- changePoint:640, -->
												<!-- visibleItems: 3 -->
											<!-- }, -->
											<!-- tablet: {  -->
												<!-- changePoint:768, -->
												<!-- visibleItems: 3 -->
											<!-- } -->
										<!-- } -->
									<!-- }); -->
									
								<!-- }); -->
								<!-- </script> -->
								<!-- <script type="text/javascript" src="js/jquery.flexisel.js"></script> -->
					<div class="clearfix"> </div>
		</div>
		<div class="footer">
			<div class="col-md-3 foot-1">
				<h4>Быстрые ссылки</h4>
				<ul>
					<li><a href="http://компъ.рф">Рассчитай цену на ремонт ПК</a></li>
					<li><a href="http://mega-helper.ru">Рассчитай цену на ремонт бытовой техники</a></li>
					<li><a href="http://2kompa.ru">Хочу сайт за смешную цену</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>Популярные ссылки</h4>
				<ul>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Гарантии</a></li>
					<li><a href="#">Выезд</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>Категории</h4>
				<ul>
					<li><a href="#">Высокие технологии</a></li>
					<li><a href="#">Бытовая техника</a></li>
					<li><a href="#">Рабочие</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>Партнеры</h4>
				<ul>
					<li><a href="#">Стать партнером</a></li>
					<li><a href="#">Общая информация</a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="copyright">
				<p>Copyrights © 2020 All rights reserved </p>
			</div>
		</div>
	</div>
	<!-- Yandex.Metrika counter -->
<script >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(51104297, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51104297" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-92542848-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-92542848-1');
</script>

</body>
</html>