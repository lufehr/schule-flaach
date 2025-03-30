<?php
namespace ProcessWire;

function isImLookingFor($page)
{
    return strpos($page->url, 'ich-suche') !== false;
}

function isImOffering($page)
{
    return strpos($page->url, 'ich-biete') !== false;
}

function isOffers($page)
{
    return strpos($page->url, 'angebote') !== false;
}


?>

<div id="content">
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <?php if (isImLookingFor($page)): ?>
                            <h2 class="">Ich suche...</h2>
                        <?php endif ?>
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

                            <!-- If page->url contains ich-suche -->
                            <?php if (isImLookingFor($page)): ?>
                                <div class="c-entry-page-top-label">Ich suche...</div>
                            <?php endif ?>

                            <!-- If page->url contains ich-biete -->
                            <?php if (isImOffering($page)): ?>
                                <div class="c-entry-page-top-label">Ich biete...</div>
                            <?php endif ?>


                            <!-- If page->url contains angebote -->
                            <?php if (isOffers($page)): ?>
                                <div class="c-entry-page-top-label">Angebote...</div>
                            <?php endif ?>



                            <h2><?= $page->title ?></h2>
                            <p>
                                <?= $page->text ?>
                            </p>


                            <?php if ($page->text_repeating_offer): ?>
                                <div>
                                    <div class="c-label">Zusätzliche Informationen</div>
                                    <div class="c-text"><?= $page->text_repeating_offer ?></div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->contact_person): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Kontaktperson</div>
                                    <div class="c-text"><?= $page->contact_person ?></div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->email_address != ''): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">E-Mail</div>
                                    <div class="c-text"><?= $page->email_address ?></div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->phone != ''): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Telefon</div>
                                    <div class="c-text"><?= $page->phone ?></div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->date_from): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Von</div>
                                    <div class="c-text"><?= $page->date_from ?>, <?= $page->time_from ?></div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->date_to): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Bis</div>
                                    <div class="c-text"><?= $page->date_to ?>, <?= $page->time_to ?></div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->location != ''): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Ort</div>
                                    <div class="c-text"><?= $page->location->title ?></div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->weekday != ''): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Wochentag(e)</div>
                                    <div class="c-text">
                                        <?php foreach ($page->weekday as $weekday): ?>
                                            <?= $weekday->title ?><br />
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->age != ''): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Alter</div>
                                    <div class="c-text">
                                        <?php foreach ($page->age as $age): ?>
                                            <?= $age->title ?><br />
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            <?php endif ?>

                            <?php if ($page->offer_type != ''): ?>
                                <div class="c-mt-10">
                                    <div class="c-label">Typ</div>
                                    <div class="c-text"><?= $page->offer_type->title ?></div>
                                </div>
                            <?php endif ?>


                        </div>


                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">

                        <div class="widget recent-post-widget">
                            <h3>Andere suchen...</h3>
                            <div class="posts">

                                <?php foreach ($pages->get('/ich-suche/eintraege')->children("limit=3") as $child): ?>


                                    <div class="post">
                                        <div class="details">
                                            <h4><a href="<?= $child->url ?>">
                                                    <?= $child->title ?>
                                                </a></h4>
                                        </div>
                                    </div>

                                <?php endforeach; ?>



                            </div>
                        </div>

                        <div class="widget recent-post-widget">
                            <h3>Andere bieten...</h3>
                            <div class="posts">

                                <?php foreach ($pages->get('/ich-biete/eintraege')->children("limit=3") as $child): ?>



                                    <div class="post">
                                        <div class="details">
                                            <h4><a href="<?= $child->url ?>">
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