<?php
namespace ProcessWire;
?>

<div id="content">
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Blog</h2>
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
                        <span>Blog</span>
                        <h2>Willkommen im Blog der Bildungslandschaft Flaachtal</h2>
                        <p>
                            In unserem Blog geben wir Einblicke in Projekte, Veranstaltungen und Entwicklungen
                            rund um die Bildungslandschaft Flaachtal. Hier berichten wir über spannende
                            Angebote, erfolgreiche Kooperationen und aktuelle Themen, die unsere Bildungsregion
                            bewegen. Wir laden alle Interessierten ein, mitzulesen und sich inspirieren zu lassen!
                        </p>
                    </div>

                </div>
            </div>


            <div class="wpo-event-wrap" style="margin-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col col-lg-10">
                        <?php foreach ($page->children as $child): ?>
                            <?php include('./_blog-card.php') ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->
</div>