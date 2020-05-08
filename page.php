<?php if( !empty(get_field('images')) ) {
    get_template_part('gallery');
} else { ?>
<?php get_header() ?>
<main id="page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; endif; ?>
</main>
    <?php } ?>
<?php get_footer(); ?>