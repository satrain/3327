<?php
    get_header();
?>

<div class="not-found-container">
    
    <h1>Error 404</h1>
    <h2>Damn, you sir are pushing things far! 
        <br>
        You found our top secret laboratory.</h2>
    <p>But guess what you didn’t find?</p>
    <p>That page you were looking for. Smarty-pants!</p>
    <a href="<?php _e(get_site_url()); ?>" class="btn">go back to home</a>
    <div class="not-found-image"></div>
</div>

<?php get_footer('privacy-policy'); ?>