<div class="head">
    <h1 class="post-title"><?php
		if ( is_search() ) {
			printf( __( '[:en]You searched for: [:es]Buscaste: [:ua]Пошук по: [:ru]Поиск по: [:] %s', 'valorservice' ), get_search_query() );
		} elseif ( is_404() ) {
			printf( __( '[:en]Error 404: Page not found[:es]Error 404 - Página no encontrada[:ua]Error 404 - Сторінку не знайдено[:ru]Error 404 - Страница не найдена[:]' ) );
		} else {
			the_title();
			edit_post_link( __( '[:en]Edit[:es]Editar[:ua]Редагувати[:ru]Редактировать[:]' ), '<span class="edit-link">', '</span>' );
		}
		?></h1>
    <a class="chat_link"
       href="/"><?php _e( '[:en]Live chat support[:es]Soporte chat en vivo[:ua]Чат підтримка[:ru]Чат поддержка[:]' ); ?></a>
</div>
<?php echo do_shortcode( '[yoast-breadcrumb]' ); ?>

