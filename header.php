<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="title" content="3327 - Web3 tech incubator">
        <meta name="description" content="3327 is a program made to encourage and foster idea generation and experimentation to achieve breakthroughs in the Web 3.0 industry.">
        <meta name="keywords" content="Web3, incubator, experiments, blockchain, smart contracts, zero-knowledge proofs">

        <meta property="og:title" content="3327 - Web3 tech incubator" />
        <meta property="og:description" content="3327 is a program made to encourage and foster idea generation and experimentation to achieve breakthroughs in the Web 3.0 industry." />
        <meta property="og:image" content="https://3327.io/wp-content/themes/3327/assets/images/OGI.png" />

        <title>3327 - Web3 tech incubator</title>
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <!-- AOS cdn -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <a href="<?php echo get_site_url(); ?>"><div class="header-logo"></div></a>
            <nav class="header-con">
                <ul>
                    <li class="h-about"><a href="about">about</a></li>
                    <li class="h-projects"><a href="projects">projects</a></li>
                    <!-- discord link  -->
                    <li class="h-community"><a href="https://discord.gg/ZWZ9Jk77vt" target="_blank">community +</a></li>
                    <!--<li class="h-blog"><a href="#">blog</a></li>-->
                    <button class="header-button" onclick="window.location.href='<?php echo get_site_url(); ?>/contact/'">join us</button>
                </ul>
            </nav>
            
            <!-- Hamburger (burger) for the navigation beyond 1024px - Mobile and Tablet -->
            <div style="display: none;" id="hamburger">
                <div class="burger burger-squeeze">
                    <div class="burger-lines"></div>
                </div>
            </div>

            <!-- Mobile Navigation -- toggles on hamburger click -->
            <div class="nav-mobile-modal">
                <nav>
                    <ul>
                    <li class="h-about"><a href="about">about</a></li>
                    <li class="h-projects"><a href="projects">projects</a></li>
                    <!-- discord link  -->
                    <li class="h-community"><a href="https://discord.gg/ZWZ9Jk77vt" target="_blank">community +</a></li>
                    <!--<li class="h-blog"><a href="#">blog</a></li>-->
                    <button class="header-button" onclick="window.location.href='<?php echo get_site_url(); ?>/contact/'">join us</button>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="contact-modal">
            <div class="contact-modal-content">
            <span class="close-contact-modal">x</span>
                <form class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="24" title="Main Contact Form"]'); ?>
				</form>
            </div>
        </div>