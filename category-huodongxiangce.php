<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();?>

<div class="songjing huodongxiangce">
    <div class="nav">
        <div class="container">
            <h1 class="title">
                感受活动现场
            </h1>
            <p class="intro" style="text-align: center;">
                "周日诵经会项目"在2015年初开始做的时候,是作为信息中心的内部学修。
            </p>
        </div>
    </div>
    <section>
        <div class="container">
           <?php
if (function_exists('nggSlideshowWidget')) {
    nggSlideshowWidget(1, 320, 200);
}
?>

        </div>
    </section>
</div>

<?php get_footer();?>
