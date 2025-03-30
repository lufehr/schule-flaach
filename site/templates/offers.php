<?php
namespace ProcessWire;


?>

<div id="content">
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Angebote</h2>
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
                        <span>Angebote...</span>
                        <h2>Angebote, ...</h2>
                        <p>
                            Hast du etwas anzubieten?
                        </p>
                        <div>
                            <p><a class="theme-btn-s2 bg-green-sage-linear"
                                    href="<?= $pages->get('/angebote/formular')->url ?>">Zum
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