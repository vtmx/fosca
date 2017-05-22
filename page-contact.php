<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<main role="main">
    <?php if ( get_field('contact-email') ): ?>
        <a class="link" href="mailto:<?php the_field('contact-email'); ?>"></a>
    <?php endif; ?>

    <div class="cover">
        <?php if ( get_field('home-slider') || get_field('home-video') ): ?>

            <?php $images = get_field('home-slider'); ?>

            <?php // If slide and video, show slide ?>
            <?php if( get_field('home-slider') && !get_field('home-video')  ): ?>
                <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endforeach; ?>
            <?php elseif ( get_field('home-video') && !get_field('home-slider') ): ?>
                 <?php if( get_field('home-video-loop') == 'yes' ): ?>
                    <video preload="auto" autoplay loop src="<?php the_field('home-video'); ?>"></video>
                <?php else: ?>
                    <video preload="auto" autoplay src="<?php the_field('home-video'); ?>"></video>
                <?php endif; ?>
            <?php else: ?>
                <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="Slider">
                <?php endforeach; ?>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</main>

<?php get_template_part('footer'); ?>
