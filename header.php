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