<?php get_header();
add_action('wp_footer','scripts',25);
function scripts(){ ?>
    <script>
        $(document).ready(function(){
            blogfixHeight();
        });

        function blogfixHeight() {
            var cHeight = '';
            $('.search_post').css("height", "auto");
            $('.search_post').each(function () {
                cHeight = cHeight > $(this).height() ? cHeight : $(this).height();
            });
            $('.search_post').each(function () {
                $(this).height(cHeight);
            })
        }
    </script><?php
}
if ( get_field( 'default_banner', 'option' ) ) {
	$style = 'style="background-image:url('.get_field( 'default_banner', 'option' ).');"';
} else {
	$style = 'style="background-image:url('.get_template_directory_uri().'/images/banner01.jpg );"'; 
}

$ban_title ='Archive Page'; ?>
<section class="inner-banner" <?php echo $style; ?>>
    <div class="container">
        <div class="banner-text">
            <h2><?php echo $ban_title; ?></h2>
        </div>
    </div>
</section>
<section class="page-wrap clearfix">
	<div class="container">
		<div class="page-gen-inner">
			<?php is_tag(); ?>				
			<?php if (have_posts()) : ?>					
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>						
				<?php /* If this is a category archive */ if (is_category()) { ?>							
					<h2 class="gen-page-title search-title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>						
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>							
					<h2 class="gen-page-title search-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>						
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>							
					<h2 class="gen-page-title search-title">Archive for <?php the_time('F jS, Y'); ?></h2>						
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>							
					<h2 class="gen-page-title search-title">Archive for <?php the_time('F, Y'); ?></h2>						
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>							
					<h2 class="gen-page-title search-title">Archive for <?php the_time('Y'); ?></h2>						
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>							
					<h2 class="gen-page-title search-title">Author Archive</h1>						
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>							
					<h2 class="gen-page-title search-title">Blog Archives</h2>						
				<?php } ?>				
			<?php endif;?>
			<div class="search-sec clearfix">
				<?php if (have_posts()): 
					while (have_posts()) : the_post(); ?>
						<div class="search_post">
							<?php if( has_post_thumbnail() ) {
								$thumb = get_the_post_thumbnail_url( get_the_ID(), 'full');
							} else {
								$thumb = get_template_directory_uri().'/images/img-placeholder.jpg';
							}
							$thumb_params = array( 'width' => 460, 'height' => 460 );
							$thumb_crp = bfi_thumb( $thumb, $thumb_params );?>
							<div class="search-thumb">
								<img src="<?php echo $thumb_crp; ?>" alt="<?php the_title(); ?>" />
							</div>
							<div class="text-box">
								<h2 class="search-post-title">
									<a href="<?php the_permalink(); ?>"><?php echo substr( get_the_title(), 0, 20 ); ?><?php if( strlen(get_the_title()) > 20 ) { echo '...'; } ?></a>
								</h2>
								<div class="search_post_meta">
									<p>Posted By <span><?php the_author_meta('nickname'); ?></span> On <span><?php echo get_the_date('D, M j, Y', $post->ID); ?></span></p>
								</div>
								<div class="sear_cont <?php if ( has_post_thumbnail() ) { echo 'sear_cont_thum'; }?>">
									<?php echo wp_trim_words( get_the_excerpt(), 25, '...' ); ?>
								</div>
								<a class="sear_read" href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					<?php endwhile;?> 
					<div class="navigation row">
						<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
						<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
					</div>
				<?php else : ?>
						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>