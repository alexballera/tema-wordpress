<?php get_header(); ?>
    <article class="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><em><?php the_time('l, j F Y'); ?></em></p>
            <hr>
        <?php endwhile; else: ?>
          <p><?php _e('Lo siento, esta página no existe.'); ?></p>
        <?php endif; ?>
    </article>
<?php get_footer(); ?>