<?php get_header();
if ( get_field( 'default_banner', 'option' ) ) {
	$style = 'style="background-image:url('.get_field( 'default_banner', 'option' ).');"';
} else {
	$style = 'style="background-image:url('.get_template_directory_uri().'/images/banner01.jpg );"'; 
}

$ban_title ='404 Page Not Found'; ?>


<div class="innerBanner">
    <div class="container">
        <div class="innerbox">
            <h2 data-aos="fade-right" data-aos-duration="1000"><?php echo $ban_title; ?></h2>
        </div>
    </div>
</div><!-- innerBanner -->


<section class="error-page clearfix">
	<div class="container">
		<h2 class="gen-page-title">Oops!</h2>
		<div class="error_img">
			<img src="<?php bloginfo('template_directory');?>/images/404.png" alt="404"/>
		</div>
	</div>
</section>
<?php get_footer(); ?>