<?php
    /* Template Name: About us */
    get_header();
?>
<main>
    <!-- About us hero -->
    <div class="about-us-hero">
        <div class="about-us-hero-content">
            <div class="about-us-hero-copy">
                <h1>about us.</h1>
                <h2>We're experimenting with Web 3.0 technologies.</h2>
                <br>
                <a href="<?php _e(get_site_url()); ?>/contact/" class="btn" id="about-us-btn">work with us</a>
            </div>
            <div class="about-us-hero-mock">
                <div class="circle right-circle about-us-hero-circle">
                    <div class="person person-one-hand"></div>
                    <div class="person person-two-hand"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- What are we looking for | wawlf -->
    <div class="what-are-we-looking-for">
        <div class="wawlf-content">
            <div class="wawlf-copy">
                <h2>What are we looking for</h2>
                <p>- Solutions to the problems we face as a community gathered around a new Web.</p>
                <p>- Better understanding of the technology, its capabilities, and ways we can use it to make progress.</p>
                <p>- New ideas that can propel Web 3.0 forward.</p>
            </div>
            <div class="wawlf-mock">
                <div class="circle right-circle wawlf-circle">
                    <div class="person person-right person-with-the-flag"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Join this forward-thinking, tall and handsome crew!
         About us CTA -->
    <div class="about-us-cta">
        <div class="about-join-us">
            <h2>Join this forward-thinking, tall and <br>handsome crew!</h2>
            <p>The worst thing that can happen is we mess everything up and <br>epically fail.</p>
            <button class="btn about-join-us-btn" onclick="window.open('https://discord.gg/ZWZ9Jk77vt', '_blank')">join us</button>
        </div>
    </div>

    <!-- We believe in -->
    <div class="we-believe-in">
        <div class="we-believe-in-content">
            <div class="we-believe-in-mock">
                <div class="circle left-circle we-believe-in-circle">
                    <div class="person person-left person-who-is-walking"></div>
                </div>
            </div>
            <div class="we-believe-in-copy">
                <h2>We believe in</h2>
                <h3>Collaboration and teamwork.</h3>
                <p>They greatly contribute to learning and growth.</p>
                <h3>Decentralization.</h3>
                <p>We see blockchain as an enabler of decentralization ideas.</p>
                <h3>Open standards and knowledge sharing.</h3>
                <p>We are enthusiastic about learning and are looking to foster a life-long learning process.</p>
            </div>
        </div>
    </div>

    <!-- Our values -->
    <div class="our-values">
        <div class="our-values-content">
            <div class="our-values-copy">
                <h2>Our values</h2>
                <h3><b>Stake</b> in the game over consulting</h3>
                <h3><b>Change</b> over progress</h3>
                <h3><b>Utility</b> over beauty</h3>
                <h3><b>Speed</b> over consistency</h3>
                <h3><b>Idea</b> over realisation</h3>
                <h3><b>Iteration</b> over perfection</h3>
            </div>
            <div class="our-values-mock">
                <div class="circle circle-left our-values-circle">
                    <div class="our-values-figure-ball"></div>
                    <div class="our-values-figure-square"></div>
                    <div class="our-values-figure-cylinder"></div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>