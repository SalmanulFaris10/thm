<div class="footer-slider">
	<div class="container">
		<div class="items">
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aib-logo.png" alt="">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Beacon-Hospital-Bold-Logo.png" alt="">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/carton-house.png" alt="">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo4.png" alt="">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mater-hospital.png" alt="">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mynoot-university.png" alt="">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/peamount-healthcare-logo.png" alt="">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mater-hospital.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>



<footer class="animation">
	<div class="container">
		<div class="top">
			<div class="col1 col">
				<div class="footer-logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.svg" alt="Thermo Heat">
				</div>
				<p>
				ThermoHeat Mechanical is a Dublin based mechanical company that offers a 
				complete range of plumbing, heating, ventilation and air-conditioning solutions to both
				 commercial and domestic clients.
				</p>
			</div>
			<div class="col2 col">
				<h4>Quick Links</h4>
				<?php echo wp_nav_menu( array('theme_location'=>'footer_menu_quicklinks') ); ?>
			</div>
			<div class="col3 col">
				<h4>Services</h4>
				<?php echo wp_nav_menu( array('theme_location'=>'footer_menu_services') ); ?>
			</div>
			<div class="col4 col">
				<h4>Get In Touch</h4>
				<div class="call">
					<div class="num"><a href="tel:01 6276270">01 6276270</a></div>
				</div>
				<div class="address">
					<p>
						28, Canal Walk,<br />
						Park West Industrial Estate,<br />
						Dublin 12<br /> 						
					</p>
					<a href="mailto:tom@thermoheatmechanical.ie">tom@thermoheatmechanical.ie</a>				
				</div>
			</div>
		</div>
		<div class="bottom">
			<p>© Copyright ThermoHeat 2023. All right reserved.</p>
		</div>
	</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>