<?php
    get_header();
    add_action('wp_footer','blog_scripts',25);
    $page_ID = get_the_ID();
    function blog_scripts(){?>
        <script>
            
            $(document).ready(function(){
                
               
                
            });  
        </script>
	<?php
    }
?>


<div class="blog-details-page">
    <?php if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php }
    } ?>
</div><!-- blog-page -->




<?php get_footer(); ?>