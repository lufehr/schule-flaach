<?php
namespace ProcessWire;

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

    <!-- Start header -->
    <header id="header" class="wpo-site-header sticky-on">
      <nav class="navigation navbar navbar-expand-lg navbar-light sticky-on">
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
                <a class="navbar-brand" href="<?= $pages->get('/')->url() ?>">
                  <svg width="255" height="100" viewBox="0 0 255 100" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                      <linearGradient id="textGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#96a57c" />
                        <stop offset="50%" stop-color="#b87333" />
                        <stop offset="100%" stop-color="#6c8099" />
                      </linearGradient>
                    </defs>
                    <rect width="100%" height="100%" fill="white" />
                    <text x="50%" y="42%" dominant-baseline="middle" text-anchor="middle" font-size="18"
                      font-family="Arial, sans-serif" fill="url(#textGradient)">
                      BILDUNGSLANDSCHAFT
                    </text>
                    <text x="50%" y="70%" dominant-baseline="middle" text-anchor="middle" font-size="18"
                      font-family="Arial, sans-serif" fill="url(#textGradient)">
                      FLAACHTAL
                    </text>
                  </svg>
                </a>
              </div>
            </div>
            <div class="col-lg-6 col-md-1 col-1">
              <div id="navbar" class="collapse navbar-collapse navigation-holder">
                <button class="menu-close"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav mb-2 mb-lg-0">
                  <li>
                    <a class="<?= str_contains($page->url, '/ich-suche') ? 'active' : '' ?>"
                      href="<?= $pages->get('ich-suche')->url ?>">Ich suche</a>
                  </li>
                  <li>
                    <a class="<?= str_contains($page->url, '/ich-biete') ? 'active' : '' ?>"
                      href="<?= $pages->get('ich-biete')->url ?>">Ich biete</a>
                  </li>
                  <li>
                    <a class="<?= str_contains($page->url, '/angebote') ? 'active' : '' ?>"
                      href="<?= $pages->get('angebote')->url ?>">Angebote</a>
                  </li>
                  <li>
                    <a class="<?= str_contains($page->url, '/agenda') ? 'active' : '' ?>"
                      href="<?= $pages->get('agenda')->url ?>">Agenda</a>
                  </li>
                  <li>
                    <a class="<?= str_contains($page->url, '/blog') ? 'active' : '' ?>"
                      href="<?= $pages->get('blog')->url ?>">Blog</a>
                  </li>
                  <li><a class="<?= str_contains($page->url, '/ueber-uns') ? 'active' : '' ?>"
                      href="<?= $pages->get('ueber-uns')->url ?>">Über uns</a></li>
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
                <!-- <div class="logo widget-title">
                  <img src="<?php echo $config->urls->templates; ?>images/logo2.png" alt="blog" />
                </div> -->

                <p>
                  Bildungslandschaft Flaachtal
                </p>
                <!-- <ul>
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
                </ul> -->
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="widget link-widget">
                <div class="widget-title">
                  <h3>Seiten</h3>
                </div>
                <ul>
                  <li><a href="<?= $pages->get('ich-suche')->url ?>">Ich suche</a></li>
                  <li><a href="<?= $pages->get('ich-biete')->url ?>">Ich biete</a></li>
                  <li><a href="<?= $pages->get('angebote')->url ?>">Angebote</a></li>
                  <li><a href="<?= $pages->get('agenda')->url ?>">Agenda</a></li>
                  <li><a href="<?= $pages->get('ueber-uns')->url ?>">Über uns</a></li>
                </ul>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="widget wpo-service-link-widget">
                <div class="widget-title">
                  <h3>Kontakt</h3>
                </div>
                <div class="contact-ft">

                  <ul>
                    <li><i class="fi flaticon-mail"></i>netzwerk@schuleflaachtal.ch</li>


                  </ul>
                </div>
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
                &copy; <?= date('Y'); ?> Bildungslandschaft Flaachtal. <a
                  href="<?= $pages->get('/impressum')->url() ?>">Impressum</a> | <a
                  href="<?= $pages->get('/datenschutz')->url() ?>">Datenschutz</a>
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