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
			<!---//End-header---->
		<!--- start-content---->
		<div class="content contact-main">
			<!----start-contact---->
			<div class="contact-info">
					<div class="map">
					 	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
					 </div>
					 <div class="wrap">
					 <div class="contact-grids">
							 <div class="col_1_of_bottom span_1_of_first1">
								    <h5>Адрес компании</h5>
								    <ul class="list3">
										<li>
											<img src="images/home.png" alt="">
											<div class="extra-wrap">
											 <p>Украина<br>Киев</p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="col_1_of_bottom span_1_of_first1">
								    <h5>Телефоны</h5>
									<ul class="list3">
										<li>
											   <img src="images/phone.png" alt="">
											<div class="extra-wrap">
												<p><span>Телефон:</span>+38 077 777 7777</p>
											</div>
												<img src="images/fax.png" alt="">
											<div class="extra-wrap">
												<p><span>FAX:</span>+38 077 777 7777</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="col_1_of_bottom span_1_of_first1">
									 <h5>Почта</h5>
								    <ul class="list3">
										<li>
											<img src="images/email.png" alt="">
											<div class="extra-wrap">
											  <p><span class="mail"><a href="mailto:yoursite.com">info.hikeshoes@corp.com</a></span></p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="clear"></div>
					 </div>
					 	<form method="post" action="order.php">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" name="name" required="" placeholder="Имя" id="name">
								 	<input type="text" name="email" required="" placeholder="Почта" id="email">
								 	<input type="text" name="theme" required="" placeholder="Тема обращения" id="theme">
								 	<input type="text" name="item" placeholder="Название товара" id="item">
								</div>
				                <button class="btn btn-success" type="submit">Отправить</button>
				                <div class="clear"></div>
				               </div>
				        </form>
						</div>
			</div>
			<!----//End-contact---->
		</div>
		
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

