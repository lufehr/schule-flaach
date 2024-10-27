<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */
	
$home = $pages->get('/'); /** @var HomePage $home */

?><!DOCTYPE html>
<html lang="de">
	<head id="html-head">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title><?php echo $page->title; ?></title>
		
		<link href="<?php echo $config->urls->templates; ?>styles/themify-icons.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/flaticon.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/animate.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/owl.carousel.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/owl.theme.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/slick.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/slick-theme.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/swiper.min.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/owl.transitions.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/jquery.fancybox.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/odometer-theme-default.css" rel="stylesheet" />
		<link href="<?php echo $config->urls->templates; ?>styles/style.css" rel="stylesheet" />
	</head>
	<body id="html-body">

	  <!-- start page-wrapper -->
	  <div class="page-wrapper">
      <!-- start preloader -->
      <!-- <div class="preloader">
        <div class="vertical-centered-box">
          <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
              <div class="loader-line"></div>
            </div>
            <img src="<?php echo $config->urls->templates; ?>images/preloader.png" alt="" />
          </div>
        </div>
      </div> -->
      <!-- end preloader -->
      <!-- Start header -->
      <header id="header" class="wpo-site-header">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                <div class="mobail-menu">
                  <button type="button" class="navbar-toggler open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar first-angle"></span>
                    <span class="icon-bar middle-angle"></span>
                    <span class="icon-bar last-angle"></span>
                  </button>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.html"
                    ><img src="<?php echo $config->urls->templates; ?>images/logo.png" alt=""
                  /></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-1 col-1">
                <div
                  id="navbar"
                  class="collapse navbar-collapse navigation-holder"
                >
                  <button class="menu-close"><i class="ti-close"></i></button>
                  <ul class="nav navbar-nav mb-2 mb-lg-0">
                    <li>
                      <a class="active" href="<?= $pages->get('ich-suche')->url ?>">Ich suche</a>
                    </li>
                    <li>
                      <a href="<?= $pages->get('ich-biete')->url ?>">Ich biete</a>
                    </li>
                    <li>
                      <a href="<?= $pages->get('angebote')->url ?>">Angebote</a>
                    </li>
                    <li>
                      <a href="<?= $pages->get('agenda')->url ?>">Agenda</a>
                    </li>
                    <li><a href="<?= $pages->get('ueber-uns')->url ?>">Über uns</a></li>
                  </ul>
                </div>
                <!-- end of nav-collapse -->
              </div>
          </div>
          <!-- end of container -->
        </nav>
      </header>
      <!-- end of header -->

	  <div id="content"></div>

    
      <!-- start of wpo-site-footer-section -->
      <footer class="wpo-site-footer">
        <div class="wpo-upper-footer">
          <div class="container">
            <div class="row">
              <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="widget about-widget">
                  <div class="logo widget-title">
                    <img src="<?php echo $config->urls->templates; ?>images/logo2.png" alt="blog" />
                  </div>
                  <p>
                    Welcome and open yourself to your truest love this year with
                    us! With the Release Process
                  </p>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="ti-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="ti-twitter-alt"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="ti-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="ti-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="widget link-widget">
                  <div class="widget-title">
                    <h3>Services</h3>
                  </div>
                  <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="cause.html">Causes</a></li>
                    <li><a href="blog.html">Latest News</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="event.html">Events</a></li>
                  </ul>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="widget wpo-service-link-widget">
                  <div class="widget-title">
                    <h3>Contact</h3>
                  </div>
                  <div class="contact-ft">
                    <p>
                      Would you have any enquiries.Please feel free to contuct
                      us
                    </p>
                    <ul>
                      <li><i class="fi flaticon-mail"></i>charito@gmail.com</li>
                      <li>
                        <i class="fi flaticon-phone-call"></i>+888 (123) 869523
                      </li>
                      <li>
                        <i class="fi flaticon-location"></i>New York – 1075 Firs
                        Avenue
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="widget instagram">
                  <div class="widget-title">
                    <h3>Projects</h3>
                  </div>
                  <ul class="d-flex">
                    <li>
                      <a href="project-single.html"
                        ><img src="<?php echo $config->urls->templates; ?>images/instragram/1.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="project-single.html"
                        ><img src="<?php echo $config->urls->templates; ?>images/instragram/2.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="project-single.html"
                        ><img src="<?php echo $config->urls->templates; ?>images/instragram/3.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="project-single.html"
                        ><img src="<?php echo $config->urls->templates; ?>images/instragram/4.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="project-single.html"
                        ><img src="<?php echo $config->urls->templates; ?>images/instragram/5.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="project-single.html"
                        ><img src="<?php echo $config->urls->templates; ?>images/instragram/6.jpg" alt=""
                      /></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end container -->
        </div>
        <div class="wpo-lower-footer">
          <div class="container">
            <div class="row">
              <div class="col col-xs-12">
                <p class="copyright">
                  &copy; <?= date('Y'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

		<script src="<?php echo $config->urls->templates; ?>scripts/jquery.min.js"></script>
		<script src="<?php echo $config->urls->templates; ?>scripts/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $config->urls->templates; ?>scripts/modernizr.custom.js"></script>
		<script src="<?php echo $config->urls->templates; ?>scripts/jquery.dlmenu.js"></script>
		<script src="<?php echo $config->urls->templates; ?>scripts/jquery-plugin-collection.js"></script>
		<script src="<?php echo $config->urls->templates; ?>scripts/script.js"></script>
	
	</body>
</html>