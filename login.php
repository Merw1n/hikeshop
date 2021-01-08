<!DOCTYPE HTML>
<html>
	<head>
		<title>Hike</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<script src="js/jquery.min.js"></script>
		<!----start-alert-scroller---->
		<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/menu_jquery.js"></script>
		<!-- //End menu -->
		<!---move-top-top---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!---//move-top-top---->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
		<div class="header">
				<div class="top-header">
					<div class="wrap">
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<script type="text/javascript">
									$(function(){
									    var $cart = $('#cart');
									        $('#clickme').click(function(e) {
									         e.stopPropagation();
									       if ($cart.is(":hidden")) {
									           $cart.slideDown("slow");
									       } else {
									           $cart.slideUp("slow");
									       }
									    });
									    $(document.body).click(function () {
									       if ($cart.not(":hidden")) {
									           $cart.slideUp("slow");
									       } 
									    });
									    });
								</script>
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="#"><span id="clickme"> </span></a></li>
								<!---start-cart-bag---->
								<div id="cart">В вашей корзине <span>(0)</span></div>
								<!---start-cart-bag---->
								<li><a class="info" href="#"><span> </span></a></li>
							</ul>
						</div>
						<div class="top-header-center">
							<div class="top-header-center-alert-left">
								<h3>БЕСПЛАТНАЯ ДОСТАВКА</h3>
							</div>
							<div class="top-header-center-alert-right">
								<div class="vticker">
								  <ul>
									  <li>Заказы от 1500 грн. <label>Возврат бесплатен.</label></li>
								  </ul>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="top-header-right">
							<ul>
								<li><a href="login.php">Войти</a><span> </span></li>
								<li><a href="register.php">Регистрация</a></li>
							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-right">
							<a class="logo" href="index.php"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
					<!-- start header menu -->
		</div>
				<!----//End-bottom-header---->
			<!---//End-header---->
		<!--- start-content---->
		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>ВОЙТИ ИЛИ ЗАРЕГИСТРИРОВАТЬСЯ</h1>
					<div class="login-left">
						<h3>НОВЫЕ ПОЛЬЗОВАТЕЛИ</h3>
						<p>Создавая аккаунт, вы получаете возможность получать рассылку о последних новинках, а также будете получать подарочные сертификаты</p>
						<a class="acount-btn" href="register.php">Создать аккаунт</a>
					</div>
					<div class="login-right">
						<h3>ЗАРЕГИСТРИРОВАННЫМ ПОЛЬЗОВАТЕЛЯМ</h3>
						<p>Если Вы уже зарегистрировались, пожалуйста войдите.</p>
						<form action="auth.php" method="post">
							<div>
								<span>Почта<label>*</label></span>
								<input type="text" name="email" required="" id="email" placeholder="Введите почту"> 
							</div>
							<div>
								<span>Пароль<label>*</label></span>
								<input type="password" name="pass" required="" id="pass" placeholder="Введите пароль"> 
							</div>
							<a class="forgot" href="#">Забыли пароль?</a>
							<button class="btn btn-success" type="submit">Авторизоваться</button>
						</form>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---- start-bottom-grids---->
		<div class="bottom-grids">
			<div class="bottom-bottom-grids">
				<div class="wrap">
					<div class="bottom-bottom-grid">
						<h6>ПОКУПАЙТЕ У НАС</h6>
						<p>Мы первые у кого появляются новая обувь.</p>
					</div>
					<div class="bottom-bottom-grid">
						<h6>СКИДКИ</h6>
						<p>Здесь Вы можете заказать обувь с большой скидкой.</p>
					</div>
					<div class="bottom-bottom-grid last-bottom-bottom-grid">
						<h6>КРУГЛОСУТОЧНАЯ ПОДДЕРЖКА</h6>
						<p>Напишите нам в люое время и мы Вам ответим в течении 20 минут.</p>		
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-left">
					<ul>
						<li><a href="#">Украина</a> <span> </span></li>
						<li><a href="#">Торговое соглашение</a> <span> </span></li>
						<li><a href="#">Hike Inc.</a> <span> </span></li>
						<li><a href="contact.php">Связаться с нами</a> <span> </span></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-right">
					<p>Merwin</p>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>

