<?php

/**
 * Iframe block
 */

$paste_the_map_iframe = get_sub_field('paste_the_map_iframe');
?>

<?php if (!empty($paste_the_map_iframe)) { ?>
<div class="map_section">
    <div class="map_inner">
        <?php echo html_entity_decode(esc_html($paste_the_map_iframe)); ?>
    </div>
</div>
<?php } ?>