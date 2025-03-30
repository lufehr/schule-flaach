<?php
namespace ProcessWire;
?>

<div id="content">
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Ich biete...</h2>
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
                        <span>Ich biete...</span>
                        <h2>Fahrgemeinschaft, Kinderkleider, Schlittschuhe, ...</h2>
                        <!-- <p>
                            Laborum do tempor veniam irure anim. Laborum do tempor veniam
                            irure anim.
                        </p> -->
                        <div>
                            <p>Möchtest du etwas anbieten?</p>
                            <p><a class="theme-btn-s2 bg-green-sage-linear"
                                    href="<?= $pages->get('/ich-biete/formular')->url ?>">Zum
                                    Formular</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <?php include('./_filter.php') ?> -->

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