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
                    </div>

                </div>
            </div>


            <div class="wpo-event-wrap" style="margin-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col col-lg-10">
                        <?php foreach ($page->children as $child): ?>
                            <?php include('./_agenda-card.php') ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->
</div>