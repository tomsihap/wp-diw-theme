
<?php get_header(); ?> 

    <section id="content mt-5">

    <div class="row">
        <!-- Posts -->
        <div class="col-8">
            <?php   if ( have_posts() ) : ?>
            <?php       while ( have_posts() ) : the_post(); ?>

                        <div class="card mt-3">
                            <h3>

                                <?php the_shortlink( get_the_title() ); ?>

                                (<?php the_category(   get_the_title()   ); ?>)
                            </h3>
                            <small><?php the_author(); ?> - Rédigé le <?php the_date(); ?> à <?php the_time(); ?></small>
                            <p><?php the_excerpt(); ?></p>

                        </div>

            <?php      endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <div class="col-4">
            <?php if (is_active_sidebar('sidebar-1')): ?>

                <div class="card">
                
                    <?php dynamic_sidebar('sidebar-1'); ?>

                </div>

            <?php endif;?>
        </div>
    </div>

   

    </section>

<?php get_footer(); ?>