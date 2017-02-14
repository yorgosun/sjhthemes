<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

<?php
file_get_contents("http://play.jcloudlv.com/live/61bf0701b8d77529e0.m3u8");
?>
<div class="live" style="display:<?php echo (strpos($http_response_header[0], '404 Not Found') === false) ? 'block' : 'none'; ?>">
    <a href="http://sutrachanting.longquanzs.org/chatroom/live">
        <img src="http://yorgo.91yousheng.com/wp-content/themes/twentysixteen/img/logo.png" />
    </a>
</div>

	<ol class="carousel-indicators">
	<?php
$postargs = array(
    'posts_per_page' => 5,
    'category_name' => '首页轮播图',
    'orderby' => 'date',
    'order' => 'DESC',
);
$query1 = new WP_Query($postargs);
$n = 0;
while ($query1->have_posts()): $query1->the_post();
    ?>
			<img src="<?php echo get_the_post_thumbnail_url(null, array(160, 100)) ?>" data-target="#myCarousel" data-slide-to="<?php echo $n ?>"
			<?php if ($n == 0) {
        echo " class=\"active\"";
    }
    ?>>
			<?php
    $n++;
endwhile;
wp_reset_postdata();
?>
	</ol>
	<!-- main slider carousel items -->
	<div class="carousel-inner">
		<?php
$query1 = new WP_Query($postargs);
$n = 0;

while ($query1->have_posts()): $query1->the_post();
    ?>
													<div class="<?php if ($n == 0) {
        echo "active ";
    }
    ?>item" data-slide-number="<?php echo $n ?>">
														<img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-responsive">
														<div class="carousel-caption">

															<h1 class="banner-title"><?php echo get_the_title() ?></h1>
															<hr style="width: 60%">
															<p class="banner-text"><?php echo get_the_excerpt() ?></p>
														</div>
													</div>
												<?php
    $n++;
endwhile;
wp_reset_postdata();
?>
	</div>
</div>
<div class="container content-block">
<?php
$postargs = array(
    'posts_per_page' => 4,
    'category_name' => '缘理服展',
    'orderby' => 'date',
    'order' => 'asc',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>
					<a href="<?php echo get_the_permalink(); ?>">
						<div class="col-md-3">
							<img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-responsive">
							<p class="text-center peitu-title">- <?php echo get_the_title() ?> -</p>
						</div>
					</a>

					<?php
endwhile;
wp_reset_postdata();
?>
</div>
<div class="container-fluid content-block content-gray">
	<div class="container">
		<?php
$postargs = array(
    'name' => 'index_lection',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>
							<div class="col-md-5">
								<h2><?php echo get_the_title() ?></h2>
								<p class="desctext">
									<?php echo the_content() ?>
								</p>
								<a href="/?cat=54" class="button">进一步了解 ></a>
							</div>
					<div class="col-md-7">
						<?php
endwhile;
wp_reset_postdata();
?>
<?php
$postargs = array(
    'posts_per_page' => 2,
    'category_name' => 'songjinghuodong',
    'orderby' => 'date',
    'order' => 'desc',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
///head c
    ?>
					<a href="<?php echo get_the_permalink(); ?>">
					<div class="col-md-6">
						<img style="width: 100%" src="<?php echo get_the_post_thumbnail_url(null, array(300, 183)) ?>">
						<h3><?php echo get_the_title() ?></h3>
						<p>时间：<?php echo get_post_meta(get_the_id(), 'activitytime', true) ?></p>
						<p>地点：<?php echo get_post_meta(get_the_id(), 'activitylocation', true) ?></p>
						<p>YY直播：<?php echo get_post_meta(get_the_id(), 'yychannel', true) ?></p>
					</div>
					</a>
					<?php
endwhile;
wp_reset_postdata();
?>
</div>
</div>
</div>
<div class="container content-block">
	<div class="col-md-5">
		<?php
$postargs = array(
    'name' => 'index_activity',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>
							<h2><?php echo get_the_title() ?></h2>
							<p class="desctext">
								<?php echo the_content() ?>
							</p>
							<?php
endwhile;
wp_reset_postdata();
?>
		<a href="/?page_id=2473" class="button">进一步了解 ></a>
	</div>
	<div class="col-md-7">
		 <?php echo do_shortcode('[album id=1 template=home]'); ?>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
	<div class="col-md-5">
		<?php
$postargs = array(
    'name' => 'index_share',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>
								<h2><?php echo get_the_title() ?></h2>
								<p class="desctext">
									<?php echo the_content() ?>
								</p>
							<?php
endwhile;
wp_reset_postdata();
?>
		<a href="?cat=50" class="button">进一步了解 ></a>
	</div>
	<div class="col-md-7">

<?php
$postargs = array(
    'posts_per_page' => 4,
    'category_name' => 'songjingxinde',
    'meta_query' => array(array('key' => '_thumbnail_id')),
    'orderby' => 'date',
    'order' => 'desc',
);
$query2 = new WP_Query($postargs);
$n = 0;
while ($query2->have_posts()): $query2->the_post();

    ?>
					<div class="col-md-6">
						<a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(null, array(300, 183)) ?>" width="300" height="183"></a>
						<h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
						<p><?php echo get_post_meta(get_the_id(), 'author', true) ?> <?php the_time('Y-m-d')?></p>
					</div>
					<?php
endwhile;
wp_reset_postdata();
?>
	</div>
</div>
<div class="container-fluid content-block content-gray">
	<div class="container content-block">
			<div class="col-md-5">
				<?php
$postargs = array(
    'name' => 'index_tape',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>
											<h2><?php echo get_the_title() ?></h2>
											<p class="desctext">
												<?php echo the_content() ?>
											</p>
									<?php
endwhile;
wp_reset_postdata();
?>
					<a href="/?cat=53" class="button">进一步了解 ></a>
			</div>
<div class="col-md-7">
		<div class="booklist">

<?php
$postargs = array(
    'posts_per_page' => 8,
    'category_name' => 'mflhj,dfdslyj,jgj,gsypspmp',
    'orderby' => 'date',
    'order' => 'DESC',
);
$query3 = new WP_Query($postargs);
$n = 0;
while ($query3->have_posts()): $query3->the_post();

    ?>
						<a href="<?php echo get_the_permalink(); ?>">
							<div class="booktitle"><?php echo get_the_title(); ?></div>
							<img src="/wp-content/themes/twentysixteen/img/book.jpg"></a>
					<?php
endwhile;
wp_reset_postdata();
?>

								</div>
						</div>
				</div>
		</div>
<?php get_footer();?>
