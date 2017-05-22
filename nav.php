<button class="toggle-menu" type="button" aria-expanded="false"><span>toggle menu</span></button>

<nav role="navigation" aria-expanded="false">
    <!-- <ul>
        <li><a <?php if( is_page( 'about'   ) ) { echo 'class="current"'; } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>about">About</a></li>
        <li><a <?php if( is_page( 'work'    ) ) { echo 'class="current"'; } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>work">Work</a></li>
        <li><a <?php if( is_page( 'news'    ) ) { echo 'class="current"'; } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>news">News</a></li>
        <li><a <?php if( is_page( 'contact' ) ) { echo 'class="current"'; } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="contact">Contact</a></li>
    </ul> -->

    <?php
        wp_nav_menu( array(
            'menu'           => 'Main Menu',
            'theme_location' => 'menu_main',
            'container'      => ''
        ));
    ?>
</nav>

<a class="instagram" href="https://www.instagram.com/foscaworld/" title="Visit my instagram" target="_blank">
    <svg class="icon icon-instagram" aria-hidden="true"><use xlink:href="#icon-instagram"></use></svg>
</a>
