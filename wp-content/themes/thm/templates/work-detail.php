<?php
    /*
    Template Name: work detail Page
    */
    get_header();
    add_action('wp_footer','page_scripts',25);
    function page_scripts(){?>
        <script>
            $(document).ready(function () {
                $('.img-slider').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    speed:1000,
                    autoplay: true,
                    autoplaySpeed: 2000,
                }); 
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
<div class="work-detail-page">
    <div class="container">
        <section class="slider-sec">
            <div class="outer">
                <div class="img-slider">
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/abbive-detail.png" alt="">
                    </div>
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/abbive-detail.png" alt="">
                    </div>
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/abbive-detail.png" alt="">
                    </div>
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/abbive-detail.png" alt="">
                    </div>
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-works/abbive-detail.png" alt="">
                    </div>
                </div>
                <div class="small-box"></div>
                <div class="content">
                    <h2>Abbvie</h2>
                    <div class="points">
                        <p>Decommission and removal of existing heating pumps in a live hospital environment</p>
                    </div>
                    <div class="points">
                        <p>Supply and installation of new heating pumps with LPHW pipework and electrical variations</p>
                    </div> 
                    <div class="points">
                        <p>Commission of pumps and associated flow rates.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="challenges-and-solution">
            <h3>Challenges & Solutions</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </section>
    </div>
</div>


<?php get_footer(); ?>