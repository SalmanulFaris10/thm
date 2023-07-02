<?php
/*------- Theme Supports ---------*/
add_action( 'after_setup_theme', 'res_theme_support' );
function res_theme_support() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats' );
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    // Woocommerce Support
    add_theme_support( 'woocommerce' );
    //Woocommerce gallery support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    /*** end ***/
}

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'awpr_flush_rewrite_rules' );
function awpr_flush_rewrite_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}

/*------------- Disallow Backend Editting ----------------*/
define( 'DISALLOW_FILE_EDIT', true );

/*-------------- Disable XMLRPC ---------------------*/
add_filter('xmlrpc_enabled', '__return_false');

/*------------- Hide Wordpress Version Generator ---------------*/
add_filter('the_generator', 'version');
function version() {
  return '';
}

/*----------- Remove WP-Embed script ---------------*/
function disable_embeds_init() {
    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');
    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'disable_embeds_init', 9999);

/*------- Remove emoji script and css ------*/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/*---------- Include BFI Thumb ---------------*/
require_once('includes/BFI_Thumb.php');

/*---------------acf Settings ----------*/
include_once( 'includes/acf-pro/acf.php' );

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
	// update path
	$path = get_bloginfo('stylesheet_directory') . '/includes/acf-pro/';
	// return
	return $path;
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
	// update path
	$dir = get_stylesheet_directory_uri() . '/includes/acf-pro/';
	// return
	return $dir;
}

/**
 * acf options page
*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'  => 'Theme General Settings',
		'menu_title'  => 'Theme Options',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'Social Media',
		'menu_title'  => 'Social Media',
		'parent_slug' => 'theme-general-settings',
	));
    acf_add_options_sub_page(array(
		'page_title'  => 'Miscellaneous',
		'menu_title'  => 'Miscellaneous',
		'parent_slug' => 'theme-general-settings',
	));
}

/**
 * Remove acf sttings from backend
*/
//add_filter( 'acf/settings/show_admin', '__return_false' );

/*------- Excerpt -------*/
function new_excerpt_length($length) {
    return 200;  // length used for media press release
}
add_filter('excerpt_length', 'new_excerpt_length');

function trim_excerpt($more) {
    return '...';
}
add_filter('excerpt_more', 'trim_excerpt');
/*** end ***/

/*----- svg support -----*/
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*----- custom post archive -----*/
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag() || is_month() || is_day() || is_year()) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = get_post_types();
    $query->set('post_type',$post_type);
    return $query;
  }
}

/*----- Wp Login Page Logo Link ------*/
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
	return get_home_url();
}

/*------ Wp login Page Logo Change ---------*/
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('<?php echo get_field('logo', 'option'); ?>');
            padding-bottom: 0;
            background-size: 311px auto;
            height: 74px;
            width: 311px;
        }
    </style>
<?php }

/*------- Enqueue Scripts & Styles --------*/
add_action('wp_enqueue_scripts', 'theme_scripts_styles');
function theme_scripts_styles() {
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/migrate.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');

    //Scripts
    // wp_register_script( 'validate', get_template_directory_uri() . '/js/validate.js', array('jquery'), '', true );
    // wp_register_script( 'imglazy', get_template_directory_uri() . '/js/imglazy.min.js', array('jquery'), '', true );

    //Custom

    wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true);
    wp_register_script( 'home_scripts', get_template_directory_uri() . '/js/home-scripts.js', array('jquery'), '', true );
    wp_register_script( 'common_scripts', get_template_directory_uri() . '/js/common.js', array('jquery'), '', true );
    // wp_register_script('magnificPopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
    // wp_register_script('smoothscrolling', get_template_directory_uri() . '/js/smoothscrolling.js', array('jquery'), '', true);
    // wp_register_script('aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), '', true);
    // wp_register_script('easyResponsiveTabs', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array('jquery'), '', true);
    // wp_register_script('parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), '', true);
    // wp_register_script('mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), '', true);

    wp_enqueue_script('common_scripts');
	wp_enqueue_script('slick');
    // wp_enqueue_script('smoothscrolling');
    // wp_enqueue_script('aos');
    

    if (is_front_page() || is_home()) {
        wp_enqueue_script('home_scripts');

    } 
}

