<?php get_header(); ?>
    <article class="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <h1><?php the_title(); ?></h1>
            <p><em><?php the_time('l, j F Y'); ?></em></p>
              <?php the_content(); ?>
              <hr>
            <?php comments_template(); ?>
        <?php endwhile; else: ?>
          <p><?php _e('Lo siento, esta página no existe.'); ?></p>
        <?php endif; ?>
    </article>
<?php get_footer(); ?>