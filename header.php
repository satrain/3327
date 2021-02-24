<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name=“title” content=“3327 - Web3 tech incubator”>
        <meta name=“description” content=“3327 is a program made to encourage and foster idea generation and experimentation to achieve breakthroughs in the Web 3.0 industry.“>
        <meta name=“keywords” content=“Web3, incubator, experiments, blockchain, smart contracts, zero-knowledge proofs”>

        <title>3327 - Web3 tech incubator</title>
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
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
                    <li class="h-community"><a href="#" target="_blank">community +</a></li>
                    <!--<li class="h-blog"><a href="#">blog</a></li>-->
                    <button class="header-button">join us</button>
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
                        <li><a href="about">about</a></li>
                        <li><a href="projects">projects</a></li>
                        <li><a href="contact">community +</a></li>
                        <!--<li><a href="#">blog</a></li>-->
                        <li><button class="header-button" onclick="window.location.href='#'">join us</button></li>
                    </ul>
                </nav>
            </div>
        </header>