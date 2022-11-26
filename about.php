<?php
get_header();
?>
<!--team-starts-->
<div class="team">
	<div class="container">
		<div class="team-top heading">
			<h3>OUR TEAM</h3>
		</div>
		<?php $settings = get_theme_mod( 'my_repeater_setting' ); ?>
		<div class="team-bottom">

			
				<?php foreach ($settings as $setting) : ?>
					
				
			
			<div class="col-md-3 team-left">
				<img src="<?php echo wp_get_attachment_url($setting['member-image']); ?>">
				<h4><?php echo $setting['member-name']; ?></h4>
				<p><?php echo $setting['member-description']; ?></p>
			</div>
			<?php endforeach; ?>
			<div class="clearfix"></div>
         
		</div>
	</div>
</div>
<!--team-end-->

<!--footer-starts-->
<?php
get_footer();
?>