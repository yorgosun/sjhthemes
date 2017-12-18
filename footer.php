<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
		<div class="container-fluid content-block content-darkgray footer foot-pisition">
			<div class="container">
				<?php
if (is_home()) {
    get_template_part('template-parts/footer', 'index');
}
?>
				<div class="col-md-12">
                    <a href="https://www.qingcloud.com"><p><img src="/wp-content/themes/twentysixteen/img/qingyun.png" height="60">本网站云服务由青云提供赞助</p></a>
					<p class="copyright">Copyright 2016 @龙泉寺弘宣部 京ICP备09021374号 京公网安备 110108007888 号</p>
				</div>
			</div>
		</div>

		<?php if (is_home() || is_category() || is_tag() || is_page()): ?>
		<script type="text/javascript">
			$('#myCarousel').carousel({
				interval: 5000
			});

			$(function() {
				var win = $(window);
				win.on("scroll", function() {
					$(document).scrollTop() > 0 ? $("nav").addClass("nav-gray-bg") : $("nav").removeClass("nav-gray-bg")
				});
			});

		</script>
		<?php endif;?>

<?php if (is_category("songjinghuodong")): ?>
<script>

$(document).ready(function(){

    $('.tab-d').unbind('click.tab').bind('click.tab',function(){

        // 获取tab选项

        var tab_name = $(this).attr('data-name');

        $('.tab-d').removeClass('current');

        $(this).addClass('current');

        var tabs = $('.tab-item');


        tabs.each(function(i,item){

            $(item).css({
                display:'none'
            });

            $('.'+tab_name).css({
                display:'block'
            });
        });


    })
});

</script>
<?php endif;?>
<?php wp_footer();?>
</body>
</html>
