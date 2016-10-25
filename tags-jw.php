<?php
/*
Template Name: Jw
 */
?>
<?php get_header();?>
<div class="narrowcolumn">
<div class="post" id="post-<?php the_ID();?>">
<h2>Tags</h2>
<div class="entry">
<?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=5000');?>//smallest是最小字号,largest是最大字号,unit是单位,number是显示关键词个数,默认是45个
</div>
</div>
</div><!-- end narrwocolumn -->
<?php get_footer();?>
<?php
/*
Template Name: Jw
 */