<?php get_header(); ?>
<main id="slider">
    <div class="image-slider">
        <ul id="image-slider-ul">
            <?php foreach( get_field('images') as $image ) { ?>
                <li>
					<?php $image_url = wp_get_attachment_image_src($image['id'], 'large'); ?>
                    <div class="image-slide" style="background-image: url('<?php echo $image_url[0]; ?>');">
                        <div class="overlay">
                            <div class="overlay-left"></div>
                            <div class="overlay-center"></div>
                            <div class="overlay-right"></div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</main>
<main id="grid">
    <div class="grid">
        <?php $slide_number = 1; ?>
        <?php foreach( get_field('images') as $image ) { ?>
		<?php $image_url = wp_get_attachment_image_src($image['id'], 'large'); ?>
        <img data-slide="<?php echo $slide_number ?>" src="<?php echo $image_url[0]; ?>">
        <?php $slide_number++;  ?>
        <?php } ?>
    </div>
</main>
<?php get_footer(); ?>