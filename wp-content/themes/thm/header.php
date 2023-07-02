<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="theme-color" content="#2E3192"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/styles.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if(get_field('fav_icon','option')):?>
		<link rel="shortcut icon" href="<?php echo get_field('fav_icon','option'); ?>" />
	<?php else:?>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php endif; 
	wp_head(); ?>
	
	
</head>
<body <?php body_class(); ?>>
<?php if((is_front_page() || is_home())) { ?>
<div class="preloader">
	<span class="loaderLogo">
		<?php if( get_field('logo', 'option') ){ ?>
			<img src="<?php echo get_field('logo', 'option'); ?>" alt="<?php bloginfo('title'); ?>" />
		<?php }
		else { ?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>" />
		<?php } ?>
	</span>
</div>
<?php } ?>

<header class="header">
	<div class="container">
		<div class="outer">
			<div class="logo">
				<?php the_custom_logo()?>
			</div>
			<div class="right">
				<div class="header-menu">
					<?php echo wp_nav_menu( array('theme_location'=>'header_menu') ); ?>
				</div>
				<div class="search">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search.png" alt="search">
				</div>
			</div>
		</div>		
	</div>
	<?php //echo get_search_form()?>
</header>
