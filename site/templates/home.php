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
                We help local nonprofits access the funding, tools,
                training, and support they need to become more.
              </p>
            </div>
            <div class="btns">
              <a href="about.html" class="btn theme-btn-s2">Get Started</a>
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
          <div class="wpo-features-item">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-search"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="service-single.html">Ich suche...</a></h2>
            </div>
          </div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <div class="wpo-features-item">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-comment-white-oval-bubble"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="service-single.html">Ich biete...</a></h2>
            </div>
          </div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <div class="wpo-features-item">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-location"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="service-single.html">Angebote...</a></h2>
            </div>
          </div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
          <div class="wpo-features-item">
            <div class="wpo-features-icon">
              <div class="icon">
                <i class="fi flaticon-calendar"></i>
              </div>
            </div>
            <div class="wpo-features-text">
              <h2><a href="service-single.html">Agenda...</a></h2>
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
            <span>About Us</span>
            <h2>We Can Save More Lifes With Your Helping Hand.</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
              maecenas accumsan lacus vel facilisis.
            </p>
            <ul>
              <li>The standard chunk of Lorem Ipsum used since.</li>
              <li>
                Randomised words which don't look even slightly believable.
              </li>
              <li>Making this the first true generator on the Internet.</li>
            </ul>
            <a class="theme-btn-s2" href="about.html">More About</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of wpo-about-section -->
  <!-- wpo-campaign-area start -->

  <!-- wpo-campaign-area end -->
  <!-- wpo-team-area start -->
  <div class="wpo-team-area section-padding">
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
  </div>
  <!-- wpo-team-area end -->
  <!-- wpo-testimonial-area start -->
  <div class="wpo-testimonial-area section-padding">
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
  </div>
  <!-- wpo-testimonial-area end -->

  <!-- wpo-cta-area end -->
  <div class="wpo-cta-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="wpo-cta-section">
            <div class="wpo-cta-content">
              <h2>Jetzt mitmachen</h2>
              <a href="volunteer.html">Become A Volunteer</a>
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
  </div>
  <!-- wpo-cta-area end -->
  <!-- wpo-event-area start -->
  <div class="wpo-event-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="wpo-section-title">
            <span>Agenda</span>
            <h2>Nächste Termine</h2>
            <p>
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form,
            </p>
          </div>
        </div>
      </div>
      <div class="wpo-event-wrap">
        <div class="row">
          <div class="col col-lg-6 col-md-6 col-12">
            <div class="wpo-event-single">
              <div class="wpo-event-item">
                <div class="wpo-event-img">
                  <img src="assets/images/event/img-1.jpg" alt="" />
                  <span class="thumb">24 <span>Nov</span></span>
                </div>
                <div class="wpo-event-content">
                  <div class="wpo-event-text-top">
                    <h2>
                      <a href="event-single.html">Help The Poor From Your Soal</a>
                    </h2>
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-3 col-md-6 col-12">
            <div class="wpo-event-single">
              <div class="wpo-event-item">
                <div class="wpo-event-img">
                  <img src="assets/images/event/img-2.jpg" alt="" />
                </div>
                <div class="wpo-event-content">
                  <div class="wpo-event-text-top">
                    <span>24 Nov, 2021</span>
                    <h2>
                      <a href="event-single.html">Help Children Raise Out Of Proverty</a>
                    </h2>
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-3 col-md-6 col-12">
            <div class="wpo-event-single">
              <div class="wpo-event-item">
                <div class="wpo-event-img">
                  <img src="assets/images/event/img-3.jpg" alt="" />
                </div>
                <div class="wpo-event-content">
                  <div class="wpo-event-text-top">
                    <span>24 Nov, 2021</span>
                    <h2>
                      <a href="event-single.html">Provideing Education Is The Valuable Gift</a>
                    </h2>
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>