<?php $this->start_element('nextgen_gallery.gallery_container', 'container', $displayed_gallery);?>
<div class="ngg-albumoverview">
    <?php foreach ($galleries as $gallery) {
    ?>
        <div class="ngg-album-compact col-md-6">
            <div class="">
                <div class="ngg-album-link">
                    <?php $this->start_element('nextgen_gallery.album_gallery', 'item', $gallery);?>

                        <a class="Link gallery_link" test="<?php echo explode('?', $gallery->pagelink)[0]; ?>&page_id=2473" href="<?php echo nextgen_esc_url($gallery->pagelink); ?>">
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
                   href="<?php echo nextgen_esc_url($gallery->pagelink); ?>"
                    <?php echo $max_width; ?>>
                    <?php echo_safe_html($gallery->title);?>
                </a>
            </h4>

        </div>
    <?php }?>
    <br class="ngg-clear"/>
    <?php echo $pagination ?>
</div>
<?php $this->end_element();?>
