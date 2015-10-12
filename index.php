<?php get_header(); ?>

 <ul>
<?php $query = new WP_Query( array( 'post_type' => 'post' ) ); ?>
<?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <li><a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></li>
    <div><?php the_excerpt() ?></div>
    <?php endwhile; ?>
<?php else : ?>
    <li><?php _e( 'Sorry, no posts matched your criteria.' ) ?></li>
<?php endif; wp_reset_postdata(); ?>
</ul>


<?php get_footer(); ?>