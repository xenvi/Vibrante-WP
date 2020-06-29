

<footer>
    <div class="waves-wrapper-footer">
            <div class="wave-container-footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#374785" fill-opacity="1" d="M0,320L60,309.3C120,299,240,277,360,272C480,267,600,277,720,288C840,299,960,309,1080,288C1200,267,1320,213,1380,186.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
            </div>
        </div>
    <div class="container">
            <?php wp_nav_menu(
               array(
                   'theme_location' => 'footer-menu',
                   'menu_class' => 'footer-bar'
               )
            ); ?>
            <?php wp_nav_menu(
               array(
                   'theme_location' => 'social-menu',
                   'menu_class' => 'social-bar'
               )
            ); ?>
    </div>
    <div class="legal">
        <span>Copyright Niff 2020</span>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>