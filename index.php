<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titre !</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <?php wp_head(); ?>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <section id="header">

                <h1>
                    <a href="<?php bloginfo('url'); ?>">
                        <?php bloginfo(); ?>
                    </a>
                </h1>

                <h2><?php bloginfo('description'); ?></h2>

                <hr>
            </section>

            <section id="content mt-5">

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

            </section>

            <section id="footer">
                <hr>
                <p>
                    Site développé par Thomas
                </p>
            </section>
        </div>
    </div>
</div>




    
</body>
</html>