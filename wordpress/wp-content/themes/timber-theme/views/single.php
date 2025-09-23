<?php get_header(); ?>
<?php
    $context = Timber::context();
    Timber::render('twig/single.twig', $context);
?>
<?php get_footer(); ?>
