<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<a class="work-back" href="<?php echo esc_url( home_url( '/' ) ); ?>work"></a>

<main role="main">
    <?php get_template_part('works'); ?>
</main>

<?php get_template_part('footer'); ?>
