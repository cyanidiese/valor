<?php
the_posts_pagination(
	[
		'screen_reader_text' => __( '[:en]Navigation[:es]Navegación[:ua]Навігація[:ru]Навигация[:]', 'valorservice' ),
		'prev_text' => __( '[:en]Previous page[:es]Pagina anterior[:ua]Попередня сторінка[:ru]Предыдущая страница[:]', 'valorservice' ),
		'next_text' => __( '[:en]Next page[:es]Siguiente página[:ua]Наступна сторінка[:ru]Следующая страница[:]', 'valorservice' )
	]
);
