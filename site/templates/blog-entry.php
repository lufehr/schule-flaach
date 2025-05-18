<?php
namespace ProcessWire;


?>

<div id="content">
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">

                        <h2 class="">Blog</h2>

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

                            <div class="c-entry-page-top-label">Blog</div>
                            <div><?= $page->date ?></div>


                            <h2><?= $page->title ?></h2>
                            <p>
                                <?= $page->richtext ?>
                            </p>


                        </div>


                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">

                        <div class="widget recent-post-widget">
                            <h3>Weitere Posts</h3>
                            <div class="posts">

                                <!-- Get posts except the current one -->
                                <?php
                                $posts = $pages->get('/blog')->children("limit=4, id!={$page->id}");
                                foreach ($posts as $child): ?>

                                    <div class="post">
                                        <div class="details">
                                            <h4><a href="<?= $child->url() ?>">
                                                    <?= $child->title ?>
                                                </a></h4>
                                            <div class="single-blog-sidebar-date"><?= $child->date ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <!-- <?php foreach ($pages->get('/agenda')->children("limit=4") as $child): ?>



                                    <div class="post">
                                        <div class="details">
                                            <h4><a href="<?= $child->url() ?>">
                                                    <?= $child->title ?>
                                                </a></h4>
                                        </div>
                                    </div>

                                <?php endforeach; ?> -->

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>