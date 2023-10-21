<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
wp_nav_menu( array(
    'theme_location'=> 'header menu',
    'fallback_cb'=>false,
) )

?>
<hr>
<div class="post">

<?php 
while ( have_posts() ) : the_post();

?>

<h1><?php the_title(); ?> </h1>
<?php the_post_thumbnail(); ?>
<p><?php the_content(); ?> </p>

<?php endwhile; ?>
</div>
<?php
wp_nav_menu( array(
    'theme_location'=> 'footer menu',
    'fallback_cb'=>false,
   
) )

?>



<?php wp_footer(); ?>
</body>
</html>
