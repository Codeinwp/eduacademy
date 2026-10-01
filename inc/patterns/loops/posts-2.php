<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 *
 * slug: posts-2
 * title: Posts 2
 * categories: Eduacademy
 * keywords: posts, loop, blog
 */

return array(
	'title'      => __( 'Posts', 'eduacademy' ),
	'categories' => array( 'eduacademy', 'posts' ),
	'keywords'   => array( 'posts', 'loop', 'blog' ),
	'content'    => '
<!-- wp:group {"metadata":{"name":"posts 2"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained","contentSize":null}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:16px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-date {"textAlign":"center","style":{"typography":{"textTransform":"none"}},"fontSize":"small"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
        ',
);
