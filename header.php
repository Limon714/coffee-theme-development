<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">


			 <?php if(has_custom_logo( )){
				the_custom_logo();
			 } 
			 else{
				echo "<h1>".get_bloginfo( 'name' ). "</h1>";
			 }
			 
			 ?>
				
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 


					<?php 
					
					$coffee_menu = wp_nav_menu(array (
						
						'theme_location' => 'header menu',
						'menu_class' => 'navig',
						'echo' => false
					
						)
					
				);

				    $coffee_menu = str_replace('aria-current="page"','class="active"', $coffee_menu);
					echo $coffee_menu;
					
					
					?>
			</div>

			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h1>Suspendisse potenti</h1>
				</div>
			</div>
		</div>
	</div>