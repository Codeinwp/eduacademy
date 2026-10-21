<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: content-1
 * title: Content 1
 * categories: Eduacademy
 * keywords: content, grid
 */

use Eduacademy\Assets_Manager;

$eduacademy_img17 = Assets_Manager::get_image_url( 'theme-image-17.webp' );
$eduacademy_img13 = Assets_Manager::get_image_url( 'theme-image-13.webp' );
$eduacademy_img22 = Assets_Manager::get_image_url( 'theme-image-22.webp' );
$eduacademy_img03 = Assets_Manager::get_image_url( 'theme-image-03.webp' );
$eduacademy_img02 = Assets_Manager::get_image_url( 'theme-image-02.webp' );
$eduacademy_img01 = Assets_Manager::get_image_url( 'theme-image-01.webp' );

return array(
	'title'      => __( 'Content 1', 'eduacademy' ),
	'categories' => array( 'eduacademy' ),
	'keywords'   => array( 'content', 'grid' ),
	'content'    => '
	<!-- wp:group {"metadata":{"name":"content 1"},"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"testimonial"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"testimonial"},"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0"><!-- wp:image {"id":118,"width":"140px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50vw"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( $eduacademy_img22 ) . '" alt="" class="wp-image-118" style="border-radius:50vw;aspect-ratio:1;object-fit:cover;width:140px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"large"} -->
<p class="has-luminous-vivid-amber-color has-text-color has-link-color has-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">"The CSS course was a game changer for my freelancing career. Clear, practical, and beginner-friendly."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Person</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"width":"0px","style":{"layout":[]}} -->
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"grid"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"bento"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"-170px"}}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide" style="margin-top:-170px"><!-- wp:group {"style":{"layout":{"columnSpan":2}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $eduacademy_img03 ) . '","id":108,"dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"contentPosition":"bottom left","sizeSlug":"full","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><img class="wp-block-cover__image-background wp-image-108 size-full" alt="" src="' . esc_url( $eduacademy_img03 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size">Build Smarter, Not Harder</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Discover proven workflows and tools to streamline your learning and development process.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":1}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $eduacademy_img02 ) . '","id":109,"dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"contentPosition":"bottom left","sizeSlug":"full","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><img class="wp-block-cover__image-background wp-image-109 size-full" alt="" src="' . esc_url( $eduacademy_img02 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size">Meet Your Mentors</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size">Learn from experienced instructors who bring real-world expertise to every lesson.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"layout":{"columnSpan":1},"border":{"radius":"16px"},"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background has-link-color" style="border-radius:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="line-height:1">2000+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Students enrolled</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="line-height:1">300</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="line-height:1">5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Expert instructors</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":2}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $eduacademy_img01 ) . '","id":110,"dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left has-ti-fg-alt-color has-text-color has-link-color" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><img class="wp-block-cover__image-background wp-image-110 size-full" alt="" src="' . esc_url( $eduacademy_img01 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size">Hands-On Projects</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Apply what you learn through interactive projects that prepare you for real-world challenges.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"testimonial"},"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"grid"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":2}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"large"} -->
<p class="has-text-align-left has-luminous-vivid-amber-color has-text-color has-link-color has-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size">"The CSS course was a game changer for my freelancing career. Clear, practical, and beginner-friendly."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">George Kent, USA</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
	',
);
