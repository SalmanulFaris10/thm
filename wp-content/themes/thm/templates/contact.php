<?php
    /*
    Template Name: contact Page
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

<div class="contact-page">
    <div class="container">
        <section class="contact-form">
            <div class="img">
                <?php if($variable=get_field('image')){?>
                    <img src="<?php echo $variable?>" alt="">
                <?php }?>
                
            </div>
            <div class="form">
                <?php if($variable=get_field('form_title')){?>
                    <h2><?php echo $variable?></h2>
                <?php }?>
                <form action="">
                    <div class="field-sets">
                        <div class="field">
                            <label for="fname">First name</label>
                            <input type="text" name="fname" id="fname">
                        </div>
                        <div class="field">
                            <label for="lname">Last name</label>
                            <input type="text" name="lname" id="lname">
                        </div>
                    </div>
                    <div class="field-sets">
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="field">
                            <label for="phone">Phone number</label>
                            <input type="tel" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="field textarea">
                        <label for="message">Message</label>
                        <textarea name="message" rows="4"></textarea>
                    </div>
                    <input type="submit" id="submit" value="Send message">
                </form>
            </div>
        </section>

        <section class="contact-details">
            <?php if(have_rows('location')){while(have_rows('location')){the_row()?>
                <div class="details">
                    <?php if($variable=get_sub_field('icon')){?>
                        <div class="icon">
                            <img src="<?php echo $variable?>" alt="">
                        </div>
                    <?php }?>
                    <div class="content">
                        <?php if($variable=get_sub_field('title')){?>
                            <h4><?php echo $variable?></h4>
                        <?php }?>
                        <?php if($variable=get_sub_field('address')){?>
                            <a href="<?php if($link=get_sub_field('maplink')){?><?php echo $link?><?php }?>" target="_blank">
                                <?php echo $variable?>
                            </a>
                        <?php }?>
                    </div>
                </div>
            <?php }}?>

            <?php if(have_rows('phone')){while(have_rows('phone')){the_row()?>
                <div class="details">
                    <?php if($variable=get_sub_field('icon')){?>
                        <div class="icon">
                            <img src="<?php echo $variable?>" alt="">
                        </div>
                    <?php }?>
                    <div class="content">
                        <?php if($variable=get_sub_field('title')){?>
                            <h4><?php echo $variable?></h4>
                        <?php }?>
                        <?php if(have_rows('add_number')){while(have_rows('add_number')){the_row()?>
                            <?php if($variable=get_sub_field('number')){?>
                                <a href="tel:<?php echo $variable?>"><?php echo $variable?></a>
                            <?php }?>
                        <?php }}?>
                    </div>
                </div>
            <?php }}?>

            <?php if(have_rows('mail')){while(have_rows('mail')){the_row()?>
                <div class="details">
                    <?php if($variable=get_sub_field('icon')){?>
                        <div class="icon">
                            <img src="<?php echo $variable?>" alt="">
                        </div>
                    <?php }?>
                    <div class="content">
                        <?php if($variable=get_sub_field('title')){?>
                            <h4><?php echo $variable?></h4>
                        <?php }?>
                        <?php if(have_rows('add_mail')){while(have_rows('add_mail')){the_row()?>
                            <?php if($variable=get_sub_field('mail')){?>
                                <a href="mailto:<?php echo $variable?>"><?php echo $variable?></a>
                            <?php }?>
                        <?php }}?>
                    </div>
                </div>
            <?php }}?>
        </section>
    </div>
</div>


<?php get_footer(); ?>