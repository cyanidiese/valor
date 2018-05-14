<?php
/* Template Name: SiteMap */

get_header();

?>

<div id="content">

    <div class="content_wrap">

		<?php

		get_template_part( 'partials/page', 'top' );

		?>

        <div class="content_inner" class="">
			<?php
			$thumb = get_the_post_thumbnail_url( get_the_ID() );
			if ( ! empty( $thumb ) ) {
				?>
                <div class="thumbnail"><img src="<?php echo $thumb; ?>" alt=""/></div>
				<?php
			}
			?>
            <div class="text-content <?php echo ( ! empty( $thumb ) ) ? 'has-thumbnail' : '' ?>">
				<?php the_content(); ?>
                <ul class="sitemap">
					<?php
					wp_list_pages( [
						               'title_li' => ''
					               ] );

					?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>


    </div>
</div>

<?php get_footer(); ?>
