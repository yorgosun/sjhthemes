<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();?>
<div class="songjing">
<?php
wp_reset_postdata();

$tag = get_query_var('tag');

$args = array(
    'tag' => $tag,
    'showposts' => 50,
    'caller_get_posts' => 1,
);

$query = new WP_Query($args);
$n = 0;
while ($query->have_posts()): $query->the_post();?>

	<?php echo get_the_title(); ?>

		<?php
endwhile;
wp_reset_postdata();
wp_pagenavi();
?>


</div>

<?php get_footer();?>
