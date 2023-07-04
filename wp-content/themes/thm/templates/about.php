<?php
    /*
    Template Name: About Page
    */
    get_header();
    add_action('wp_footer','page_scripts',25);
    function page_scripts(){?>
        <script>
            $(document).ready(function () {
                setInterval(calcPaths, 9500)

                function calcPaths(totalDur) {
                // unset 'animated' class to body which will reset the animation
                document.body.classList.remove('animated')

                // get all SVG elements - lines and dots
                const paths = document.querySelectorAll('.autograph__path')
                // prepare path length variable
                let len = 0
                // prepare animation delay length variable
                let delay = 0

                // escape if no elements found
                if (!paths.length) {
                    return false
                }

                // set duration in seconds of animation to default if not set
                const totalDuration = totalDur || 5

                // calculate the full path length
                paths.forEach((path) => {
                    const totalLen = path.getTotalLength()
                    len += totalLen
                })

                paths.forEach((path) => {
                    const pathElem = path
                    // get current path length
                    const totalLen = path.getTotalLength()
                    // calculate current animation duration
                    const duration = totalLen / len * totalDuration

                    // set animation duration and delay
                    pathElem.style.animationDuration = `${duration < 0.2 ? 0.2 : duration}s`
                    pathElem.style.animationDelay = `${delay}s`

                    // set dash array and offset to path length - this is how you hide the line
                    pathElem.setAttribute('stroke-dasharray', totalLen)
                    pathElem.setAttribute('stroke-dashoffset', totalLen)

                    // set delay for the next path - added .2 seconds to make it more realistic
                    delay += duration + 0.2
                })

                // set 'animated' class to body which will start the animation
                document.body.classList.add('animated')

                return true
                }

                calcPaths()
            });
        </script>
	<?php
    }
?>
<div class="inner_banner" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/about/thermo-heat-about.png') no-repeat center">
    <div class="content">
        <div class="top">
            <h1>About Us</h1>
            <p>We provide our clients with high quality services and unrivalled expertise</p>
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
            <li><a href="#">About Us</a> </li>        
        </ul>
    </div>
</div>
<div class="about-page">
    <div class="container">
        <section class="who-we-are">
            <div class="left">
                <h2>Who we are</h2>
            </div>
            <div class="right">
                <div class="descriptionm">
                    <p><strong>ThermoHeat Mechanical is a Dublin based mechanical company that offers a
                         complete range of heating, plumbing, ventilation and air-conditioning solutions
                          to commercial clients.</strong></p>
                    <p>Over the last 5 years our reputation for high quality mechanical installations has grown our business and client portfolio. At ThermoHeat, we pride ourselves on our hard-working, honest approach to each project we undertake. Our excellence has been recognised across the industry and our client portfolio is a testament to that.</p>
                    <p>In addition to our mechanical installation projects, we also offer a dedicated reactive service and maintenance division. We understand that a reliable maintenance service is essential to the smooth running of any business.</p>
                </div>
            </div>
        </section>
        <section class="founder">
            <div class="img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about/tom-mcGuirk.png" alt="">
            </div>
            <div class="details">
                <h3>Tom McGuirk</h3>
                <h5>Founder & Director</h5>
                <p>I founded ThermoHeat as I believe clients should be able to deal with one company for all their mechanical needs – whether it’s a simple call out or the design and implementation of a new installation. Through my years of responding to reactive maintenance calls I saw the importance of having highly skilled staff ready to respond when things go wrong, all while minimising the disruption to the client. I have always gone the extra mile to get 
                    projects completed on time to the highest quality – and this is the backbone of how we approach 
                    each day at ThermoHeat.
                </p>
                <div class="sign">
                    <svg width="50%" viewBox="0 0 265 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="autograph__path" d="M22.5 1L19.5 5.5L18.5 7.5M18.5 7.5L15 14L13.3261 17.5M18.5 7.5L13.5 8.5L1 11L4.5 10H9.5L11 11.5L12 14L13.3261 17.5M5.21429 34.5L9.5 25.5L10.4565 23.5L13.3261 17.5M5.21429 34.5L4.5 36L1.5 45L5.21429 34.5ZM26 7.5H19.5L28 7L33.5 6.5H38.5H40.5H41" stroke="white"/>
                        <path class="autograph__path" d="M22 23L18.5 28.5L16 33L15.5 37L17.5 38L21.5 35L24 31.5L25 27L24.5 24L22 23ZM22 23L23.5 19.5L25.5 18L28.5 17L31.5 16H35V18L34 21.5L33 25L31.5 28.5L30 31.5L29.5 35V36.5L31.5 33L34 30L36 27L38 24L40 22L42 21V25.5L40.5 30.5V33.5L43 33L50.5 25.5L53 24.5L53.5 30" stroke="white" stroke-opacity="0.87"/>
                        <path class="autograph__path" d="M53.5 30.5L55 32H58L66 28" stroke="white" stroke-opacity="0.87"/>
                        <path class="autograph__path" d="M85.5 8.5H96H98L100.5 11L100 14L99.1667 16M99.1667 16L97.5 20L87.5 36L84.5 39V36L87.5 31.5L90.5 26.5L94 21.5L99.1667 16ZM105 8.5L109.5 5.5H111.5L112.5 7.5L101.5 31.5V33L105 29.5L128 5.5L129.5 4H131V5.5L124 23.5L114.5 45.5L112.5 49.5L114.5 51" stroke="white" stroke-opacity="0.87"/>
                        <path class="autograph__path" d="M139 22H135L132.5 24L130 27L129 30.5V33L130 34L133.5 34.5L137 33L140 31.5L143.5 29.5L145.5 28L147 26.5L149 25.5" stroke="white" stroke-opacity="0.87"/>
                        <path class="autograph__path" d="M191 10L192 7.5V5L191 4H187L179.5 7.5L171.5 13L166 18.5L157 28L153 34.5L151 38.5L152.5 39.5L157 38L177 25L182.5 20L186 17L182.5 22.5L178 34.5V43H177" stroke="white" stroke-opacity="0.87"/>
                        <path class="autograph__path" d="M192.5 17.5H181.5L143.5 20" stroke="white" stroke-opacity="0.87"/>
                        <path class="autograph__path" d="M195 22L193 25.5L191 29L189.5 31.5L189 34L189.5 35.5H191L193 33.5L195 30.5L197.5 28.5L200.5 25.5L201.5 24.5L201 27V30.5V32.5L201.5 33.5L206 31.5L209.5 29L212.5 27L216 21L212.5 31.5L214 35.5L219 32.5L224 25.5L228.5 21V24.5L227 31.5L225.5 37L228.5 31.5L233.5 24.5L235 22L240 24.5H244.5L255 4L241 33L238.5 42V43.5" stroke="white" stroke-opacity="0.87"/>
                        <path class="autograph__path" d="M256.5 19L249 25L245 30V32H249L255 30L261.5 27.5L264.5 25" stroke="white" stroke-opacity="0.87"/>
                    </svg>
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer(); ?>