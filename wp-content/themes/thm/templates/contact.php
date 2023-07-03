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
<div class="inner_banner" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact/thermo-heat-contact.png') no-repeat center">
    <div class="content">
        <div class="top">
            <h1>Contact Us</h1>
            <p>Get in touch and let's discuss how we can help solve your heating, plumbing, ventilation and air-conditioning requirements</p>
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
            <li><a href="#">Contact Us</a> </li>        
        </ul>
    </div>
</div>
<div class="contact-page">
    <div class="container">
        <section class="contact-form">
            <div class="img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact/termo-heat.png" alt="">
            </div>
            <div class="form">
                <h2>Drop us a message</h2>
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
                        <label for="message">Massage</label>
                        <textarea name="message" rows="4"></textarea>
                    </div>
                    <input type="submit" id="submit" value="Send message">
                </form>
            </div>
        </section>

        <section class="contact-details">
            <div class="details">
                <div class="icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact/location.svg" alt="">
                </div>
                <div class="content">
                    <h4>Location</h4>
                    <a href="#" target="_blank">
                        28, Canal Walk Park <br />
                        West Industrial Estate <br />
                        Dublin D12 YE9H
                    </a>
                </div>
            </div>
            <div class="details">
                <div class="icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact/phone.svg" alt="">
                </div>
                <div class="content">
                    <h4>Phone</h4>
                    <a href="tel:01 6276270">01 6276270</a>
                    <a href="tel:087692 4420">087692 4420</a>
                </div>
            </div>
            <div class="details">
                <div class="icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact/email.svg" alt="">
                </div>
                <div class="content">
                    <h4>Email</h4>
                    <a href="mailto:info@thermoheatmechanical.ie">info@thermoheatmechanical.ie</a>
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer(); ?>