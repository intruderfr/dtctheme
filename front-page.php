<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dtctheme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div id="carouselExampleDark" class="carousel carousel-dark slide pb-3" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="10000">
							<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-A.jpg" class="d-block w-100" alt="slider-a">
						</div>
						<div class="carousel-item" data-bs-interval="2000">
							<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-B.jpg" class="d-block w-100" alt="slider-b">
						</div>
					</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
		</div>

		<div class="row">
    		<div class="col-sm ads-section">
			<img src="<?php echo get_template_directory_uri();?>/img/banner/Ads-Men.jpg" class="d-block w-100" alt="Ads-Men">
    		</div>
    		<div class="col-sm ads-section">
			<img src="<?php echo get_template_directory_uri();?>/img/banner/Adv-Kids.jpg" class="d-block w-100" alt="Ads-Kids">
    		</div>
			<div class="col-sm ads-section">
			<img src="<?php echo get_template_directory_uri();?>/img/banner/Ads-Women.jpg" class="d-block w-100" alt="Ads-Women">
			</div>
  		</div>

		<section class="container section-one">	
			<div class="section-text pt-5 d-flex align-items-center">
				<img src="<?php echo get_template_directory_uri();?>/img/tiny/bar-color.png" alt="Bar Color">
				<span class="section-inner-text">WHAT'S NEW?</span>
			</div>

			<div class="pt-5 pb-4">				
				<?php echo do_shortcode( '[products popularity columns=4 limit=4 paginate=true]' ); ?>
			</div>	
		</section>
		
		<section class="container section-two">	
			<div class="section-text pt-5 d-flex align-items-center">
				<img src="<?php echo get_template_directory_uri();?>/img/tiny/bar-color.png" alt="Bar Color">
				<span class="section-inner-text">BEST SELLERS</span>
			</div>
			<div class="row">
				<div class="col-12 col-lg-9 pt-5 pb-4">				
					<?php echo do_shortcode( '[products popularity columns=3 limit=3 paginate=true]' ); ?>
				</div>
				<div class="col-12 col-lg-3 pt-5">				
					<img src="<?php echo get_template_directory_uri();?>/img/banner/Deal-men.jpg" alt="Deal men">
				</div>		
			</div>
			<div class="row">
			<div class="col-12 col-lg-3 pt-5 pb-4">				
					<img src="<?php echo get_template_directory_uri();?>/img/banner/Deal-women.jpg" alt="Deal women">
				</div>
				<div class="col-12 col-lg-9 pt-5 pb-4">				
					<?php echo do_shortcode( '[products popularity columns=3 limit=3 paginate=true]' ); ?>
				</div>		
			</div>
		</section>

		<section class="container section-three pb-5">	
			<div class="section-text pt-5 pb-5 d-flex align-items-center">
				<img src="<?php echo get_template_directory_uri();?>/img/tiny/bar-color.png" alt="Bar Color">
				<span class="section-inner-text">SPECIAL PRODUCTS</span>
			</div>

			<div class="row d-flex pt-2 pb-3">
				<div class="col-12 col-lg-4">
					<div class="special-product vertical">
						<div class="sp-img"> <img width="100" height="100" src="http://dtc-shop.local/wp-content/uploads/2022/07/product-bag.jpg"/></div>
						<div class="sp-cart"></div>
						<div class="sp-text">Modular Modern <br>
							<span class="sp-price">$540.00 <strike class="sp-strike"> $600.00</strike></span>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="special-product vertical">
						<div class="sp-img"> <img width="100" height="100" src="http://dtc-shop.local/wp-content/uploads/2022/07/product-bag.jpg"/></div>
						<div class="sp-cart"></div>
						<div class="sp-text">Modular Modern <br>
							<span class="sp-price">$540.00 <strike class="sp-strike"> $600.00</strike></span>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="special-product vertical">
						<div class="sp-img"> <img width="100" height="100" src="http://dtc-shop.local/wp-content/uploads/2022/07/product-bag.jpg"/></div>
						<div class="sp-cart"></div>
						<div class="sp-text">Modular Modern <br>
							<span class="sp-price">$540.00 <strike class="sp-strike"> $600.00</strike></span>
						</div>
					</div>
				</div>	
			</div>
			<div class="row d-flex pt-2 pb-3">
				<div class="col-12 col-lg-4">
					<div class="special-product vertical">
						<div class="sp-img"> <img width="100" height="100" src="http://dtc-shop.local/wp-content/uploads/2022/07/product-bag.jpg"/></div>
						<div class="sp-cart"></div>
						<div class="sp-text">Modular Modern <br>
							<span class="sp-price">$540.00 <strike class="sp-strike"> $600.00</strike></span>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="special-product vertical">
						<div class="sp-img"> <img width="100" height="100" src="http://dtc-shop.local/wp-content/uploads/2022/07/product-bag.jpg"/></div>
						<div class="sp-cart"></div>
						<div class="sp-text">Modular Modern <br>
							<span class="sp-price">$540.00 <strike class="sp-strike"> $600.00</strike></span>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="special-product vertical">
						<div class="sp-img"> <img width="100" height="100" src="http://dtc-shop.local/wp-content/uploads/2022/07/product-bag.jpg"/></div>
						<div class="sp-cart"></div>
						<div class="sp-text">Modular Modern <br>
							<span class="sp-price">$540.00 <strike class="sp-strike"> $600.00</strike></span>
						</div>
					</div>
				</div>	
			</div>
		</section>

		



		<section class="section-five pt-5 pb-5">
				<div class="container">
					<div class="row d-flex text-center align-items-center ">
						<div class="col-sm d-flex align-items-center justify-content-center trust-section-one pb-3">
							<img src="<?php echo get_template_directory_uri();?>/img/tiny/icn-ree-shipping.png"  alt="Free Shipping">
							<div class="trust-section-text"><b>FREE SHIPPING & RETURN</b><br>Free Shipping on all orders over.</div>
						</div>
						<div class="col-sm d-flex align-items-center justify-content-center trust-section-two pb-3">
							<img src="<?php echo get_template_directory_uri();?>/img/tiny/icon-money-back.png"  alt="Money Back GUARANTEE">
							<div class="trust-section-text"><b>Money BACK GUARANTEE</b><br>100% money back guarantee</div>
						</div>
						<div class="col-sm d-flex align-items-center justify-content-center trust-section-three pb-3">
							<img src="<?php echo get_template_directory_uri();?>/img/tiny/icon-online-support.png"  alt="Online Support">
							<div class="trust-section-text"><b>ONLINE SUPPORT 24/7</b><br>Order online & pick it up today</div>
						</div>
					</div>
				</div>
		</section>



		
		<section class="container section-six">	
			<div class="section-text pt-5 d-flex align-items-center">
				<img src="<?php echo get_template_directory_uri();?>/img/tiny/bar-color.png" alt="Bar Color">
				<span class="section-inner-text">Latest Blog</span>
			</div>

			<div class="row pt-5 pb-4 section-last">				
				<div class="col-sm ">
					<figure class="figure-one ">
						<div class="fall-item fall-effect">
						<img src="<?php echo get_template_directory_uri();?>/img/blog/Blog-shoptica.jpg" class="d-block w-100" alt="Blog-shoptica.jpg">
							<div class="mask">
								<a href="#" class="btn btn-default">Read More</a>
							</div>
						</div>
						<figcaption class="figure-caption-one pt-2">
							<time datetime="08-03-2016" >08 March 2016</time>
							<div class="figure-caption-text pt-2">Ultimate Responsive Theme for Magento 2</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-sm">
					<figure class="figure-one ">
						<div class="fall-item fall-effect">
							<img src="<?php echo get_template_directory_uri();?>/img/blog/Blog-AdBeaut.jpg" class="d-block w-100" alt="Blog-AdBeaut.jpg">
							<div class="mask">
								<a href="#" class="btn btn-default">Read More</a>
							</div>
						</div>
						<figcaption class="figure-caption-one pt-2">
							<time datetime="15-03-2016" >15 March 2016</time>
							<div class="figure-caption-text pt-2">Ad-Beaut Theme For Magento2</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-sm">
					<figure class="figure-one ">
						<div class="fall-item fall-effect">
							<img src="<?php echo get_template_directory_uri();?>/img/blog/Blog-kosmic.jpg" class="d-block w-100" alt="Blog-kosmic.jpg">
							<div class="mask">
								<a href="#" class="btn btn-default">Read More</a>
							</div>
						</div>
						<figcaption class="figure-caption-one pt-2">
							<time datetime="26-03-2016" >26 March 2016</time>
							<div class="figure-caption-text pt-2">Kosmic Multipurpose Responsive Theme For Magento2</div>
						</figcaption>
					</figure>
				</div>
  			</div>	
		</section>


	</main><!-- #main -->

<?php

get_footer();
