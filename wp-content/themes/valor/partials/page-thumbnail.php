<?php
$thumb = get_the_post_thumbnail_url( get_the_ID() );
if ( is_search() || is_archive() ) {
	?>
    <a href="<?php the_permalink(); ?>">
	<?php
}
if ( ! empty( $thumb ) ) {
	?>
    <div class="thumbnail"><img src="<?php echo $thumb; ?>" alt=""/></div>
	<?php
}
elseif(is_search() || is_archive()){
	?>
    <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""/></div>
	<?php
}
if ( is_search() || is_archive()  ) {
	?>
    </a>
	<?php
}
