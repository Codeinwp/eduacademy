<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: curriculum
 * title: Curriculum
 * categories: Eduacademy
 * keywords: content
 */

use Eduacademy\Assets_Manager;

$eduacademy_img04 = Assets_Manager::get_image_url( 'theme-image-04.webp' );

return array(
	'title'      => __( 'Curriculum', 'eduacademy' ),
	'categories' => array( 'eduacademy' ),
	'keywords'   => array( 'content' ),
	'content'    => '
	<!-- wp:group {"metadata":{"name":"curriculum"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":107,"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $eduacademy_img04 ) . '" alt="" class="wp-image-107" style="border-radius:16px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">HTML Basics</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>12 lessons / 9.5 hours</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"medium"} -->
<p class="has-luminous-vivid-amber-color has-text-color has-link-color has-medium-font-size">★★★★★</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Step-by-step lessons designed to take you from absolute beginner to confident HTML coder.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Buy this Course - $39</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Access all Courses</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Introduction to HTML &amp; How the Web Works </h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Understand what HTML is and how browsers render web pages.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Setting Up Your First HTML Document</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Learn the basic structure and required elements of any HTML page.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Headings, Paragraphs &amp; Text Formatting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Add and style text content with semantic meaning.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Creating Tables &amp; Forms</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Organize data with tables and collect user input with forms.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg"}}}},"backgroundColor":"ti-bg","textColor":"ti-fg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-color has-ti-bg-background-color has-text-color has-background has-link-color" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">HTML5 Features &amp; Best Practices</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Discover modern HTML elements and recommended coding standards.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
