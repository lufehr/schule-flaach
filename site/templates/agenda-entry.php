<?php
namespace ProcessWire;


?>

<div id="content">
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">

                        <h2 class="">Agenda</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wpo-event-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="wpo-event-item">
                        <div class="wpo-event-details-text">

                            <div class="c-entry-page-top-label">Agenda</div>



                            <h2><?= $page->title ?></h2>
                            <p>
                                <?= $page->text ?>
                            </p>

                            <div>
                                <div class="c-label">Datum</div>
                                <div class="c-text"><?= $page->date_from ?></div>
                            </div>

                            <div style="margin-top: 10px;">
                                <div class="c-label">Zeit</div>
                                <div class="c-text"><?= $page->time_from ?></div>
                            </div>

                            <div style="margin-top: 10px;">
                                <div class="c-label">Ort</div>
                                <div class="c-text"><?= $page->location->title ?></div>
                            </div>

                            <div style="margin-top: 10px;">
                                <div class="c-label">Kontaktperson</div>
                                <div class="c-text"><?= $page->contact_person ?></div>
                            </div>

                            <div style="margin-top: 10px;">
                                <div class="c-label">E-Mail</div>
                                <div class="c-text"><?= $page->email ?></div>
                            </div>

                            <div style="margin-top: 10px;">
                                <div class="c-label">Website</div>
                                <div class="c-text"><?= $page->website ?></div>
                            </div>

                            <div style="margin-top: 10px;">
                                <div class="c-label">Alter</div>
                                <div class="c-text"><?= $page->age->title ?></div>
                            </div>

                            <div style="margin-top: 10px;">
                                <div class="c-label">Kategorie</div>
                                <div class="c-text"><?= $page->offer_type->title ?></div>
                            </div>







                        </div>


                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">

                        <div class="widget recent-post-widget">
                            <h3>Weitere Termine</h3>
                            <div class="posts">

                                <?php foreach ($pages->get('/agenda/eintraege')->children("limit=4") as $child): ?>



                                    <div class="post">
                                        <div class="details">
                                            <h4><a href="<?= $child->url() ?>">
                                                    <?= $child->title ?>
                                                </a></h4>
                                            <span><?= $child->date_from ?></span>
                                        </div>
                                    </div>

                                <?php endforeach; ?>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>