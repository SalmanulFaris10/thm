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
            <?php if($variable=get_sub_field('second_sec_title')){?>
                <h2><?php echo $variable?></h2>
            <?php }?>
            <div class="outer">
                <a href="https://thm.hereisthedemo.com/work-detail/" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/abbvie.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Abbvie</h3>
                            <p>The above was carried out in a live hospital environment.</p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/anytime-fitness.png" alt="">
                        </div>
                        <div class="content">
                            <h3>anytime fitness</h3>
                            <p>The above was carried out in a live hospital environment.</p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/energia.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Exchange</h3>
                            <p>The above was carried out in a live hospital environment.</p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/georges-dock-pgim.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Stauntons pgim</h3>
                            <p>The above was carried out in a live hospital environment.</p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/google-bolands-mills.png" alt="">
                        </div>
                        <div class="content">
                            <h3>google bolands mills</h3>
                            <p>The above was carried out in a live hospital environment.</p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/aib(adeladee-rid).png" alt="">
                        </div>
                        <div class="content">
                            <h3>aib(Adelaide Road)</h3>
                            <p>The above was carried out in a live hospital environment.</p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Click to know more">
                <div class="work-box">
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/linkedin-wilton-place.png" alt="">
                    </div>
                    <div class="content">
                        <h3>LinkedIn Wilton Place</h3>
                        <p>The above was carried out in a live hospital environment.</p>
                    </div>
                </div>
                </a>
                <a href="#" title="Click to know more">
                <div class="work-box">
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/maynooth-uni-library.png" alt="">
                    </div>
                    <div class="content">
                        <h3>maynooth uni library</h3>
                        <p>The above was carried out in a live hospital environment.</p>
                    </div>
                </div>
                </a>
                <a href="#" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/riot-games.png" alt="">
                        </div>
                        <div class="content">
                            <h3>riot games</h3>
                            <p>The above was carried out in a live hospital environment.</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>
</div>


<?php get_footer(); ?>