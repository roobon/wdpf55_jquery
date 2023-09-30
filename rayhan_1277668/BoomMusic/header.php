<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes()   ?> > <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset') ?>"> 
	<title> <?php bloginfo('title') ?></title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" 
	href="<?php  echo get_template_directory_uri()?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo  get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri()?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo  get_template_directory_uri()?>/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php  echo get_template_directory_uri()?>./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php  echo get_template_directory_uri()?>/js/jquery.min.js"></script>
	<script src="<?php  echo get_template_directory_uri()?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href=" <?php echo home_url(); ?>"><img src="<?php  echo get_template_directory_uri()?>./images/logo.png"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<!-- <ul>
				<li><a href="index.html">Home</a></li>
				<li class="current"><a href="blog.html">Blog</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="single.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul> -->
			
			<?php  
		wp_nav_menu( array(
			'theme_location'	=> "primary_menu",
			) );
			
			?>
		</div>

		<div class="minimenu"><div>MENU</div>
		<?php  
		wp_nav_menu( array(
			'theme_location'	=> "primary_menu",
			) );
			
			?>
		</div>		
	</div>
</nav>

</head>
<body>