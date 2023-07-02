<?php
    /*
    Template Name: Expertise Page
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
<div class="inner_banner" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/about/thermo-heat-about.png') no-repeat center">
    <div class="content">
        <div class="top">
            <h1>Areas of Expertise</h1>
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
        <li><a href="#">Areas of Expertise</a> </li>        
    </ul>
</div>

</div>
<div class="expertise-page">
    <section class="expertise-areas">
        <div class="container">
            <div class="outer">
                <div class="content">
                    <h2>Expertise Areas</h2>
                    <div class="expertise-area-list">
                        <ul>
                            <li>Boilers</li>
                            <li>Burners</li>
                            <li>Pumps</li>
                            <li>Pressurisation units</li>
                            <li>Expansion vessels</li>
                            <li>Heating pipework</li>
                            <li>Sanitary ware </li>
                            <li>Soils and wastes</li>

                            <li>Hot & cold water services</li>
                            <li>Split systems</li>
                            <li>Booster pumps</li>
                            <li>Hot water cylinders</li>
                            <li>Air handling units</li>
                            <li>VRV and VRF systems</li>
                            <li>Chillers</li>
                            <li>Fan coil units</li>
                        </ul>
                    </div>
                </div>
                <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/expertise1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="images">
        <div class="container">
            <div class="outer">
                <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/expertise2.png" alt="">
                </div>
                <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/expertise3.png" alt="">
                </div>
                <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/expertise4.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="sectors">
        <div class="container">
            <h2>Our expertise spans a wide range of sectors including:</h2>
            <div class="outer">
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Commercial.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Healthcare.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Education.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Leisure.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Hospitality.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Industrial.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Public.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Retail.svg" alt="">
                        </div>
                        <h3>Commercial</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>