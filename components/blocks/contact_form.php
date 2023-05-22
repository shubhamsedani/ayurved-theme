<?php

/**
 * Contact form block
 */

?>

<?php if (gravity_form(1, false, false, false, '', true)) { ?>
    <div class="gallery_section gallery pt--100 pb--100">
        <div class="container">
            <div class="main-title">
                <h2 class="title-default">Get In Touch</h2>
            </div>
            <div class="row row-gap-15">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php gravity_form(1, false, false, false, '', true); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
