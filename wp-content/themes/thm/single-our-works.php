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
                <?php if(have_rows('slider')){?>
                    <div class="img-slider">
                        <?php while(have_rows('slider')){the_row()?>
                            <?php if($variable=get_sub_field('image')){?>
                                <div class="img">
                                    <img src="<?php echo $variable?>" alt="">
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>
                <?php }?>
                <div class="small-box"></div>               
                <div class="content">                   
                    <h2><?php the_title()?></h2>
                    <?php if(have_rows('work_detail')){while(have_rows('work_detail')){the_row();if($variable=get_sub_field('add_points')){?>
                        <div class="points">
                            <p><?php echo $variable?></p>
                        </div>
                    <?php }}}?>
                </div>
            </div>
        </section>

        <?php if(have_rows('bottom_box_sec')){while(have_rows('bottom_box_sec')){the_row()?>
            <section class="challenges-and-solution">
                <?php if($variable=get_sub_field('title')){?>
                    <h3><?php echo $variable?></h3>
                <?php }?>
                <?php if($variable=get_sub_field('description')){?>
                    <?php echo $variable?>
                <?php }?>
            </section>
        <?php }}?>
    </div>
</div>


<?php get_footer(); ?>