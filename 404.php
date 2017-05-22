<?php get_template_part('header'); ?>

<?php get_template_part('nav'); ?>

<main>
    <h2>Error 404</h2>
    <p>This page doesn't exist.</p>
    <p><a href="<?php echo esc_url( home_url( ) ); ?>/work">Home</a></p>
</main>

<?php get_template_part('footer'); ?>
