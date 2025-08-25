<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: instructors
 * title: Instructors
 * categories: Eduacademy
 * keywords: instructors
 */

use Eduacademy\Assets_Manager;

$eduacademy_img19 = Assets_Manager::get_image_url( 'theme-image-19.webp' );
$eduacademy_img15 = Assets_Manager::get_image_url( 'theme-image-15.webp' );
$eduacademy_img18 = Assets_Manager::get_image_url( 'theme-image-18.webp' );

return array(
	'title'      => __( 'Instructors', 'eduacademy' ),
	'categories' => array( 'eduacademy' ),
	'keywords'   => array( 'instructors' ),
	'content'    => '
	<!-- wp:group {"metadata":{"name":"instructors"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|80"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"28rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Expert Instructors</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Our team of passionate educators brings real-world experience to every lesson.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"},"layout":{"columnSpan":1,"rowSpan":1}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-ti-bg-alt-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":121,"width":"140px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( $eduacademy_img19 ) . '" alt="" class="wp-image-121" style="border-radius:16px;aspect-ratio:1;object-fit:cover;width:140px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-text-align-left has-ti-accent-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><strong>Instructor</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Tania Anselmo</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Expert in HTML and CSS. Helping students achieve their goals.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"ti-fg-alt","iconColorValue":"var(\u002d\u002dnv-text-dark-bg, #FFFFFF)","iconBackgroundColor":"ti-bg-inv","iconBackgroundColorValue":"var(\u002d\u002dnv-dark-bg, #191919)","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-ti-bg-alt-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":103,"width":"140px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( $eduacademy_img15 ) . '" alt="" class="wp-image-103" style="border-radius:16px;aspect-ratio:1;object-fit:cover;width:140px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"16px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-radius:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><strong>Instructor</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">David Chen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Specialist in Javascript. Dedicated to delivering engaging, practical lessons.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"ti-fg-alt","iconColorValue":"var(\u002d\u002dnv-text-dark-bg, #FFFFFF)","iconBackgroundColor":"ti-bg-inv","iconBackgroundColorValue":"var(\u002d\u002dnv-dark-bg, #191919)","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-ti-bg-alt-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":120,"width":"140px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="' . esc_url( $eduacademy_img18 ) . '" alt="" class="wp-image-120" style="border-radius:16px;aspect-ratio:1;object-fit:cover;width:140px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"16px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-radius:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><strong>Instructor</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Amir Patel</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Guides students in bridging design and development.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"ti-fg-alt","iconColorValue":"var(\u002d\u002dnv-text-dark-bg, #FFFFFF)","iconBackgroundColor":"ti-bg-inv","iconBackgroundColorValue":"var(\u002d\u002dnv-dark-bg, #191919)","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
