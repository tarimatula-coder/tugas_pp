<?php
$section = isset($_GET['section']) ? $_GET['section'] : 'about'; // default to 'about'
function isActive($name, $section)
{
    return $name === $section ? 'active' : '';
}
?>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- top-area Start -->
    <header class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="">ASLAMIYAH</a>
                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="smooth-menu"><a href="#about">About</a></li>
                        <li class="smooth-menu"><a href="#education">Resume</a></li>
                        <li class="smooth-menu"><a href="#skills">Skills</a></li>
                        <li class="smooth-menu"><a href="#service">Service</a></li>
                        <li class="smooth-menu"><a href="#project">Project</a></li>
                        <li class="smooth-menu"><a href="#blog">Blog</a></li>
                        <li class="smooth-menu"><a href="#contact">Contact</a></li>
                    </ul>

                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->

        <div class="clearfix"></div>

    </header><!-- /.top-area-->
    <!-- top-area End -->