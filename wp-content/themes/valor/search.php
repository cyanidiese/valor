<?php get_header(); ?>

<div id="content">

    <div class="content_wrap">

		<?php

		get_template_part( 'partials/page', 'top' );


		if ( have_posts() ) {

			while ( have_posts() ) {

				the_post();

				get_template_part( 'partials/page', 'content' );

			}

			get_template_part( 'partials/part', 'navigation' );

		}

		?>

    </div>
</div>

<?php get_footer(); ?>
