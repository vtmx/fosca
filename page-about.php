<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<main role="main">
    <h1 class="title">Bio</h1>
    <?php if ( get_field('about-description') ): ?>
        <div class="description">
            <?php the_field('about-description'); ?>
        </div>
    <?php endif; ?>
</main>

<?php get_template_part('footer'); ?>
