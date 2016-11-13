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
										<h1><?php echo get_the_title() ?></h1>
										<hr>
										<p><?php echo get_the_excerpt() ?></p>
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
																					<p class="peitu-desc"><?php echo get_the_excerpt() ?></p>
																				</div>
																			</a>

																	<?php
endwhile;
wp_reset_postdata();
?>


		</div>
		<div class="container-fluid content-block content-gray">
		<div class="container">
			<div class="col-md-5">
				<h2>何为诵经</h2>
				<p class="desctext">诵经，代佛说法，众生欢喜，天神护佑。诵经，其音正直，其音和雅，其音清彻，其音深满，周遍远闻。无声化有声，口读耳听，口耳并用，深刻体会佛经的音韵美、节奏美、气势美和义理之美。认识佛陀深妙智慧，了解佛陀真实本义。诵经持咒乃修行之法，犹如扫尘除垢的工具。诵经持咒，可收拢散乱心识，开发心智，净烦恼、趣菩提。让我们一起共得佛陀摄受，认识佛陀深妙智慧，品味无上妙法甘露味，消除业障，破除迷暗，增长智慧，愉悦身心，洞彻宇宙人生的真相，诸恶莫作，众善奉行，自净其意，最终了脱生死，成就佛道。诵经是因，成佛是果！
				</p>
				<a href="/?cat=54" class="button">进一步了解 ></a>
			</div>
			<div class="col-md-7">

			<?php
$postargs = array(
    'posts_per_page' => 2,
    'category_name' => 'songjinghuodong',
    'orderby' => 'date',
    'order' => 'desc',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>

												 <a href="<?php echo get_the_permalink(); ?>">
													<div class="col-md-6">
														<img src="<?php echo get_the_post_thumbnail_url(null, array(300, 183)) ?>">
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
				<h2>感受活动现场</h2>
				<p class="desctext">
					三宝地，僧俗众<br/>
					一一合掌，你我身虽世俗，心系菩萨，各自显庄严；<br/>
					一一叩头，你我跪天跪地，累世父母，难报其深恩；<br/>
					一一观想，忆念佛陀贤圣，遍及十方，大光明无量；<br/>
					一一俯首，奉请无上经宝，净业除障，涤心又滤尘；<br/>
					一一念诵，口念耳闻心持，无我无他，共业便相连。<br/>
					法师领众在前，<br/>
					共启无上法门。<br/>
					君今有缘至此，<br/>
					云何竟又空回？<br/>
					周日诵经会，<br/>
					期待与您相约。<br/>
				</p>
				<a href="/?page_id=2473" class="button">进一步了解 ></a>
			</div>
			<div class="col-md-7">
				 <?php echo do_shortcode('[album id=1 template=home]'); ?>
			</div>
			<div class="col-md-12">
				<hr>
			</div>
			<div class="col-md-5">
				<h2>诵经心得分享</h2>
				<p class="desctext">炉香苒苒，梵音朗朗，罄声阵阵，大义洋洋。诵经，不只在深山古刹，也可在红尘凡间；诵经，不仅能与智者同行，也可与慧者同愿。点击这里，您可洞见不一样的风景，开启不一样的人生！读读这些心得，平凡间，您会发现更多的精彩，获得更多的智慧，涤荡更多的无明。</p>
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
                                        <h2>诵经录音</h2>
                                        <p class="desctext">这个活动的特点是“固定”，固定在周日上午九点，固定诵经一卷。慢慢形成人的一种习惯，一种潜意识。让受众
脑子里有一个固定的认识，就是每周日上午九点，龙泉寺一定在诵一卷经。做网络直播同样是这种理念，无论在天涯海角，不管是风吹雨打，只要是周日上午九点，打开一个网页就
可以和大家一起诵经。就像在西方人的文化中，周日上午固定是教堂礼拜时间一样，每周日上午九点，大家都可以回归佛教信仰生活，回归传统的修行方式。</p>
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
