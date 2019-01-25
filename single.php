
<?php get_header(); ?> 

    <section id="content mt-5">

    <?php   if ( have_posts() ) : ?>
    <?php       while ( have_posts() ) : the_post(); ?>

                <div class="card mt-3">
                    <h3>

                        <?php the_shortlink( get_the_title() ); ?>

                        (<?php the_category(   get_the_title()   ); ?>)
                    </h3>
                    <small><?php the_author(); ?> - Rédigé le <?php the_date(); ?> à <?php the_time(); ?></small>
                    <p><?php the_content(); ?></p>

                    <div class="card-footer">
                        <?php previous_post_link(); ?>

                        <div class="float-right">
                            <?php next_post_link(); ?>
                        </div>

                    </div>
                </div>

    <?php      endwhile; ?>
    <?php endif; ?>

    </section>

<?php get_footer(); ?>