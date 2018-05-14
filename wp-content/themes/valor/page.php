<?php get_header();

$args     = array(
	'sort_order'   => 'asc',
	'sort_column'  => 'menu_order',
	'hierarchical' => 1,
	'authors'      => '',
	'child_of'     => 0,
	'parent'       => get_the_ID(),
	'post_type'    => 'page',
	'post_status'  => 'publish'
);
$children = get_pages( $args );

?>

<div id="content">

    <div class="content_wrap">

		<?php

		get_template_part( 'partials/page', 'top' );

		if ( empty( $children ) ) {

			get_template_part( 'partials/page', 'content' );

		}
		?>

    </div>

	<?php

	if ( ! empty( $children ) ) {
		get_template_part( 'partials/page', 'children' );
	}

	?>
</div>

<?php get_footer(); ?>
