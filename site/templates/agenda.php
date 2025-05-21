<?php
namespace ProcessWire;
?>

<div id="content">
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Agenda</h2>
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
                        <span>Agenda</span>
                        <h2>Termine und Veranstaltungen</h2>

                        <div>
                            <p>Möchtest du eine Veranstaltungen / Schnuppertrainings anbieten?</p>
                            <p><a class="theme-btn-s2 bg-green-sage-linear"
                                    href="<?= $pages->get('/agenda/formular')->url ?>">Zum
                                    Formular</a></p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="wpo-event-wrap" style="margin-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col col-lg-10">

                        <?php
                        $today = date('Y-m-d');
                        $entries = $pages->get('/agenda/eintraege')->children("date_from>=$today, sort=date_from");
                        ?>
                        <?php if ($entries->count() == 0): ?>
                            <div class="alert alert-info" role="alert">
                                Es sind keine Einträge vorhanden.
                            </div>
                        <?php endif; ?>
                        <?php foreach ($entries as $child): ?>
                            <?php include('./_agenda-card.php') ?>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->
</div>