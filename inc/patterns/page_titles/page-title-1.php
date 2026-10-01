<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: page-title-1
 * title: Page Title
 * categories: Eduacademy
 * keywords: page title
 */

use Eduacademy\Assets_Manager;

return array(
	'title'      => __( 'Page Title', 'eduacademy' ),
	'categories' => array( 'eduacademy', 'posts' ),
	'keywords'   => array( 'page title' ),
	'content'    => '
<!-- wp:group {"metadata":{"name":"page title 1"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"8px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left">Title goes here</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
        ',
);
