        <footer role="contentinfo">
            Developer & Designer by <a href="http://vitormelo.com.br">Vitor Melo</a>
        </footer>

        <!-- Scripts -->
        <script src="<?php bloginfo( 'template_url' ); ?>/dist/js/script.js"></script>

        <?php if ( get_field('home-slider-timeout') || get_field('home-slider-speed') ): ?>
            <script>
                    // Responsive Slides
                    // -----------------------------------------------------------------------------
                    $('.home .cover').responsiveSlides({
                        <?php if ( get_field('home-slider-timeout') ): ?>
                            timeout: <?php the_field('home-slider-timeout') ?>,
                        <?php endif; ?>

                        <?php if ( get_field('home-slider-speed') ): ?>
                            speed: <?php the_field('home-slider-speed') ?>,
                        <?php endif; ?>
                        namespace: 'cover'
                    });
            </script>
        <?php endif; ?>
    </body>
</html>
