<div class="">
<?php global $children; ?>
<?php foreach ( array_chunk( $children, 4 ) as $i => $chunk ) { ?>
    <div class="subcats <?php echo ( $i % 2 ) ? 'cat_even_wrap' : '' ?>">
        <ul class="links_section">
			<?php foreach ( $chunk as $j => $child ) {
			    $link = get_permalink($child->ID);
			    $title = get_the_title($child->ID);
			    $image = get_the_post_thumbnail_url($child->ID);
				?>
                <li>
                    <a href="<?php echo $link;?>"><img src="<?php echo $image;?>"
                                                              alt="<?php echo esc_attr($title);?>"></a>
                    <div class="text_caption"><span><?php echo $title;?></span></div>
                    <a class="more_btn" href="<?php echo $link;?>">more</a>
                </li>
			<?php } ?>

        </ul>
        <div class="clear"></div>
    </div>
<?php } ?>
</div>
<div class="clear"></div>
