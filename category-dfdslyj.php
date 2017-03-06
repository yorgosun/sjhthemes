<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();?>

<div class="songjing ebook">
    <div class="nav">
        <div class="container">
            <h1 class="title">
                现场录音,电子经文
            </h1>
            <p class="intro" style="text-align: center;">
                亲近、熏习佛陀的智慧，犹如在暗夜中点灯，于尘垢处扫净。愿指尖开启智慧，耳觉触动心灵。
            </p>
        </div>
    </div>
    <section>
        <div class="container">


        <ul class="tab">
        <li class="tab-d" data-name="tab1">
                    <a href="/?cat=219"><span>大方广佛华严经</span></a>
                </li>
               <li class=" tab-d" data-name="tab1">
                    <a href="/?cat=80"><span>妙法莲华经</span></a>
                </li>
                       <li class=" tab-d" data-name="tab1">
                    <a href="/?cat=83"><span>金刚般若波罗蜜经</span></a>
                </li>
                <li class="current tab-d" data-name="tab2">
                    <a href="/?cat=81"><span>大佛顶首楞严经</span></a>
                </li>
                <li class="tab-d" data-name="tab3">
                    <a href="/?cat=82">
                        <span>
                            观世音菩萨普门品
                        </span>
                    </a>
                </li>
            </ul>


            <div class="tab4 tab-item" style="margin-top: 20px;">
                <ul class="book">

<?php
wp_reset_postdata();
$postargs = array(
    'posts_per_page' => 10,
    'category_name' => 'dfdslyj',
    'orderby' => 'date',
    'paged' => get_query_var('paged'),
    'order' => 'DESC',
);
$query = new WP_Query($postargs);
$n = 0;
while ($query->have_posts()): $query->the_post();?>
																		<li>
																		<div class="cover">
																		<a href="<?php echo get_the_permalink(); ?>">
																		<img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200">
																		</a>
																		<a href="<?php echo get_post_meta(get_the_id(), '下载', true) ?>" class="downBtn">下载</a>
																		</div>
																		<div class="info">
																		<a href="<?php echo get_the_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
																		<p>
																		<span class="title">全名:</span>
																		<span><?php echo get_post_meta(get_the_id(), '全名', true) ?></span>
																		</p>
																		<p>
																		<span class="title">又名:</span>
																		<span><?php echo get_post_meta(get_the_id(), '又名', true) ?></span>
																		</p>
																		<p>
																		<span class="title">摘要:</span>
																		<span style="display: inline-block;float: right;width: 660px;">
																		<?php echo get_the_excerpt() ?>
																		</span>
																		</p>
																		</div>
																		</li>
																		<?php
endwhile;
wp_reset_postdata();
?>


                </ul>
                <?php
wp_pagenavi();
?>
            </div>
        </div>
    </section>
</div>

<?php get_footer();?>
