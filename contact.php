<?php
    /* Template Name: Contact */
    get_header();
?>
<main>
    <div class="contact-hero">
        <div class="contact-hero-content">
            <h1>How can we help you?</h1>
            <h4>Get in touch with us and we'll get <br>back to you as soon as possible.</h4>
				<?php echo do_shortcode('[contact-form-7 id="27" title="Main Contact Form"]'); ?>
        </div>
    </div>

<?php get_footer(); ?>