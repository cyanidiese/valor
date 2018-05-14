<?php
/* Template Name: Contacts */

get_header();

?>

<div id="content">

    <div class="content_wrap">

		<?php

		get_template_part( 'partials/page', 'top' );

		?>

        <div id="contacts">

            <div id="contacts_right">

                <?php echo do_shortcode('[contact-form-7 id="54"]'); ?>

            </div>

            <div id="contacts_left">

                <div class="contacts_info geo">
                    2880 W 12th St<br>
                    suite #5<br>
                    Brooklyn, NY 11224
                </div>

                <div class="contacts_info tel">
                    (718) 484-8122<br>
                    (646) 966-8223
                </div>

                <div id="map"></div>

            </div>

            <div class="clear"></div>

        </div>

        <div class="clear"></div>


    </div>
</div>

<?php get_footer(); ?>
