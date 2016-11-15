<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();?>
<style>
    .songjing .nav h1.title{
        font-size: 55px;
}
</style>
<div class="songjing songjingxinde">
    <div class="nav">
        <div class="container">
            <h1 class="title">
                诵经心得分享,感悟佛法
            </h1>
            <p class="intro" style="text-align: center;">
                炉香苒苒，梵音朗朗，罄声阵阵，大义洋洋。诵经，不只在深山古刹，也可在红尘凡间
            </p>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="tab1 tab-item">
                <div class="currentActivity">
                    <ul class="activities" style="margin-top: 20px;">

<?php
			wp_reset_postdata();
                        $postargs = array(
                                'posts_per_page' => 9,
                                'category_name' => 'songjingxinde',
                                'meta_query' => array(array('key' => '_thumbnail_id')),
                                'orderby' => 'date',
 				'paged' => get_query_var('paged'),
                                'order' => 'DESC'
                        );
                        $query = new WP_Query( $postargs );
                        $n = 0;
                        while ( $query->have_posts() ) : $query->the_post();
//图片的尺寸要在common.css里调整，下面img暂时先写样式

?>
			<li class="item">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <img  style="height:200px" src="<?php echo get_the_post_thumbnail_url(null, array(300,183)) ?>">
                            <h5><?php echo get_the_title(); ?></h5></a>
                            <p><?php echo get_post_meta(get_the_id(), 'author', true) ?> <?php the_time('Y-m-d') ?></p>
                        </li>

				<?php
endwhile;
wp_reset_postdata();
?>

                    </ul>
                </div>
<?php
wp_pagenavi();
?>

            </div>


        </div>



    </section>
</div>

<?php get_footer();?>
