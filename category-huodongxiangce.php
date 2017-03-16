<?php
/*
Template Name: 活动相册模版
 */
get_header();?>
<style>
    .songjing .nav h1.title{
        font-size: 55px;
    }
</style>
<div class="songjing huodongxiangce">
    <div class="nav">
        <div class="container">
            <h1 class="title">
                感受活动现场
            </h1>
            <p class="intro" style="text-align: center;">
                三宝地，僧俗众。法师领众在前，共启无上法门。君今有缘至此，云何竟又空回？
            </p>
        </div>
    </div>
    <section>
        <div class="container">
        <h1 id="title" style="text-align: center;margin-bottom: 30px;"></h1>

        <?php echo do_shortcode('[album id=1 template=xc]'); ?>
        </div>
    </section>
</div>

<script type="text/javascript">
$(document).ready(function() {
         $('#title').text(getQueryString('title'));
        function getQueryString(name) {
             var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return decodeURI(r[2]); return null;
        }

});
</script>
<?php get_footer();?>
