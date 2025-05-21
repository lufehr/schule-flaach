<?php
namespace ProcessWire;

// Filter by publish_from and publish_to and sort by created date
$entries = $pages->get('/ich-suche/eintraege')->children("sort=-created, publish_from<=now, publish_to>=now");
?>

<div id="content">
  <div class="wpo-breadcumb-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wpo-breadcumb-wrap">
            <h2>Ich suche</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of wpo-breadcumb-section-->
  <!-- wpo-event-area start -->
  <div class="wpo-event-area-s2 section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="wpo-section-title">
            <span>Ich suche</span>
            <h2>Fahrgemeinschaft, Kinderkleider, Schlittschuhe, ...</h2>

            <div>
              <p>Suchst du nach etwas?</p>
              <p><a class="theme-btn-s2 bg-green-sage-linear" href="<?= $pages->get('/ich-suche/formular')->url ?>">Zum
                  Formular</a></p>
            </div>
          </div>

        </div>
      </div>

      <?php include('./_filter.php') ?>


      <div class="wpo-event-wrap" style="margin-top: 20px;">
        <div class="row justify-content-center">
          <div class="col col-lg-10">

            <?php if (count($entries) === 0): ?>
              <p>Es wurden keine Einträge gefunden.</p>
            <?php endif; ?>



            <?php foreach ($entries as $child): ?>
              <?php include('./_entry-card.php') ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- wpo-event-area end -->
</div>