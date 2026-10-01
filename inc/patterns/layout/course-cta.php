<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: course-cta
 * title: Pricing 2
 * categories: Eduacademy
 * keywords: cta, course
 */

use Eduacademy\Assets_Manager;

$eduacademy_img22 = Assets_Manager::get_image_url( 'theme-image-22.webp' );
$eduacademy_img18 = Assets_Manager::get_image_url( 'theme-image-18.webp' );
$eduacademy_img19 = Assets_Manager::get_image_url( 'theme-image-19.webp' );
$eduacademy_img04 = Assets_Manager::get_image_url( 'theme-image-04.webp' );
$eduacademy_img14 = Assets_Manager::get_image_url( 'theme-image-14.webp' );

return array(
	'title'      => __( 'Course CTA', 'eduacademy' ),
	'categories' => array( 'eduacademy' ),
	'keywords'   => array( 'CTA', 'course' ),
	'content'    => '
	<!-- wp:group {"metadata":{"name":"Course CTA"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Buy this Course</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Buy just this course, keep it forever. Perfect for quick learning on this specific topic.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":118,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50vw"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( $eduacademy_img22 ) . '" alt="" class="wp-image-118" style="border-radius:50vw;aspect-ratio:1;object-fit:cover;width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber"} -->
<p class="has-luminous-vivid-amber-color has-text-color has-link-color">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>"Clear, concise, and exactly what I needed..."</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600">Mary B. - USA</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":120,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50vw"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( $eduacademy_img18 ) . '" alt="" class="wp-image-120" style="border-radius:50vw;aspect-ratio:1;object-fit:cover;width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber"} -->
<p class="has-luminous-vivid-amber-color has-text-color has-link-color">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size">"I learned more in one week than in months elsewhere."</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600">John B. - Germany</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":121,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50vw"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( $eduacademy_img19 ) . '" alt="" class="wp-image-121" style="border-radius:50vw;aspect-ratio:1;object-fit:cover;width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber"} -->
<p class="has-luminous-vivid-amber-color has-text-color has-link-color">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>"Practical lessons I could apply immediately."</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600">Mary B. - France</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"pricing plan wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":107,"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $eduacademy_img04 ) . '" alt="" class="wp-image-107" style="border-radius:16px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":119,"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"999px","width":"4px"},"spacing":{"margin":{"top":"-40px","left":"7px"}}},"borderColor":"ti-bg"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:-40px;margin-left:7px"><img src="' . esc_url( $eduacademy_img14 ) . '" alt="" class="has-border-color has-ti-bg-border-color wp-image-119" style="border-width:4px;border-radius:999px;aspect-ratio:1;object-fit:cover;width:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">HTML Basics</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"x-large"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-x-large-font-size">$39</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"large"} -->
<p class="has-luminous-vivid-amber-color has-text-color has-link-color has-large-font-size">★★★★★</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"features wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Full video lesson access / Downloadable resources / Lifetime access / Flexible learning</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"fontSize":"large"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-large-font-size has-custom-font-size wp-element-button">Buy this Course</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
