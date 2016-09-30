<?php
/**
Template Page for the gallery overview

Follow variables are useable :

$gallery     : Contain all about the gallery
$images      : Contain all images, path, title
$pagination  : Contain the pagination content

You can check the content when you insert the tag <?php var_dump($variable) ?>
If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
 **/
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery-foxibox-0.2.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-foxibox-0.2.min.js"></script>
<?php if (!defined('ABSPATH')) {
    die('No direct access allowed');
}
?><?php if (!empty($gallery)): ?>

<div  class="ngg-galleryoverview photoyjy" id="<?php echo $gallery->anchor ?>">

<?php if ($gallery->show_slideshow) {?>
	<!-- Slideshow link -->
	<div class="slideshowlink">
		<a class="slideshowlink" href="<?php echo nextgen_esc_url($gallery->slideshow_link) ?>">
			<?php echo $gallery->slideshow_link_text ?>
		</a>
	</div>
<?php }?>

	<!-- Thumbnails -->
    <?php $i = 0;?>
	<?php foreach ($images as $image): ?>

	<div id="ngg-image-<?php echo $image->pid ?>" class="ngg-gallery-thumbnail-box" <?php echo $image->style ?> >
		<div class="ngg-gallery-thumbnail" >
			<a rel="[gall1]" href="<?php echo nextgen_esc_url($image->imageURL) ?>"
               titlelqs="<?php echo esc_attr($image->alttext) ?>"
               <?php echo $image->thumbcode ?> >
				<?php if (!$image->hidden) {?>
				<img title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php echo $image->size ?> />
				<?php }?>
			</a>
		</div>
	</div>

    <?php if ($image->hidden) {
    continue;
}
?>
    <?php if ($gallery->columns > 0): ?>
        <?php if ((($i + 1) % $gallery->columns) == 0): ?>
            <br style="clear: both" />
        <?php endif;?>
    <?php endif;?>
    <?php $i++;?>

 	<?php endforeach;?>

	<!-- Pagination -->
 	<?php echo $pagination ?>

</div>
<script type="text/javascript">
$(document).ready(function(){
	$.browser = {
    mozilla: /firefox/.test(navigator.userAgent.toLowerCase()),
    webkit: /webkit/.test(navigator.userAgent.toLowerCase()),
    opera: /opera/.test(navigator.userAgent.toLowerCase()),
    msie: /msie/.test(navigator.userAgent.toLowerCase())
};
  $('a[rel]').foxibox();
});
</script>
<?php endif;?>
