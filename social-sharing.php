<?php
/**
	*Plugin Name: Social Sharing
	*Plugin URI: http://mondayblogger.com
	*Description: Social Sharing is used to share link on social site with proper meta tags and description adjustments.
	*Author: Danish Iftikhar
	*Version: 1.0
	*License: GPLv2 or Later


	*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ){
	die;
}

/**
 resource style included in this function
*/
function style_social_sharing(){

  
    wp_register_style( 'my-plugin-style', plugins_url('css/style.css', __FILE__));
    wp_register_style( 'my-plugin-style', plugins_url('css/style2.css', __FILE__));
	wp_enqueue_style( 'my-plugin-style' );

 }
add_action('wp_enqueue_scripts','style_social_sharing');



function links_social_sharing(){		

		/**
		Social Sharing will only appear on single post page for sharing
		*/
		if(is_single()){
?>
<div class="sticky-left">
			<div class="container-fluid">
				    <div class="row">
						<div class="sicon">

							<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
								<div class="icon-circle">
									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" class="ifacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
								</div>
							</div>
				     
							<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
								<div class="icon-circle">
									<a href="https://twitter.com/share?url=<?php the_permalink();?>" class="itwittter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
				      
							<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
								<div class="icon-circle">
									<a href="https://plus.google.com/share?url=<?php the_permalink();?>" class="igoogle" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
				      
							<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
								<div class="icon-circle">
									<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>" class="iLinkedin" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>

						</div>
					</div>
			</div>
</div>
<?php
	}
}
add_action('comment_form','links_social_sharing');
?>
