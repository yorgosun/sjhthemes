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
<style>
.box {
    border: 1px solid #f1f1f1;
    white-space: normal;
    position: relative;
    overflow: hidden;
    height: 45px;
    margin: 10px;
}
.box .title {
    background-color: #f1f1f1;
    height: 35px;
    line-height: 35px;
    padding: 5px;
    font-size: 18px;
}

.box p {
    word-break: break-all;
    padding: 5px;
    text-indent: 2em;
    font-size: 16px;
    line-height: 30px;
}

.box .expand {
    color: #bbbbbb;
    width: 45px;
    height: 45px;
    position: absolute;
    right: 0px;
    top: 0px;
    line-height: 45px;
    font-size: 25px;
    text-align: center;
    cursor: pointer;
    transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
</style>
<div class="songjing">
	<div class="nav">
		<div class="container">
			<h1 class="title">
			诵经心得分享,感悟佛法
			</h1>
			<p class="intro" style="text-align: center;">炉香苒苒，梵音琅琅，罄声阵阵，大义洋洋。诵经，不只在深山古刹，也可在红尘凡间</p>
		</div>
	</div>
	<div class="container">

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
		<div class="box" cid="<?php echo get_the_id(); ?>">
		<div class="title"><?php echo get_the_title(); ?></div>
		<p><?php echo the_content() ?></p>
		<div class="expand">»</div>
		</div>
		<?php
endwhile;
wp_reset_postdata();
wp_pagenavi();
?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.expand').click(function() {
        var expand = $(this);

        if (!expand.attr('open')) {
            expand.css('transform', 'rotate(-90deg)');
            expand.attr('open', true);
            expand.parent().animate({
                height: "100%"
            });

            $(".box").each(function() {
                if ($(this).attr('cid') != expand.parent().attr('cid')) {

                    $(this).find('.expand').css('transform', 'rotate(90deg)');
                    $(this).find('.expand').attr('open', false);
                    $(this).animate({
                        height: "45px"
                    });
                }
            });

        } else {
            expand.css('transform', 'rotate(90deg)');
            expand.attr('open', false);
            expand.parent().animate({
                height: "45px"
            });
        }


    });
});
</script>

<?php get_footer();?>
