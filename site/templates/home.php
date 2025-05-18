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
              <p style="font-size: 1.3rem; line-height: 1.6rem;">
                Die Bildungslandschaft Flaachtal vernetzt Menschen, Angebote und Institutionen aus
                den Bereichen Bildung, Betreuung, Freizeit und Familie. Gemeinsam mit den fünf
                politischen Gemeinden, der Schule Flaachtal, Vereinen und weiteren Partnern
                gestalten wir eine lebendige Umgebung, in der Kinder, Jugendliche und Familien
                wachsen, lernen und sich entfalten können.
              </p>
              <p style="font-size: 1.3rem; line-height: 1.6rem;">
                Auf dieser Website finden Sie vielfältige Angebote, aktuelle Veranstaltungen und
                Möglichkeiten zur aktiven Mitgestaltung. Entdecken Sie, was das Flaachtal bewegt –
                und seien Sie ein Teil davon.
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

  <!-- start of wpo-features-section -->
  <section class="wpo-features-section-s2 v1 section-padding">
    <div class="container">
      <div class="row">
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <a href="<?= $pages->get('ich-suche')->url ?>">
            <div class="wpo-features-item home-item-one">
              <div class="wpo-features-icon">
                <div class="icon">
                  <i class="fi flaticon-search"></i>
                </div>
              </div>
              <div class="wpo-features-text">
                <h2 style="color: white">Ich suche...</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <a href="<?= $pages->get('ich-biete')->url ?>">
            <div class="wpo-features-item home-item-two">
              <div class="wpo-features-icon">
                <div class="icon">
                  <i class="fi flaticon-comment-white-oval-bubble"></i>
                </div>
              </div>
              <div class="wpo-features-text">
                <h2 style="color: white">Ich biete...</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <a href="<?= $pages->get('angebote')->url ?>">
            <div class="wpo-features-item home-item-three">
              <div class="wpo-features-icon">
                <div class="icon">
                  <i class="fi flaticon-location"></i>
                </div>
              </div>
              <div class="wpo-features-text">
                <h2 style="color: white">Angebote...</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <a href="<?= $pages->get('agenda')->url ?>">
            <div class="wpo-features-item home-item-four">
              <div class="wpo-features-icon">
                <div class="icon">
                  <i class="fi flaticon-calendar"></i>
                </div>
              </div>
              <div class="wpo-features-text">
                <h2 style="color: white">Agenda...</h2>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end of wpo-features-section -->



</div>