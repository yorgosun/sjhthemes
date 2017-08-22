<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<style media="all">
    img .aligncenter {
        clear: both;
        display: block;
        margin: 0 auto 0 auto;
        text-align: center;
    }
</style>
<h1><?php the_title();?></h1>
<p><?php echo get_post_meta(get_the_id(), 'author', true) ?>  时间：<?php the_time('Y-m-d')?></p>
<div class="content-text">
	<?php the_content();?>
</div>
