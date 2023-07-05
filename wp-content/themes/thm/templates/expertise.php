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
<div class="expertise-page">
    <?php if(have_rows('expertise_areas_sec')){while(have_rows('expertise_areas_sec')){the_row()?>
        <section class="expertise-areas">
            <div class="container">
                <div class="outer">
                    <div class="content">
                        <?php if($variable=get_sub_field('title')){?>
                            <h2><?php echo $variable?></h2>
                        <?php }?>
                        <div class="expertise-area-list">
                            <?php if($variable=get_sub_field('area_list')){?>
                                <?php echo $variable?>
                            <?php }?>
                        </div>
                    </div>
                    <div class="img">
                        <?php if($variable=get_sub_field('image')){?>
                            <img src="<?php echo $variable?>" alt="">
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    <?php }}?>

    <?php if(have_rows('images_sec')){?>
        <section class="images">
            <div class="container">
                <div class="outer">
                    <?php while(have_rows('images_sec')){the_row();if($variable=get_sub_field('image')){?>
                        <div class="img">
                            <img src="<?php echo $variable?>" alt="">
                        </div>
                    <?php }}?>
                </div>
            </div>
        </section>
    <?php }?>

    <?php if(have_rows('sector_sec')){while(have_rows('sector_sec')){the_row()?>
        <section class="sectors">
            <div class="container">
                <?php if($variable=get_sub_field('title')){?>
                    <h2><?php echo $variable?></h2>
                <?php }?>
                <div class="outer">
                    <?php if(have_rows('sectors')){while(have_rows('sectors')){the_row()?>
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
                    <?php }}?>
                </div>
            </div>
        </section>
    <?php }}?>
</div>


<?php get_footer(); ?>