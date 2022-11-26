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


			 <img src="<?php echo get_theme_mod('image_setting_url'); ?>">
				
			</div>
		</div>
	</div>
	<?php if ( true == get_theme_mod( 'coffee_switch_setting', true ) ) : ?>
	

		<h1 style="text-align: center;">
			<?php echo get_theme_mod('coffee_text_setting'); ?>
		</h1>
		<?php endif; ?>
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
                    <?php if(get_theme_mod('fb_icon')): ?>
					<li><a href="<?php echo esc_url(get_theme_mod('fb_icon')); ?>"><span class="fb"> </span></a></li>
                     <?php endif; ?>
                      
					 <?php if(get_theme_mod('tw_icon')): ?>
					<li><a href="<?php echo esc_url(get_theme_mod('tw_icon')); ?>"><span class="twit"> </span></a></li>
                    <?php endif; ?>  

                    <?php if(get_theme_mod('pin_icon')): ?>
					<li><a href="<?php echo esc_url(get_theme_mod('pin_icon')); ?>"><span class="pin"> </span></a></li>
					<?php endif; ?>

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
			<div class="banner-top" 
			style="background-image:url(<?php header_image(); ?>);">
				<div class="banner-text" style="background-color:<?php echo get_theme_mod('header_text_bg'); ?> ;">
				<h1 style="color:<?php echo get_theme_mod('header_text_color'); ?> ;"><?php echo esc_html(get_theme_mod('header_text'));?></h1>
				</div>
			</div>
		</div>
	</div>