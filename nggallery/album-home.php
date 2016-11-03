<?php $this->start_element('nextgen_gallery.gallery_container', 'container', $displayed_gallery);?>
<div class="ngg-albumoverview">
    <?php
$i = 0;
foreach ($galleries as $gallery) {
    if ($i > 3) {
        break;
    }

    ?>
        <div class="ngg-album-compact col-md-6">
            <div class="">
                <div class="ngg-album-link">
                    <?php $this->start_element('nextgen_gallery.album_gallery', 'item', $gallery);?>

                        <a class="Link gallery_link" href="<?php echo explode('?', $gallery->pagelink)[0]; ?>?page_id=2473">
                            <img class="Thumb"
                                 alt="<?php echo esc_attr($gallery->title); ?>"
                                 src="<?php echo nextgen_esc_url($gallery->previewurl); ?>"/>
                        </a>

                    <?php $this->end_element();?>
                </div>
            </div>
            <?php if (!empty($image_gen_params)) {
        $max_width = 'style="max-width: ' . ($image_gen_params['width'] + 20) . 'px"';
    } else {
        $max_width = '';
    }?>
            <h4>
                <a class="ngg-album-desc"
                   title="<?php echo esc_attr($gallery->title); ?>"
                   href="<?php echo explode('?', $gallery->pagelink)[0]; ?>?page_id=2473"
                    <?php echo $max_width; ?>>
                    <?php echo_safe_html($gallery->title);?>
                </a>
            </h4>

        </div>
    <?php
$i++;
}

?>
    <br class="ngg-clear"/>
    <?php echo $pagination ?>
</div>
<?php $this->end_element();?>
