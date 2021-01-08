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
					<h1>СОЗДАТЬ АККАУНТ</h1>
					<div class="register-grids">
						<form action="check.php" method="post"> 
								<div class="register-top-grid">
										<h3>ПЕРСОНАЛЬНАЯ ИНФОРМАЦИЯ</h3>
										<div>
											<span>Имя<label>*</label></span>
											<input type="text" name="name" required="" id="name" placeholder="Введите имя"> 
										</div>
										<div>
											<span>Фамилия<label>*</label></span>
											<input type="text" name="surname" required="" id="surname" placeholder="Введите фамилию"> 
										</div>
										<div>
											<span>Почта<label>*</label></span>
											<input type="text" name="email" required="" id="email" placeholder="Введите почту"> 
										</div>
										<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Согласие на получение рассылки</label>
											</a>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>ИНФОРМАЦИЯ ДЛЯ ВХОДА</h3>
										<div>
											<span>Пароль<label>*</label></span>
											<input type="password" name="pass" required="" id="pass" placeholder="Введите пароль">
										</div>
										<div>
											<span>Подтвердите пароль<label>*</label></span>
											<input type="password">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<button class="btn btn-success" type="submit">Зарегистрировать</button>
						</form>
					</div>
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
		<!---//End-wrap---->
	</body>
</html>

