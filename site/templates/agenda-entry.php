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





                        </div>


                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">

                        <div class="widget recent-post-widget">
                            <h3>Weitere Termine</h3>
                            <div class="posts">

                                <?php foreach ($pages->get('/agenda')->children("limit=4") as $child): ?>



                                    <div class="post">
                                        <div class="details">
                                            <h4><a href="<?= $child->url() ?>">
                                                    <?= $child->title ?>
                                                </a></h4>
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