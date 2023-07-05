<div class="footer-slider">
	<div class="container">
		<?php if(have_rows('footer_logo_slider','option')){?>
			<div class="items">
				<?php while(have_rows('footer_logo_slider','option')){the_row()?>
					<div class="item">
						<div class="img">
							<a href="#">
								<?php if($variable=get_sub_field('image')){?>
									<img src="<?php echo $variable?>" alt="">
								<?php }?>
							</a>
						</div>
					</div>
				<?php }?>
			</div>
		<?php }?>
	</div>
</div>



<footer class="animation">
	<div class="container">
		<div class="top">
			<div class="col1 col">
				<?php if($variable=get_field('footer_logo','option')){?>
					<div class="footer-logo">
						<img src="<?php echo $variable?>" alt="Thermo Heat">
					</div>
				<?php }?>
				<?php if($variable=get_field('footer_description','option')){?>
					<p>
					<?php echo $variable?>
					</p>
				<?php }?>
			</div>
			<div class="col2 col">
				<h4>Quick Links</h4>
				<?php echo wp_nav_menu( array('theme_location'=>'footer_menu_quicklinks') ); ?>
			</div>
			<div class="col3 col">
				<h4>Services</h4>
				<?php echo wp_nav_menu( array('theme_location'=>'footer_menu_services') ); ?>
			</div>
			<?php if(have_rows('footer_third_column','option')){while(have_rows('footer_third_column','option')){the_row()?>
				<div class="col4 col">
					<?php if($variable=get_sub_field('title')){?>
						<h4><?php echo $variable?></h4>
					<?php }?>
					<?php if(have_rows('add_number')){?>
						<div class="call">
							<?php while(have_rows('add_number')){the_row()?>
								<div class="num">
									<a href="<?php if($variable=get_sub_field('number')){?>tel:<?php echo $variable?><?php }?>">
										<?php if($variable=get_sub_field('number')){?><?php echo $variable?><?php }?>
									</a>
								</div>
							<?php }?>
						</div>
					<?php }?>			
					<div class="address">
						<?php if($variable=get_sub_field('address')){?>
							<p>
							<?php echo $variable?>					
							</p>
						<?php }?>
						<?php if(have_rows('add_email')){while(have_rows('add_email')){the_row()?>
							<a href="<?php if($variable=get_sub_field('email')){?>mailto:<?php echo $variable?><?php }?>">
								<?php if($variable=get_sub_field('email')){?><?php echo $variable?><?php }?>
							</a>
						<?php }}?>				
					</div>
				</div>
			<?php }}?>
		</div>
		<?php if($variable=get_field('copy_roght_text','option')){?>
			<div class="bottom">
				<p><?php echo $variable?></p>
			</div>
		<?php }?>
	</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>