<?php

/**
 * Template Name: Page (Default)
 */

get_header();
$id = get_the_ID();

if (have_rows('blocks', $id)) {
    while (have_rows('blocks', $id)) {
        the_row();
        get_template_part('components/blocks/' . get_row_layout());
    }
}
?>

<?php
get_footer();
