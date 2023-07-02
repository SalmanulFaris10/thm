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
<div class="our-work-page">

</div>


<?php get_footer(); ?>