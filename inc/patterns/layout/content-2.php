<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: content-2
 * title: Content 2
 * categories: Eduacademy
 * keywords: content
 */

use Eduacademy\Assets_Manager;

$eduacademy_img13 = Assets_Manager::get_image_url( 'theme-image-13.webp' );

return array(
	'title'      => __( 'Content 2', 'eduacademy' ),
	'categories' => array( 'eduacademy' ),
	'keywords'   => array( 'content' ),
	'content'    => '
	<!-- wp:columns {"metadata":{"name":"content 2"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-columns alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Ready to start your learning journey? </h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Contact us today to explore our courses, ask questions, or get personalized recommendations. We’re here to help you gain the skills to build and launch your own web projects.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"dimensions":{"minHeight":"600px"},"background":{"backgroundImage":{"url":"' . esc_url( $eduacademy_img13 ) . '","id":104,"source":"file","title":"theme-image-13"},"backgroundSize":"cover"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:600px"></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
',
);
