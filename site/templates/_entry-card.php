<?php
namespace ProcessWire; ?>

<div class="wpo-event-single">
    <div class="wpo-event-item">
        <div class="wpo-event-content">
            <div class="wpo-event-text-top">
                <!-- <?php if ($child->date_from): ?>
                    <span>
                        <?php if ($child->date_from && !$child->date_to): ?>
                            <?= $child->date_from ?>
                            <?php if ($child->time_from): ?>
                                <?= $child->time_from ?> Uhr
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($child->date_from && $child->date_to): ?>
                            <?= $child->date_from ?>
                            <?php if ($child->time_from): ?>
                                <?= $child->time_from ?> Uhr
                            <?php endif; ?>
                            bis <?= $child->date_to ?>
                            <?php if ($child->time_to): ?>
                                <?= $child->time_to ?> Uhr
                            <?php endif; ?>
                        <?php endif; ?>
                    </span>
                <?php endif; ?> -->
                <h2>
                    <a href="<?= $child->url ?>"><?= $child->title ?></a>
                </h2>

                <?php if ($child->text): ?>

                    <p>
                        <!-- Publish an excerpt of the title -->
                        <?= $sanitizer->truncate($child->text, 250) ?>
                    </p>
                <?php endif; ?>

                <a class="read-more" href="<?= $child->url ?>">Weitere Informationen...</a>
            </div>
        </div>
    </div>
</div>