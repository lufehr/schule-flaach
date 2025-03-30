<?php
namespace ProcessWire;

// Template file for “home” template used by the homepage
// ------------------------------------------------------
// The #content div in this file will replace the #content div in _main.php
// when the Markup Regions feature is enabled, as it is by default. 
// You can also append to (or prepend to) the #content div, and much more. 
// See the Markup Regions documentation:
// https://processwire.com/docs/front-end/output/markup-regions/

?>

<div id="content">
  <section class="wpo-hero-section-1">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col col-xs-6 col-lg-6">
          <div class="wpo-hero-section-text">
            <div class="wpo-hero-title-top">
              <span>Zusammen mehr erreichen</span>
            </div>
            <div class="wpo-hero-title">
              <h2>Suchen, bieten, Angebote</h2>
            </div>
            <div class="wpo-hero-subtitle">
              <p>
                Amet aute occaecat esse ea voluptate elit ex sint adipisicing exercitation Lorem dolor cillum voluptate
                non.
              </p>
            </div>
            <div class="btns">
              <a href="<?= $pages->get('/ueber-uns')->url() ?>" class="btn theme-btn-s2 bg-green-sage-linear">Über
                uns</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-vec">
            <div class="right-items-wrap">
              <div class="right-item">
                <div class="r-img">
                  <img src="<?php echo $config->urls->templates; ?>images/slider/right-img2.png" alt="" />
                </div>

              </div>
              <div class="right-item">

                <div class="r-img">
                  <img src="<?php echo $config->urls->templates; ?>images/slider/right-img.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of wpo-hero-section-1 slider -->
  <!-- start of wpo-features-section -->
  <section class="wpo-features-section-s2 v1 section-padding">
    <div class="container">
      <div class="row">
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <div class="wpo-features-item home-item-one">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-search"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="<?= $pages->get('ich-suche')->url ?>">Ich suche...</a></h2>
            </div>
          </div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <div class="wpo-features-item home-item-two">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-comment-white-oval-bubble"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="<?= $pages->get('ich-biete')->url ?>">Ich biete...</a></h2>
            </div>
          </div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <div class="wpo-features-item home-item-three">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-location"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="<?= $pages->get('angebote')->url ?>">Angebote...</a></h2>
            </div>
          </div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <div class="wpo-features-item home-item-four">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-calendar"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="<?= $pages->get('agenda')->url ?>l">Agenda...</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of wpo-features-section -->
  <!-- start of wpo-about-section -->
  <section class="wpo-about-section section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="wpo-about-wrap">

          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="wpo-about-text">
            <span>Über uns</span>
            <h2>Bildungslandschaft Flaachtal</h2>
            <p>
              Bildungslandschaft von klein bis gross
            </p>
            <ul>
              <li>Punkt 1</li>
              <li>
                Punkt 2
              </li>
              <li>Punkt 3</li>
            </ul>
            <a class="theme-btn-s2" href="<?= $pages->get('/about-us')->url() ?>">Mehr über uns</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of wpo-about-section -->
  <!-- wpo-campaign-area start -->

  <!-- wpo-campaign-area end -->
  <!-- wpo-team-area start -->
  <!-- <div class="wpo-team-area section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="wpo-section-title">
            <span>Expert Team</span>
            <h2>Meet Our Volunteer Team</h2>
            <p>
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form,
            </p>
          </div>
        </div>
      </div>

    </div>
  </div> -->
  <!-- wpo-team-area end -->
  <!-- wpo-testimonial-area start -->
  <!-- <div class="wpo-testimonial-area section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="wpo-section-title">
            <span>Testimonial</span>
            <h2>What People Say About Us</h2>
            <p>
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form,
            </p>
          </div>
        </div>
      </div>

    </div>
  </div> -->
  <!-- wpo-testimonial-area end -->

  <!-- wpo-cta-area end -->
  <!-- <div class="wpo-cta-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="wpo-cta-section">
            <div class="wpo-cta-content">
              <h2>Jetzt mitmachen</h2>
              <a href="volunteer.html">Ich suche</a>
            </div>
            <div class="volunteer-img">
              <img src="assets/images/volunteer.png" alt="" />
            </div>
            <div class="shape">
              <img src="assets/images/cta-shape.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- wpo-cta-area end -->
  <!-- wpo-event-area start -->
  <div class="wpo-event-area" style="margin-top: 50px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="wpo-section-title">
            <span>Agenda</span>
            <h2>Nächste Termine und Veranstaltungen</h2>

          </div>
        </div>
      </div>
      <div class="wpo-event-wrap">
        <div class="row">

          <?php foreach ($pages->get('/agenda')->children("limit=4") as $child): ?>

            <div class="col col-lg-3 col-md-6 col-12">
              <div class="wpo-event-single">
                <div class="wpo-event-item">

                  <div class="wpo-event-content">
                    <div class="wpo-event-text-top">
                      <span>
                        <?= $child->date_from ?>
                      </span>
                      <h2>
                        <a href="<?= $child->url ?>">
                          <?= $child->title ?>
                        </a>
                      </h2>
                      <p>
                        <?= $child->text ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>




        </div>
      </div>
    </div>
  </div>


</div>