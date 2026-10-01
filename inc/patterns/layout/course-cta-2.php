<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: course-cta-2
 * title: Course CTA 2
 * categories: Eduacademy
 * keywords: cta, banner
 */

use Eduacademy\Assets_Manager;

$eduacademy_img13 = Assets_Manager::get_image_url( 'theme-image-13.webp' );
$eduacademy_img19 = Assets_Manager::get_image_url( 'theme-image-19.webp' );

return array(
	'title'      => __( 'Course CTA 2', 'eduacademy' ),
	'categories' => array( 'eduacademy' ),
	'keywords'   => array( 'cta', 'banner' ),
	'content'    => '
	<!-- wp:group {"metadata":{"name":"Course CTA 2"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|80"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Buy Single course for $39</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>One-time purchase, lifetime access</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Self-Paced Learning</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Go through the lessons when it’s most convenient for you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Expert Support</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Direct Q&amp;A access to your instructor for guidance and feedback.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Gain the skills you need to start building professional websites today. From HTML basics to fully functional layouts, everything is explained step-by-step.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"},"border":{"radius":"16px"}}} -->
<div class="wp-block-column" style="border-radius:16px"><!-- wp:image {"id":104,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $eduacademy_img13 ) . '" alt="" class="wp-image-104" style="border-top-left-radius:16px;border-top-right-radius:16px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|30"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:image {"id":121,"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"999px","width":"4px"},"spacing":{"margin":{"top":"-120px"}}},"borderColor":"ti-bg"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:-120px"><img src="' . esc_url( $eduacademy_img19 ) . '" alt="" class="has-border-color has-ti-bg-border-color wp-image-121" style="border-width:4px;border-radius:999px;aspect-ratio:1;object-fit:cover;width:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Interested in this Course? Let us know!</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"medium"} -->
<p class="has-text-align-center has-luminous-vivid-amber-color has-text-color has-link-color has-medium-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Request Availability</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
',
);
