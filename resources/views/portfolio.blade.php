
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Reda Benhamid | {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="css/skins/blueviolet.css" rel="stylesheet">

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="portfolio light">

<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box @if ($nav === 'home') active @endif">
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box @if ($nav === 'about') active @endif">
            <i class="fa fa-user"></i>
            <a href="{{ url('about') }}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box @if ($nav === 'portfolio') active @endif">
            <i class="fa fa-briefcase"></i>
            <a href="{{ url('portfolio') }}">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box @if ($nav === 'contact') active @endif">
            <i class="fa fa-envelope-open"></i>
            <a href="{{ url('contact') }}">
                <h2>Contact</h2>
            </a>
        </li>
 
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li @if ($nav === "home") class="active" @endif><a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li @if ($nav === "about") class="active" @endif><a href="{{ url('about') }}"><i class="fa fa-user"></i><span>About</span></a></li>
                <li @if ($nav === "portfolio") class="active" @endif><a href="{{ url('portfolio') }}"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li @if ($nav === "contact") class="active" @endif><a href="{{ url('contact') }}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="img/projects/project-1.jpg" alt="Portolio Image" />
                        <div><span>Image Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="img/projects/project-2.jpg" alt="Portolio Image" />
                        <div><span>Youtube Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="img/projects/project-3.jpg" alt="Portolio Image" />
                        <div><span>Slider Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="img/projects/project-4.jpg" alt="Portolio Image" />
                        <div><span>Local Video Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="img/projects/project-5.jpg" alt="Portolio Image" />
                        <div><span>Image Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="img/projects/project-6.jpg" alt="Portolio Image" />
                        <div><span>Image Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
               
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
              
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Slider Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Themeforest</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.themeforest.net</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                                <li data-target="#slider" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/projects/project-3.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-2.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-1.jpg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                                <!-- Portfolio Item Detail Starts -->
                                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Slider Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Themeforest</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.themeforest.net</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider0" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider0" data-slide-to="0" class="active"></li>
                                <li data-target="#slider0" data-slide-to="1"></li>
                                <li data-target="#slider0" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/projects/project-3.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-2.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-1.jpg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                                <!-- Portfolio Item Detail Starts -->
                                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Slider Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Themeforest</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.themeforest.net</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider1" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider1" data-slide-to="0" class="active"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/projects/project-3.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-2.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-1.jpg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                                <!-- Portfolio Item Detail Starts -->
                                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Slider Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Themeforest</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.themeforest.net</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider2" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider2" data-slide-to="0" class="active"></li>
                                <li data-target="#slider2" data-slide-to="1"></li>
                                <li data-target="#slider2" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/projects/project-3.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-2.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-1.jpg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                                <!-- Portfolio Item Detail Starts -->
                                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Slider Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Themeforest</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.themeforest.net</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider3" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider3" data-slide-to="0" class="active"></li>
                                <li data-target="#slider3" data-slide-to="1"></li>
                                <li data-target="#slider3" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/projects/project-3.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-2.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-1.jpg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                                <!-- Portfolio Item Detail Starts -->
                                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Slider Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Themeforest</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.themeforest.net</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider4" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider4" data-slide-to="0" class="active"></li>
                                <li data-target="#slider4" data-slide-to="1"></li>
                                <li data-target="#slider4" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/projects/project-3.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-2.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/projects/project-1.jpg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
            
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow-light.png" alt="previous"></span>
                <span class="icon nav-next"><img src="img/projects/navigation/right-arrow-light.png" alt="next"></span>
                <span class="nav-close"><img src="img/projects/navigation/close-button-light.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3EDX2ESL79"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3EDX2ESL79');
</script>

<!-- Template JS Files -->
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/preloader.min.js"></script>
<script src="js/fm.revealator.jquery.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>

</body>


</html>
