<?php
    /* Template Name: Contact */
    get_header();
?>
<main>
    <div class="contact-hero">
        <div class="contact-hero-content">
            <h1>How can we help you?</h1>
            <h4>Get in touch with us and we'll get <br>back to you as soon as possible.</h4>
            <form action="" class="contact-form">
                <select>
                    <option value="joining-the-team">joining the team</option>
                    <option value="collaboration">collaboration</option>
                    <option value="supporting-3327">supporting 3327</option>
                    <option value="sponsoring-a-hackathon">sponsoring a hackathon</option>
                    <option value="building-an-innovative-product">building an innovative product</option>
                </select>
                <input type="text" placeholder="your name">
                <input type="email" placeholder="your email">
                <input type="text" class="contact-input-text" placeholder="type your message here...">
                <button class="btn contact-btn">submit</button>
            </form>
        </div>
    </div>

<?php get_footer(); ?>