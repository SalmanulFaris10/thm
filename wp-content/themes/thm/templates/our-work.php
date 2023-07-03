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
<div class="inner_banner" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/thermo-heat-our-work-banner.png') no-repeat center">
    <div class="content">
        <div class="top">
            <h1>Our Work</h1>
            <p>Our expertise spans a wide range of sectors</p>
        </div>
        <div class="bottom">
            <p>Certified Company ISO 9001-2008</p>
        </div>
    </div>
</div>
<div class="bread-crumbs">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Work</a> </li>        
        </ul>
    </div>
</div>
<div class="our-work-page">
    <div class="container">
        <section class="first-sec">
            <div class="boxes">
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/Diligent.svg" alt="">
                        </div>
                        <h3><span>Diligent</span>Professionals</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/Industry.svg" alt="">
                        </div>
                        <h3><span>Industry</span>Experts</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/Client.svg" alt="">
                        </div>
                        <h3><span>Client</span>Focused</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/Trustworthy.svg" alt="">
                        </div>
                        <h3><span>Trustworthy</span>Reliable</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="works">
            <h2>See our works</h2>
            <div class="outer">
                <a href="#" title="Click to know more">
                    <div class="work-box">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/abbive.png" alt="">
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
                            <h3>energia</h3>
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
                            <h3>georges dock pgim</h3>
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
                            <h3>aib(adeladee rid)</h3>
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
                        <h3>linkedin wilton place</h3>
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