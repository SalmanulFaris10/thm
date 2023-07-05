<?php
    /*
    Template Name: Our work Page
    */
    get_header();
    add_action('wp_footer','page_scripts',25);
    function page_scripts(){?>
        <script>
            $(document).ready(function () {
            
            });
        </script>
	<?php
    }
?>

<div class="our-work-page">
    <div class="container">

    <?php if(have_rows('first_sec')){?>
        <section class="first-sec">
            <div class="boxes">
                <?php while(have_rows('first_sec')){the_row()?>
                    <div class="box">
                        <div class="content">
                            <?php if($variable=get_sub_field('icon')){?>
                                <div class="icon">
                                    <img src="<?php echo $variable?>" alt="">
                                </div>
                            <?php }?>
                            <?php if($variable=get_sub_field('title')){?>
                                <h3><?php echo $variable?></h3>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </section>
    <?php }?>

        
        <section class="works">
            <?php if($variable=get_field('second_sec_title')){?>
                <h2><?php echo $variable?></h2>
            <?php }?>
            <?php 
                    $args = array(               
                        'post_type' => 'our-works',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                    );
                    $news_post = new WP_Query( $args );
                ?>
            <?php if($news_post -> have_posts()){?>
                <div class="outer">
                    <?php while($news_post -> have_posts()){$news_post ->the_post();?>
                        <a href="<?php echo get_the_permalink()?>" title="Click to know more">
                            <div class="work-box">
                                <?php if (has_post_thumbnail()) {                                      
                                    $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    //$params = array('width' => 165);
                                    //$img = bfi_thumb($img_url[0], $params);?>
                                    <div class="img">
                                        <img src="<?php echo $img_url[0]?>" alt="image">
                                    </div>
                                <?php }?>
                                <!-- <div class="img">
                                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/our-works/abbvie.png" alt="">
                                </div> -->
                                <div class="content">
                                    <h3><?php the_title()?></h3>
                                    <p><?php echo get_the_excerpt()?></p>
                                </div>
                            </div>
                        </a>
                    <?php }?>
                </div>
            <?php }?>
        </section>
    </div>
</div>


<?php get_footer(); ?>