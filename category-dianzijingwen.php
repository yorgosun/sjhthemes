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
                诵经所需的电子书
            </h1>
            <p class="intro" style="text-align: center;">
                "周日诵经会项目"在2015年初开始做的时候,是作为信息中心的内部学修
            </p>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="tab4 tab-item" style="margin-top: 20px;">
                <ul class="book">

<?php
wp_reset_postdata();
$postargs = array(
    'posts_per_page' => 10,
    'category_name' => 'dianzijingwen',
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
			<a href="#" class="downBtn">下载</a>
			</div>
			<div class="info">
			<a href="<?php echo get_the_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
			<p>
			<span class="title">全名:</span>
			<span>大佛顶如来密因修证了义诸菩萨万行首楞严经</span>
			</p>
			<p>
			<span class="title">又名:</span>
			<span>大佛顶首楞严经、首楞严经</span>
			</p>
			<p>
			<span class="title">简介:</span>
			<span style="display: inline-block;float: right;width: 660px;">
			《楞严经》是佛教的一部极为重要的经典，可说是一部佛教修行大全，因为此经在内容上，包含了显密性相各方面的深刻道理；在宗派上则横跨禅净密律，均衡发挥，各得其所；在修行的次第上，则更是充实、圆满：举凡发心、解、行、证、悟，皆详尽剖析开示——从教令正发心起，经循循善诱的破惑、见真（明心见性）、依性起修（设坛结界、于实际上起正修行），并详细开示了一切凡圣境界（二十五圣圆通、三界七趣众生），令于圣境起企慕、而于凡外得知解，从而不受迷惑、不入歧途；又详述六十位修证（三渐次、干慧地、十信、十住、十行、十回向、四加行、十地、等觉、妙觉）令行者于菩提道上知所趣向；最后更广示五阴魔境，及其破除之法，俾于菩提道上，能克服魔怨留难，使所修圆满成就。
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
