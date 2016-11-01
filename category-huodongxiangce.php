<?php
/*
Template Name: 活动相册模版
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
        <?php echo do_shortcode('[album id=2 template=xc]'); ?>
        </div>
    </section>
</div>
<?php get_footer();?>
