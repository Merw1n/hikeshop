<!DOCTYPE HTML>
<html>
	<head>
		<title>Hike</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="js/jquery.min.js"></script>
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
		<!---slider---->
		<link rel="stylesheet" href="css/slippry.css">
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script>
		<!----//End-pricerage-seletion---->
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
				<!----start-bottom-header---->
				<div class="header-bottom">
					<div class="wrap">
					<!-- start header menu -->
						<ul class="megamenu skyblue">
							<li class="grid"><a class="color2" href="#">Каталог</a>
								<div class="megapanel">
									<div class="row">
										<div class="col1">
											<div class="h_nav">
												<h4>Популярное</h4>
												<ul>
													<li><a href="products.php">Новинки</a></li>
													<li><a href="products.php">мужчинам</a></li>
													<li><a href="products.php">женщинам</a></li>
													<li><a href="products.php">акксессуары</a></li>
													<li><a href="products.php">детям</a></li>
													<li><a href="products.php">войти</a></li>
												</ul>	
											</div>
										</div>
									</div>
								</div>
							</li>	
						</ul>
					</div>
				</div>
			</div>
				<!----//End-bottom-header---->
			<!---//End-header---->
		<!----start-image-slider---->
		<div class="img-slider">
			<div class="wrap">
			<ul id="jquery-demo">
			  <li>
			    <a href="#slide1">
			      <img src="images/slide-1.jpg" alt="" />
			    </a>
			    <div class="slider-detils">
			    	<h3>МУЖСКИЕ <label>БУТСЫ</label></h3>
			    	<span>Будь на высоте</span>
			    	<a class="slide-btn" href="details.php"> Закажи сейчас</a>
			    </div>
			  </li>
			  <li>
			    <a href="#slide2">
			      <img src="images/slide-4.jpg"  alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>МУЖСКИЕ <label>БУТСЫ</label></h3>
			    	<span>Оставайся верен свое команде каждую минуту, каждый час, каждый день</span>
			    	<a class="slide-btn" href="details.php"> Закажи сейчас</a>
			    </div>
			  </li>
			</ul>
			</div>
		</div>
		<div class="clear"> </div>
		<!----//End-image-slider---->
		<!----start-price-rage--->
		<!----//End-price-rage--->
		<!--- start-content---->
		<div class="content">
			<div class="wrap">
				<div class="content-left">
						<div class="content-left-bottom-grid">
							<h4>Хиты недели:</h4>
							<div class="content-left-bottom-grids">
								<div class="content-left-bottom-grid1">
									<img src="images/foot-ball.jpg" title="football" />
									<h5><a href="details_1.php">Hike Strike PL Hi-Vis</a></h5>
									<span> Футбол</span>
									<label>&#8372; 450</label>
								</div>
								<div class="content-left-bottom-grid1">
									<img src="images/jarse.jpg" title="jarse" />
									<h5><a href="details_1.php">Hike T-shirt PSG</a></h5>
									<span> Футбол</span>
									<label>&#8372; 750</label>
								</div>
							</div>
						</div>
				</div>
				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<script src="js/jstarbox.js"></script>
							<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
							<script type="text/javascript">
								jQuery(function() {
									jQuery('.starbox').each(function() {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function(event, value) {
											if(starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' '+val);
												return val;
											} 
										})
									});
								});
							</script>
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
						<div onclick="location.href='details_1.php';" class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/1.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details_1.php">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="details_1.php">&#8372; 1380</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details_2.php';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/2.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details_2.php">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="details_2.php">&#8372; 1375</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details_3.php';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/3.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details_3.php">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="details_3.php">&#8372; 1350</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details_4.php';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/4.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details_4.php">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="details_4.php">&#8372; 1370</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details_5.php';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/5.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details_5.php">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="details_5.php">&#8372; 1355</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details_6.php';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/6.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details_6.php">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="details_6.php">&#8372; 1390</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
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

