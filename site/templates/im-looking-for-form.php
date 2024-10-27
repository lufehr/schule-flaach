<?php
namespace ProcessWire; ?>

<div id="content">
  <div class="wpo-breadcumb-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wpo-breadcumb-wrap">
            <h2>Ich suche...</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of wpo-breadcumb-section-->
  <!-- wpo-event-area start -->
  <div class="wpo-event-area-s2 section-padding">
    <div class="container">

      <div class="wpo-event-wrap">
        <div class="row justify-content-center">
          <div class="col col-lg-10">

            <h1>Formular</h1>
            <p>
              Möchtest du etwas anbieten? Fülle das Formular aus und wir veröffentlichen dein Angebot nach einer
              Prüfung.
            </p>
            <p>
              Bitte beachte, dass die Kontaktperson, die Telefonnummer und die E-Mail-Adresse veröffentlicht werden.
            </p>

            <?php echo $forms->embed('ich-suche'); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- wpo-event-area end -->
</div>