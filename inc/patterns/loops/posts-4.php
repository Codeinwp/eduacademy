<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: posts-4
 * title: Posts 4
 * categories: Eduacademy
 * keywords: posts, loop, blog
 */

return array(
	'title'      => __( 'Posts 4', 'eduacademy' ),
	'categories' => array( 'eduacademy', 'posts' ),
	'keywords'   => array( 'posts', 'loop', 'blog' ),
	'content'    => '
<!-- wp:group {"metadata":{"name":"Posts 4"},"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:query {"queryId":1,"query":{"perPage":2,"pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:16px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-date {"style":{"typography":{"textTransform":"none"}},"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
        ',
);
