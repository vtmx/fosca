<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<main role="main">
    <?php $drawings_image  = get_field('work-drawings-image'); ?>
    <?php $paintings_image = get_field('work-paintings-image'); ?>

    <style>
        .drawings {
            background-image: url(<?php echo $drawings_image['url']; ?>);
        }

        .paintings {
            background-image: url(<?php echo $paintings_image['url']; ?>);
        }
    </style>

    <?php if ( $drawings_image ):  ?>
        <a class="drawings" href="<?php echo esc_url( home_url( ) ); ?>/drawings">
            <h2 class="title">drawings</h2>
        </a>
    <?php endif; ?>

    <?php if ( $paintings_image ):  ?>
        <a class="paintings" href="<?php echo esc_url( home_url( ) ); ?>/paintings">
            <h2 class="title">paintings</h2>
        </a>
    <?php endif; ?>
</main>

<?php get_template_part('footer'); ?>