/*------ Remove script attributes -------*/
add_filter('style_loader_tag', 'mtheme_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'mtheme_remove_type_attr', 10, 2);
function mtheme_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

/**
 * Adding Defer attribute to scripts
*/
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
function add_defer_attribute($tag, $handle) {
    // add script handles to the array below
    $scripts_to_defer = array('google_map');
    
    foreach($scripts_to_defer as $defer_script) {
       if ($defer_script === $handle) {
          return str_replace(' src', ' defer="defer" src', $tag);
       }
    }
    return $tag;
}

/*------- remove css and js versions --------*/
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

/*-------- Move header scripts to footer ------*/
function remove_head_scripts() { 
    remove_action('wp_head', 'wp_print_scripts'); 
    remove_action('wp_head', 'wp_print_head_scripts', 9); 
    remove_action('wp_head', 'wp_enqueue_scripts', 1);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

/*------ Register Navigation Menu -------*/
register_nav_menus( 
    array(
        'header_menu' => 'Header Menu',
        'footer_menu_quicklinks'=> 'Quick links',
        'footer_menu_services'=> 'Services',
	)
);

/*---------- Register Widgets Area ---------*/
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
	register_sidebar(array(
        'id' => 'footer_widgets',
		'name' => 'Footer Widgets',
		'before_widget' => '<div class="fw-inner-col col-sm-3">',
		'after_widget' => '</div></div>',
		'before_title' => '<h5 class="fw-title">',
		'after_title' => '</h5><div class="fw-content">',
	));
}

/*----------- Register Post Type ------------*/
function theme_posttype() {
	//faq post type
	// $labelsfaq = array(
	// 	'name'                  => _x( 'faq', 'Post Type General Name', 'text_domain' ),
	// 	'singular_name'         => _x( 'faq', 'Post Type Singular Name', 'text_domain' ),
	// 	'menu_name'             => __( 'faq', 'text_domain' ),
	// 	'name_admin_bar'        => __( 'faq', 'text_domain' ),
	// 	'archives'              => __( 'faq Archives', 'text_domain' ),
	// 	'parent_item_colon'     => __( 'Parent faq:', 'text_domain' ),
	// 	'all_items'             => __( 'All faq', 'text_domain' ),
	// 	'add_new_item'          => __( 'Add New faq', 'text_domain' ),
	// 	'add_new'               => __( 'Add New', 'text_domain' ),
	// 	'new_item'              => __( 'New faq', 'text_domain' ),
	// 	'edit_item'             => __( 'Edit faq', 'text_domain' ),
	// 	'update_item'           => __( 'Update faq', 'text_domain' ),
	// 	'view_item'             => __( 'View faq', 'text_domain' ),
	// 	'search_items'          => __( 'Search faq', 'text_domain' ),
	// 	'not_found'             => __( 'Not found', 'text_domain' ),
	// 	'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 	'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 	'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 	'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 	'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 	'insert_into_item'      => __( 'Insert into faq', 'text_domain' ),
	// 	'uploaded_to_this_item' => __( 'Uploaded to this faq', 'text_domain' ),
	// 	'items_list'            => __( 'faq list', 'text_domain' ),
	// 	'items_list_navigation' => __( 'faq list navigation', 'text_domain' ),
	// 	'filter_items_list'     => __( 'Filter faq list', 'text_domain' ),
	// );
	// $argsfaq = array(
	// 	'label'                 => __( 'faq', 'text_domain' ),
	// 	'labels'                => $labelsfaq,
	// 	'supports'              => array( 'title', 'editor','excerpt', 'thumbnail', 'custom-fields', ),
	// 	'hierarchical'          => false,
	// 	'public'                => false,
	// 	'show_ui'               => true,
	// 	'show_in_menu'          => true,
	// 	'menu_position'         => 5,
	// 	'show_in_admin_bar'     => true,
	// 	'show_in_nav_menus'     => true,
	// 	'can_export'            => true,
	// 	'has_archive'           => true,
	// 	'exclude_from_search'   => false,
	// 	'publicly_queryable'    => true,
	// 	'menu_icon'				=> 'dashicons-products',
	// 	'show_in_rest'			=> true,
	// 	'public' 	=> true,
		
	// );
	// register_post_type( 'faq', $argsfaq );
	// //faq taxonomy
	// $faqlabels = array(
	// 	'name'              => _x( 'Category', 'taxonomy general name', 'textdomain' ),
	// 	'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
	// 	'search_items'      => __( 'Search Category', 'textdomain' ),
	// 	'all_items'         => __( 'All Category', 'textdomain' ),
	// 	'parent_item'       => __( 'Parent Category', 'textdomain' ),
	// 	'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
	// 	'edit_item'         => __( 'Edit Category', 'textdomain' ),
	// 	'update_item'       => __( 'Update Category', 'textdomain' ),
	// 	'add_new_item'      => __( 'Add New Category', 'textdomain' ),
	// 	'new_item_name'     => __( 'New Category Name', 'textdomain' ),
	// 	'menu_name'         => __( 'Categories', 'textdomain' ),
	// 	'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// );
	// $faqargs = array(
	// 	'hierarchical'      => true,
	// 	'labels'            => $faqlabels,
	// 	'supports'              => array( 'title','custom-fields','thumbnail' ),
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'query_var'         => true,
	// 	'show_in_rest' 		=> true,
	// );

	// register_taxonomy( 'faq-category', 'faq', $faqargs );
    }
add_action('init', 'theme_posttype');




//contact us form 
/*add_action('wp_ajax_nopriv_contactform', 'bi_contactform');
add_action('wp_ajax_contactform', 'bi_contactform');

function bi_contactform() {
	if (!(isset($_POST['fname']) && !empty($_POST['lname']) && isset($_POST['phone']) && !empty($_POST['phone']) && isset($_POST['email']) && !empty($_POST['email'])   )) {
		echo 'Enter all the fields';
	} else if (!is_email($_POST['email'])) {
		echo 'Sorry, You have entered an invalid Email Address';
	} else {
        if (get_field('contact_form_receiving_mail','option')) {
			$to = get_field('contact_form_receiving_mail','option');
		 } else {
			$to = get_bloginfo('admin_email');
		}

		ob_start();
		?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>.:  :.</title>
			</head>

			<body style="background-color:#F0EEE0; margin:0px;">
				<table width="100%" border="0" cellpadding="0">
					<tr>
						<td align="center" valign="top" style="background-color:#F0EEE0; margin:0px;"><table width="572" border="0" cellspacing="0" cellpadding="0" style="font-size:12px; font-family: Arial, Helvetica, sans-serif; line-height:18px; color:#444444; ">
								<tr>
									<td align="center" valign="top" style="padding-bottom:10px;">&nbsp;</td>
								</tr>
								<tr>
									<td align="left" valign="top" style="background-color:#FFF; padding:20px; border-right:1px solid #d6d6d6; border-bottom:2px solid #d6d6d6;">
									<p align="centre" valign="top" style=" text-align:center; padding:15px 0px;">
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></p>
										<p style="color:#504e4e; font-size:16px;"><span class="footer"><strong>Contact Form Mail - <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></strong></span></p>
										<table width="100%" border="0" cellspacing="2" cellpadding="4">
											<tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">First Name</td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['fname'] ?></strong></td>
											</tr>
                                            <tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">Last Name</td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['lname'] ?></strong></td>
											</tr>
											<tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">Phone </td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['phone'] ?></strong></td>
											</tr>
											<tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">E-mail </td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['email'] ?></strong></td>
											</tr>
											<tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">City </td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['city'] ?></strong></td>
											</tr>
                                            <tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">Country</td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['country'] ?></strong></td>
											</tr>
                                            <tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">Are you a Buyer or a Seller?*</td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['slct'] ?></strong></td>
											</tr>	
                                            <tr>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;">How can we help you?</td>
												<td align="left" valign="middle" style="border-bottom:1px solid #e2dfd9;"><strong><?php echo $_POST['message'] ?></strong></td>
											</tr>																																
										</table>
										<p>Thank you<br />
											<a href="<?php echo home_url('/'); ?>" target="_blank" style="color:#504e4e;"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a><br />
										</p></td>
								</tr>
								<tr>
									<td align="left" valign="top" style=" text-align:center; color:#4c4c4c; font-size:11px; padding:15px 0px;"><span class="footer"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>. All rights reserved.</span></td>
								</tr>
							</table></td>
					</tr>
				</table>
			</body>
		</html>

		<?php
		$message = ob_get_contents();
		ob_end_clean();
		$subject = esc_attr( get_bloginfo( "name", "display" ) ). ' - Contact Email';
		$headers[] = 'From: ' . $_POST["name"] . ' <' . $_POST["email"] . '>';
		add_filter('wp_mail_content_type', 'ch_html_content_type');

		function ch_html_content_type() {
			return 'text/html';
		}

		$thnq = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>.:  :.</title></head><body style="background-color:#F0EEE0; margin:0px;"><table width="100%" border="0" cellpadding="0"><tr><td align="center" valign="top" style="background-color:#F0EEE0; margin:0px;"><table width="572" border="0" cellspacing="0" cellpadding="0" style="font-size:12px; font-family: Arial, Helvetica, sans-serif; line-height:18px; color:#444444; "><tr><td align="center" valign="top" style="padding-bottom:10px;">&nbsp;</td></tr><tr><td align="left" valign="top" style="background-color:#FFF; padding:20px; border-right:1px solid #d6d6d6; border-bottom:2px solid #d6d6d6;">';
		$thnq .= '<p style="text-align: center;"><img src="'.get_template_directory_uri().'/images/logo.png" alt="" style="width:100px; height:auto; padding: 10px; " /></p>';
		$thnq .= '<p style="color:#504e4e; font-size:16px; padding-left: 2px;">';
		$thnq .= '<span class="footer"><strong>Contact Form acknowledgement from '.esc_attr( get_bloginfo( "name", "display" ) ) .' website</strong></span>';
		$thnq .= '</p><table width="100%" border="0" cellspacing="2" cellpadding="4"><tr>';
		$thnq .= '<td  align="left" colspan="2" valign="middle" style="border-bottom:1px solid #e2dfd9; padding-left: 0px;">Thank you for reaching out to Netfresh. We have received your message and the designated team will be in touch with you shortly.</td>';
		$thnq .= '</tr></table><p>Thank you<br />';
		$thnq .= '<a href="'. home_url('/').'" target="_blank" style="color:#504e4e;">'.esc_attr( get_bloginfo( "name", "display" ) ).'</a><br />';
		$thnq .= '</p></td></tr><tr>';
		$thnq .= '<td align="left" valign="top" style=" text-align:center; color:#4c4c4c; font-size:11px; padding:15px 0px;"><span class="footer">'.esc_attr( get_bloginfo( "name", "display" ) ).'. All rights reserved</span></td>';
		$thnq .= '</tr></table></td></tr></table></body></html>';
        
		$pieces = explode(",", $to);
		$to1 =$pieces[0];

		$head[] = 'From: '.esc_attr( get_bloginfo( "name", "display" ) ).' <' . $to1 . '>';
		$subj = esc_attr( get_bloginfo( "name", "display" ) ) .' - Contact email acknowledgement';

		if (wp_mail($to, $subject, $message, $headers, $attachments)) {
			echo 1;
			wp_mail($_POST["email"], $subj, $thnq, $head);
		} else {
			echo "Mail Sending Failed";
		}
	}
	die();

}
//End contact us form

/************* faq ajax */
/*add_action('wp_ajax_faq_ajax' , 'fn_faq_ajax');
add_action('wp_ajax_nopriv_faq_ajax','fn_faq_ajax');
function fn_faq_ajax(){
    $term_id=$_POST['term_id'];
	if($term_id=='all'){
		$args=array(               
			'post_type' => 'faq',
			'post_status' => 'publish',
			'posts_per_page' =>-1,
		);
	}else{
    $args=array(               
        'post_type' => 'faq',
        'post_status' => 'publish',
        'posts_per_page' =>-1,
		'tax_query' => array(
			array(
				'taxonomy' => 'faq-category',
				'terms' => array($term_id),
			)
    ));}?>

	<?php $faq = new WP_Query( $args );ob_start();?>
	<?php if($faq -> have_posts()){?>
		<div class="tab-outer">
            <div class="accordion">
				<?php while($faq -> have_posts()){$faq ->the_post();?>
					<div class="acc-item">
						<div class="inner-box">
							<h5 class="accordion-toggle"><?php the_title()?><span class="arrow arrowDown"></span></h5>
							<div class="accordion-content">
								<?php the_content()?>
							</div>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
    <?php wp_reset_postdata();?>
	<?php $postscontent= ob_get_contents();
   	ob_end_clean();
	$r = array( "postscontent" => $postscontent);
 	echo json_encode($r);
	die();
}
*/

?>