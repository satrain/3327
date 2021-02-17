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
                    <option value="option1">Option1</option>
                    <option value="option2">Option2</option>
                    <option value="option3">Option3</option>
                    <option value="option4">Option4</option>
                </select>
                <input type="text" placeholder="your name">
                <input type="email" placeholder="your email">
                <input type="text" class="contact-input-text" placeholder="type your message here...">
                <button class="btn contact-btn">submit</button>
            </form>
        </div>
    </div>

<?php get_footer(); ?>