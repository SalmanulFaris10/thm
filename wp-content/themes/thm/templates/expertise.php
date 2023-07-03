<?php
    /*
    Template Name: Expertise Page
    */
    get_header();
    add_action('wp_footer','page_scripts',25);
    function page_scripts(){?>
        <script>
            $(document).ready(function () {
                var ExpertiseAreaList = document.getElementsByClassName("expertise-area-list")[0].getElementsByTagName("ul")[0];
                totalChildCount = ExpertiseAreaList.childElementCount;
                rows=totalChildCount/2;
                ExpertiseAreaList.style.gridTemplateRows="repeat("+rows+", 1fr)";


                var sectors = document.getElementsByClassName("sectors")[0];
                sectorsBox = sectors.getElementsByClassName("box");
                var flag=1,i=0;
                for(i=i;i<=sectorsBox.length;i=i){
                    for(j=1;j<=4;j++,i++){
                        if(flag%2==1){
                            if(j%2==0){
                                sectorsBox[i].style.background = "#fff";
                                sectorsBox[i].getElementsByTagName("h3")[0].style.color = "#000";
                            }else{
                                sectorsBox[i].style.background = "#2E3192";
                                sectorsBox[i].getElementsByTagName("h3")[0].style.color = "#fff";
                            }
                        }else{
                            if(j%2==0){
                                sectorsBox[i].style.background="#2E3192";
                                sectorsBox[i].getElementsByTagName("h3")[0].style.color = "#fff";
                            }else{
                                sectorsBox[i].style.background="#fff";
                                sectorsBox[i].getElementsByTagName("h3")[0].style.color = "#000";
                            }
                        }
                    }
                    flag++;
                }
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
            <h2>Our expertise spans a wide range of<br /> sectors including:</h2>
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
                        <h3>Healthcare</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Education.svg" alt="">
                        </div>
                        <h3>Education</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Leisure.svg" alt="">
                        </div>
                        <h3>Leisure</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Hospitality.svg" alt="">
                        </div>
                        <h3>Hospitality</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Industrial.svg" alt="">
                        </div>
                        <h3>Industrial</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Public.svg" alt="">
                        </div>
                        <h3>Public</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/expertise/Retail.svg" alt="">
                        </div>
                        <h3>Retail</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>