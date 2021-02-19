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


</head>

<body class="home light" style="overflow: auto;">

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
@section('main_block')
@show


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
