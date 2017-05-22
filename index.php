<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<div class="cover">
    <h1>Fosca's World</h1>
</div>

<main role="main">
    <aside class="category" role="complementary">
        <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>/news">News</a></h3>
        <?php
            wp_list_categories( array(
                'title_li' => '',
                'orderby' => 'id'
            ));
        ?>
    </aside>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php if ( get_field('news-media-align') == 'left' ): ?>
            <article class="post even">
        <?php else: ?>
            <article class="post odd">
        <?php endif; ?>

            <div class="media">
                <?php if ( get_field('news-media-type') == 'video' ): ?>
                    <video controls><source src="<?php the_field('news-media'); ?>"></video>
                <?php else: ?>
                    <img src="<?php the_field('news-media'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>

            <div class="content">
                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>

    <div class="navigation"><?php posts_nav_link(' &ndash; ', 'Next', 'Back'); ?></div>
</main>

<?php get_template_part('footer'); ?>
