<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<h1><?php the_title();?></h1>
<p>作者：<?php echo get_post_meta(get_the_id(), 'author', true) ?> / 时间：<?php the_time('Y-m-d')?></p>
<div class="content-text">
	<?php the_content();?>
</div>
