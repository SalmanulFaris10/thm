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
    <section class="banner">
        <div class="slider-item" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/home/thermo-heat-mechanic-home-banner.png') no-repeat center">
            <div class="outer">
                <div class="content">
                    <h2>
                        <span class="animation-bar"></span>                  
                        <span>We Provide Commercial</span>
                        <span class="animation-bar"></span> 
                        <span> Maintainance & Installation </span>
                        <span class="animation-bar"></span> 
                        <span>Solutions</span>
                    </h2>
                    <p>We provide our clients with high quality services and unrivalled expertise</p>
                </div>
                <div class="buttons">
                    <a data-front="See our works" data-back="See our works" href="https://thm.hereisthedemo.com/our-work/"></a>
                    <a href="https://thm.hereisthedemo.com/contact-us/">get in touch <span></span></a>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/home/thermo-heat-mechanic-home-banner.png') no-repeat center">
            <div class="outer">
                <div class="content">
                    <h2>
                        <span class="animation-bar"></span>                  
                        <span>We Provide Commercial</span>
                        <span class="animation-bar"></span> 
                        <span> Maintainance & Installation </span>
                        <span class="animation-bar"></span> 
                        <span>Solutions</span>
                    </h2>
                    <p>We provide our clients with high quality services and unrivalled expertise</p>
                </div>
                <div class="buttons">
                    <a data-front="See our works" data-back="See our works"  href="https://thm.hereisthedemo.com/our-work/"></a>
                    <a href="https://thm.hereisthedemo.com/contact-us/">get in touch<span></span></a>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/home/thermo-heat-mechanic-home-banner.png') no-repeat center">
            <div class="outer">
                <div class="content">
                    <h2>
                        <span class="animation-bar"></span>                  
                        <span>We Provide Commercial</span>
                        <span class="animation-bar"></span> 
                        <span> Maintainance & Installation </span>
                        <span class="animation-bar"></span> 
                        <span>Solutions</span>
                    </h2>
                    <p>We provide our clients with high quality services and unrivalled expertise</p>
                </div>
                <div class="buttons">
                    <a data-front="See our works" data-back="See our works"  href="https://thm.hereisthedemo.com/our-work/"></a>
                    <a href="https://thm.hereisthedemo.com/contact-us/">get in touch<span></span></a>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/home/thermo-heat-mechanic-home-banner.png') no-repeat center">
            <div class="outer">
                <div class="content">
                    <h2>
                        <span class="animation-bar"></span>                  
                        <span>We Provide Commercial</span>
                        <span class="animation-bar"></span> 
                        <span> Maintainance & Installation </span>
                        <span class="animation-bar"></span>
                        <span>Solutions</span>
                    </h2>
                    <p>We provide our clients with high quality services and unrivalled expertise</p>
                </div>
                <div class="buttons">
                    <a data-front="See our works" data-back="See our works"  href="https://thm.hereisthedemo.com/our-work/"></a>
                    <a href="https://thm.hereisthedemo.com/contact-us/">get in touch<span></span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="about animation">
        <div class="container">
            <div class="main-outer">
                <div class="content-box">
                    <div class="outer">
                        <h2>About <span data-text="ThermoHeat">ThermoHeat</span> Mechanical</h2>

                        <div class="right">
                            <div class="description">
                                <p>ThermoHeat Mechanical is a Dublin based mechanical company that offers
                                    a complete range of heating, plumbing, ventilation and air-conditioning solutions to commercial clients.
                                </p>
                                <p>Over the last 5 years our reputation for high quality mechanical installations has grown our 
                                    business and client portfolio. At ThermoHeat, we pride ourselves on our hard-working, 
                                    honest approach to each project we undertake.
                                </p>
                            </div>
                            <div class="button">
                                <a href="https://thm.hereisthedemo.com/about-us/">Know more
                                    <div class="plus">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/plus.png" alt="">
                                    </div>  
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/about-thermo-heat.jpg" alt="About Thermo heat">
                </div>
            </div>          
        </div>
    </section>

    <section class="get-in-touch" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/home/get-in-touch.jpg) no-repeat center 90%">
        <div class="content">
            <p>Our reputation has been built on our commitment to deliver our services to the highest 
                possible standards.</p>
            <div class="button">
                <a href="https://thm.hereisthedemo.com/contact-us/">Get in touch</a>
            </div>
        </div>
    </section>

    <section class="what-we-do animation">
        <div class="container">
            <h2><span data-text="What">What</span> we do</h2>
            <div class="items">
                <div class="item">
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/what-we-do-commercial-solutions.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Commercial Solutions</h3>
                        <div class="description">
                            <p>At ThermoHeat, to ensure safety, reliability and efficiency we recommend gas and oil
                                boilers are serviced yearly. For commercial boilers in excess of 70kw our recommendation is that servicing is 
                                carried out twice yearly.
                                We offer maintenance, fault assessment, repair and installation on all leading commercial boiler and burner brands.
                            </p>
                        </div>
                        <div class="button">
                            <a href="https://thm.hereisthedemo.com/areas-of-expertise/">Know more
                                <div class="plus">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/plus.png" alt="">
                                </div>  
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/domestic-solutions.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Commercial Solutions</h3>
                        <div class="description">
                            <p>At ThermoHeat, to ensure safety, reliability and efficiency we recommend gas and oil
                                boilers are serviced yearly. For commercial boilers in excess of 70kw our recommendation is that servicing is 
                                carried out twice yearly.
                                We offer maintenance, fault assessment, repair and installation on all leading commercial boiler and burner brands.
                            </p>
                        </div>
                        <div class="button">
                            <a href="https://thm.hereisthedemo.com/areas-of-expertise/">Know more
                                <div class="plus">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/plus.png" alt="">
                                </div>  
                            </a>
                        </div>
                    </div>
                </div>
                <div class="circle">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/circle.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="expertise">
        <div class="container">
            <div class="box">
                <h3>Our expertise spans a wide range of sectors including:</h3>
                <div class="items">
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Commercial.svg" alt="">
                            </div>
                            <h4>Commercial</h4>
                        </a>
                    <!-- </div> -->
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Healthcare.svg" alt="">
                            </div>
                            <h4>Healthcare</h4>
                        </a>
                    <!-- </div> -->
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Education.svg" alt="">
                            </div>
                            <h4>Education</h4>
                        </a>
                    <!-- </div> -->
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Leisure.svg" alt="">
                            </div>
                            <h4>Leisure</h4>
                        </a>
                    <!-- </div> -->
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Hospitality.svg" alt="">
                            </div>
                            <h4>Hospitality</h4>
                        </a>
                    <!-- </div> -->
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Industrial.svg" alt="">
                            </div>
                            <h4>Industrial</h4>
                        </a>
                    <!-- </div> -->
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Public.svg" alt="">
                            </div>
                            <h4>Public</h4>
                        </a>
                    <!-- </div> -->
                    <!-- <div class="item"> -->
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/Retail.svg" alt="">
                            </div>
                            <h4>Retail</h4>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <section class="our-projects animation">        
        <div class="container">
            <div class="content">
                <h2><span data-text="Our">Our </span> Projects</h2>
                <p>We provide our clients with unrivaled expertise, high quality service and outstanding safety.
                    Our level of knowledge and experience in each area gives us a distinct advantage over our competitors.</p>
            </div>
        </div>
        <div class="outer">
            <div class="background-bar"></div>
            <div class="container">
                <div class="projects">                    
                    <a href="#">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/mater-hospital.png" alt="">
                        </div>
                        <h3>Mater Hospital</h3>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/peamount-hospital.png" alt="">
                        </div>
                        <h3>Peamount Hospital</h3>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/dublin-castle.png" alt="">
                        </div>
                        <h3>Dublin Castle</h3>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/intreo-office-cork.png" alt="">
                        </div>
                        <h3>Intreo Office Cork</h3>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/peamount-hospital.png" alt="">
                        </div>
                        <h3>Peamount Hospital</h3>
                    </a>
                </div>
            </div>
        </div>      
    </section>


    <section class="ou-approach">
        <div class="container">
            <div class="outer">
                <div class="left">
                    <div class="content">
                        <h2><span data-text="Our">Our</span> Approach</h2>
                        <div class="description">
                            <p>ThermoHeat Mechanical is a Dublin based mechanical company
                                 that offers a complete range of heating, plumbing, ventilation and air-conditioning solutions to commercial
                                  clients.</p>
                            <p>
                            Our skilled team of engineers are approved Register Gas Installers of Ireland (RGII) and OFTEC registered all 
                            of whom have received extensive training in both the UK and Ireland. We understand
                             that reliable and expert gas and plumbing maintenance is essential for a smooth running of your business and 
                             household.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/thermo-heat-our-approach.png" alt="">
                    </div>
                    <div class="icon-box">
                        <div class="icon">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/energy.png" alt="">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/factory.png" alt="">
                            </div>
                        </div>
                        <div class="icon">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/smart-cpu.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>