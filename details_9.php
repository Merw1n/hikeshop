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
		<!-- Owl Carousel Assets -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/jquery-1.9.1.min.js"></script> 
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 3,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
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
								<div id="cart">Your Cart is Empty <span>(0)</span></div>
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
				
		<!--- start-content---->
		<div class="content details-page">
			<!---start-product-details--->
			<div class="product-details">
				<div class="wrap">
					
				<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								source_image_width: 900,
								source_image_height: 1000,
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->
				<div class="details-left">
					<div class="details-left-slider">
						<ul id="etalage">
							<li>
								<a href="optionallink.php">
									<img class="etalage_thumb_image" src="images/product-slide/33.jpg" />
									<img class="etalage_source_image" src="images/product-slide/33.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/34.jpg" />
								<img class="etalage_source_image" src="images/product-slide/34.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/35.jpg" />
								<img class="etalage_source_image" src="images/product-slide/35.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/36.jpg" />
								<img class="etalage_source_image" src="images/product-slide/36.jpg" />
							</li>
						</ul>
					</div>
					<div class="details-left-info">
						<div class="details-right-head">
						<h1>Nike HYPERVENOM Phantom FKG</h1>
						<ul class="pro-rate">
							<li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
							<li><a href="#">11 Отзывов</a></li>
						</ul>
						<p class="product-detail-info">Носи летний закат с собой — выбирай кроссовки Nike HYPERVENOM Phantom FKG.</p>
						<div class="product-more-details">
							<ul class="price-avl">
								<li class="price"><span>&#8372;1530</span><label>&#8372;1450</label></li>
								<li class="stock"><i>В наличии</i></li>
								<div class="clear"> </div>
							</ul>
							<form action="item_id-1.php" method="post">
							<input type="text" name="quantity" required="" placeholder="Количество(1-6)" id="quantity">
							<input type="text" name="size" required="" placeholder="Размер(36-45)" id="size">
							<input type="text" name="telephone" required="" placeholder="Телефон" id="telephone">
							<button class="btn btn-success" type="submit">Отправить</button>	
						</form>
							<ul class="product-share">
								<h3>Поделиться</h3>
								<ul>
									<li><a class="share-face" href="#"><span> </span> </a></li>
									<li><a class="share-twitter" href="#"><span> </span> </a></li>
									<li><a class="share-google" href="#"><span> </span> </a></li>
									<li><a class="share-rss" href="#"><span> </span> </a></li>
									<div class="clear"> </div>
								</ul>
							</ul>
						</div>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="details-right">
				</div>
				<div class="clear"> </div>
			</div>
			<!----product-rewies---->
			<div class="product-reviwes">
				<div class="wrap">
				<!--vertical Tabs-script-->
				<!---responsive-tabs---->
					<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							 $('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true,   // 100% fit in a container
									closed: 'accordion', // Start closed if in accordion view
									activate: function(event) { // Callback function if tab is switched
									var $tab = $(this);
									var $info = $('#tabInfo');
									var $name = $('span', $info);
										$name.text($tab.text());
										$info.show();
									}
								});
													
							 $('#verticalTab').easyResponsiveTabs({
									type: 'vertical',
									width: 'auto',
									fit: true
								 });
						 });
					</script>
				<!---//responsive-tabs---->
				<!--//vertical Tabs-script-->
				<!--vertical Tabs-->
        		<div id="verticalTab">
		            <ul class="resp-tabs-list">
		                <li>Описание</li>
		            </ul>
		            <div class="resp-tabs-container vertical-tabs">
		                <div>
		                	<h3>Подробнее</h3>
		                    <p>Носи летний закат с собой — выбирай кроссовки Nike Air Max Tailwind IV. Эффектные цветные акценты (в некоторых расцветках) напоминают о модели Air Max Plus с оригинальным градиентом, а система амортизации Max Air обеспечивает комфорт и создает фирменный образ.</p>
		                </div>
		            </div>
       		</div>
       		<div class="clear"> </div>
       		<!--- start-similar-products--->
       		<div class="similar-products">
       			<div class="similar-products-left">
       				<h3>Похожие товары</h3>
       				
       			</div>
       			<div class="similar-products-right">
       				<!-- start content_slider -->
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
					       <div id="owl-demo" class="owl-carousel">
				                <div class="item" onclick="location.href='details.php';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/1.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Подробнее</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#8372; 1200</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.php';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/2.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Подробнее</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#8372; 1320</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.php';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/3.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Подробнее</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#8372; 1380</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.php';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/4.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Подробнее</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#8372; 1300</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.php';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/5.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Подробнее</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#8372; 1270</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
			              </div>
				<!----//End-img-cursual---->
       			</div>
       			<div class="clear"> </div>
       		</div>
       		<!--- //End-similar-products--->
			</div>
			</div>
			<div class="clear"> </div>
			<!--//vertical Tabs-->
			<!----//product-rewies---->
			<!---//End-product-details--->
			</div>
		</div>
		<!---- start-bottom-grids---->
		
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
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>

