<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: hero-2
 * title: Simple Hero
 * categories: Eduacademy
 * keywords: hero, cover
 */

use Eduacademy\Assets_Manager;

$eduacademy_img17 = Assets_Manager::get_image_url( 'theme-image-17.webp' );
$eduacademy_img13 = Assets_Manager::get_image_url( 'theme-image-13.webp' );

return array(
	'title'      => __( 'HSimple Hero', 'eduacademy' ),
	'categories' => array( 'eduacademy' ),
	'keywords'   => array( 'hero', 'cover' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"hero-2"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}},"background":{"backgroundImage":{"url":"' . esc_url( $eduacademy_img17 ) . '","id":163,"source":"file","title":"theme-image-17"},"backgroundSize":"1100px","backgroundPosition":"100% 0%","backgroundRepeat":"no-repeat"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
	<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading">Build Your Skills. One Lesson at a Time.</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"medium"} -->
	<p class="has-medium-font-size">Join thousands of students learning in-demand skills with step-by-step courses, practical exercises, and expert guidance.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber"} -->
	<p class="has-luminous-vivid-amber-color has-text-color has-link-color">★★★★★</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>1K+ reviews</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":104,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
	<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $eduacademy_img13 ) . '" alt="" class="wp-image-104" style="border-radius:16px;aspect-ratio:1;object-fit:cover"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	',
);
