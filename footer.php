
        <div class="newsletter">
            <div class="newsletter-content">
                <div class="newsletter-cylinder"></div>
                <h2>Something is cooking in 3327's kitchen.</h1>
                <p>Subscribe to our newsletter to receive news and important information about our experiments.</p>
                <form action="" class="newsletter-form">
                    <?php echo do_shortcode('[mc4wp_form id="25"]'); ?>
                </form>
                <div class="newsletter-cube"></div>
            </div>
        </div>
        
        <footer>
            <div class="footer-shortcuts">
                <div class="footer-logo"></div>
                <div class="left-footer-list">
                    <ul>
                        <li><h4>explore</h4></li>
                        <li><a href="<?php _e(get_site_url()); ?>/about/">about</a></li>
                        <li><a href="<?php _e(get_site_url()); ?>/projects/">projects</a></li>
                        <li><a href="#">blog</a></li>
                    </ul>
                </div>
                <div class="right-footer-list">
                    <ul>
                        <li><h4>join us</h4></li>
                        <li><a href="<?php _e(get_site_url()); ?>/contact/">get in touch</a></li>
                        <li><a href="https://discord.gg/ZWZ9Jk77vt" target="_blank">discord community</a></li>
                        <li><a href="<?php _e(get_site_url()); ?>/privacy-policy/">privacy-policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyright">
                <p>Made with ❤️ for blockchain community by humans from <br><a href="https://mvpworkshop.co/" target="_blank">MVP Workshop</a>.</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>