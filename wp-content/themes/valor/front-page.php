<?php get_header();

$children = get_field('page_blocks');
?>

<div id="header_bg">
    <div class="rslides_container">
        <ul class="rslides" id="slider">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div id="current_time_wrap">
        <div id="time_caption"><?php _e('[:en]Current Time in New York[:es]Hora actual en Nueva York[:ua]Поточний час у Нью Йорку[:ru]Текущее время в Нью Йорке[:]'); ?></div>
        <div id="current_time"></div>
    </div>
    <img id="logo" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
</div>

<div id="content">

    <div class="links_section top">
        <ul class="links_section">
		    <?php foreach ( $children as $child ) {
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


</div>


<?php get_footer(); ?>
