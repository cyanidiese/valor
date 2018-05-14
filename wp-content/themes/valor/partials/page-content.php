<div class="content_inner <?php echo ( is_search() || is_archive() ) ? 'archive-content' : '' ?>" class="">
	<?php
	get_template_part( 'partials/page', 'thumbnail' );
	?>
    <div class="text-content <?php echo ( ! empty( $thumb ) ) ? 'has-thumbnail' : '' ?>">
		<?php
		if ( is_search() || is_archive() ) {
			?>
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php edit_post_link( __( '[:en]Edit[:es]Editar[:ua]Редагувати[:ru]Редактировать[:]' ) );?>
        </h2>
			<?php
			the_content( __( '[:en]Read More[:es]Lee mas[:ua]Далі[:ru]Дальше[:]', 'valorservice' ) . ' >>', true );
		} else {
			the_content();
		}
		?>
    </div>
</div>
<div class="clear"></div>
