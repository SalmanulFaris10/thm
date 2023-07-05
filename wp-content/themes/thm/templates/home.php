<?php
    /*
    Template Name: Home Page
    */
    get_header();
    add_action('wp_footer','home_scripts',25);
    function home_scripts(){?>
        <script>
            $(document).ready(function () {
                $('.banner').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    speed:1000,
                    autoplay: false,
                    autoplaySpeed: 6000,
                    
                });
                $('.projects').slick({
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    speed:1000,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    responsive: [
                        {
                        breakpoint: 1080,
                        settings: {
                            slidesToShow: 3,
                        }
                        },
                        {
                        breakpoint: 890,
                        settings: {
                            slidesToShow: 2,
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                        }
                    ]
                });
            });
        </script>
	<?php
    }
?>

<div class="home-page">
    <!-- banner -->
    <?php if(have_rows('banner')){?>
        <section class="banner">
            <?php while(have_rows('banner')){the_row()?>
                <div class="slider-item" style="background:url('<?php if($variable=get_sub_field('banner_image')){?><?php echo $variable?><?php }?>">
                    <div class="outer">
                        <div class="content">
                        <?php if($variable=get_sub_field('title')){?>
                            <h2>
                                <!-- <span class="animation-bar"></span>                  
                                <span>We Provide Commercial</span>
                                <span class="animation-bar"></span> 
                                <span> Maintainance & Installation </span>
                                <span class="animation-bar"></span>
                                <span>Solutions</span> -->
                                <?php echo $variable?>
                            </h2>
                            <?php }?>
                            <?php if($variable=get_sub_field('description')){?>
                                <p><?php echo $variable?></p>
                            <?php }?>
                        </div>
                        <div class="buttons">
                            <a data-front="<?php if($variable=get_sub_field('first_button_text')){?><?php echo $variable?><?php }?>" data-back="<?php if($variable=get_sub_field('first_button_text')){?><?php echo $variable?><?php }?>"  href="<?php if($variable=get_sub_field('first_button_text_link')){?><?php echo $variable?><?php }?>"></a>
                            <a href="<?php if($variable=get_sub_field('second_button_link')){?><?php echo $variable?><?php }?>">
                                <?php if($variable=get_sub_field('second_button_text')){?><?php echo $variable?><span></span><?php }?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </section>
    <?php }?>


    <?php if(have_rows('about_sec')){while(have_rows('about_sec')){the_row()?>
        <section class="about animation">
            <div class="container">
                <div class="main-outer">
                    <div class="content-box">
                        <div class="outer">
                            <?php if($variable=get_sub_field('title')){?>
                                <h2><?php echo $variable?></h2>
                            <?php }?>
                            <div class="right">
                                <?php if($variable=get_sub_field('description')){?>
                                    <div class="description">
                                        <?php echo $variable?>
                                    </div>
                                <?php }?>
                                <div class="button">
                                    <a href="<?php if($variable=get_sub_field('button_link')){?><?php echo $variable?><?php }?>">
                                        <?php if($variable=get_sub_field('button_text')){?><?php echo $variable?><?php }?>
                                        <div class="plus">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/plus.png" alt="">
                                        </div>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($variable=get_sub_field('image')){?>
                        <div class="image">
                            <img src="<?php echo $variable?>" alt="About Thermo heat">
                        </div>
                    <?php }?>
                </div>          
            </div>
        </section>
    <?php }}?>

    <?php if(have_rows('get_in_touch')){while(have_rows('get_in_touch')){the_row()?>
        <section class="get-in-touch" style="background:<?php if($variable=get_sub_field('background_image')){?>url(<?php echo $variable?><?php }?>">
            <div class="content">
                <?php if($variable=get_sub_field('description')){?>
                    <p><?php echo $variable?></p>
                <?php }?>
                <div class="button">
                    <a href="<?php if($variable=get_sub_field('button_link')){?><?php echo $variable?><?php }?>">
                        <?php if($variable=get_sub_field('button_text')){?><?php echo $variable?><?php }?>
                    </a>
                </div>
            </div>
        </section>
    <?php }}?>

    <?php if(have_rows('what_we_do')){while(have_rows('what_we_do')){the_row()?>
        <section class="what-we-do animation">
            <div class="container">
                <?php if($variable=get_sub_field('title')){?>
                    <h2><?php echo $variable?></h2>
                <?php }?>
                <?php if(have_rows('add_sec')){?>
                <div class="items">
                    <?php while(have_rows('add_sec')){the_row()?>
                        <div class="item">
                            <?php if($variable=get_sub_field('image')){?>
                                <div class="img">
                                    <img src="<?php echo $variable?>" alt="">
                                </div>
                            <?php }?>
                            <div class="content">
                                <?php if($variable=get_sub_field('title')){?>
                                    <h3><?php echo $variable?></h3>
                                <?php }?>
                                <div class="description">
                                    <?php if($variable=get_sub_field('description')){?>
                                        <p><?php echo $variable?></p>
                                    <?php }?>
                                </div>
                                <div class="button">
                                    <a href="<?php if($variable=get_sub_field('button_link')){?><?php echo $variable?><?php }?>">
                                        <?php if($variable=get_sub_field('button_text')){?><?php echo $variable?><?php }?>
                                        <div class="plus">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/plus.png" alt="">
                                        </div>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="circle">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/circle.png" alt="">
                    </div>
                </div>
                <?php }?>
            </div>
        </section>
    <?php }}?>


    <?php if(have_rows('expertise')){while(have_rows('expertise')){the_row()?>
        <section class="expertise">
            <div class="container">
                <div class="box">
                    <?php if($variable=get_sub_field('title')){?>
                        <h3><?php echo $variable?></h3>
                    <?php }?>
                    <?php if(have_rows('add_expertise')){?>
                        <div class="items">
                            <?php while(have_rows('add_expertise')){the_row()?>
                                <a href="<?php if($variable=get_sub_field('title')){?>#<?php }?>">
                                    <?php if($variable=get_sub_field('icon')){?>
                                        <div class="img">
                                            <img src="<?php echo $variable?>" alt="">
                                        </div>
                                    <?php }?>
                                    <?php if($variable=get_sub_field('title')){?>
                                        <h4><?php echo $variable?></h4>
                                    <?php }?>
                                </a>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>
    <?php }}?>

    <?php if(have_rows('project_sec')){while(have_rows('project_sec')){the_row()?>
        <section class="our-projects animation">        
            <div class="container">
                <div class="content">
                    <?php if($variable=get_sub_field('title')){?>
                        <h2><?php echo $variable?></h2>
                    <?php }?>
                    <?php if($variable=get_sub_field('description')){?>
                        <p><?php echo $variable?></p>
                    <?php }?>
                </div>
            </div>
            <div class="outer">
                <div class="background-bar"></div>
                <div class="container">
                    <?php if(have_rows('projects')){?>
                        <div class="projects">
                            <?php while(have_rows('projects')){the_row()?>                    
                                <a href="<?php if($variable=get_sub_field('link')){?><?php echo $variable?><?php }?>">
                                    <?php if($variable=get_sub_field('image')){?>
                                        <div class="img">
                                            <img src="<?php echo $variable?>" alt="">
                                        </div>
                                    <?php }?>
                                    <?php if($variable=get_sub_field('title')){?>
                                        <h3><?php echo $variable?></h3>
                                    <?php }?>
                                </a>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>      
        </section>
    <?php }}?>



    <?php if(have_rows('approach')){while(have_rows('approach')){the_row()?>
        <section class="ou-approach animation">
            <div class="container">
                <div class="outer">
                    <div class="left">
                        <div class="content">
                            <?php if($variable=get_sub_field('title')){?>
                                <h2><?php echo $variable?></h2>
                            <?php }?>
                            <?php if($variable=get_sub_field('description')){?>
                                <div class="description">
                                    <?php echo $variable?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="right">
                        <?php if($variable=get_sub_field('image')){?>
                            <div class="img">
                                <img src="<?php echo $variable?>" alt="">
                            </div>
                        <?php }?>
                        <?php if(have_rows('icons')){?>
                            <div class="icon-box">
                                <?php while(have_rows('icons')){the_row()?>
                                    <?php if($variable=get_sub_field('icon')){?>
                                        <div class="icon">
                                            <div class="img">
                                                <img src="<?php echo $variable?>" alt="">
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    <?php }}?>
</div>

<?php get_footer(); ?>