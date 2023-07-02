<?php

    get_header();

    wp_enqueue_script('slick');

    wp_enqueue_script('timeline');

    add_action('wp_footer','home_scripts',25); 

    $post_ID=get_the_ID();
?>

<?php function home_scripts(){ ?>

<?php }?>
<style>p{
    margin-bottom:10px;
}</style>
<div class="innerBanner">
    <div class="container">
        <div class="innerbox">
            <h2><?php the_title()?></h2>
        </div>
    </div>
</div>

    <div style="margin-bottom:50px" class="container">
        <?php echo get_the_content()?>
    </div>

<?php get_footer(); ?>