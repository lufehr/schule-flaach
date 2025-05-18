<?php
namespace ProcessWire; ?>

<div class="wpo-event-single">
    <div class="wpo-event-item">
        <div class="wpo-event-content">
            <div class="wpo-event-text-top">
                <?php if ($child->date): ?>
                    <span>
                        <?= $child->date ?>
                    </span>
                <?php endif; ?>
                <h2>
                    <a href="<?= $child->url ?>"><?= $child->title ?></a>
                </h2>

                <?php if ($child->richtext): ?>

                    <p>
                        <?= substr($child->richtext, 0, 200) ?>...
                    </p>
                <?php endif; ?>

                <a class="read-more" href="<?= $child->url ?>">Weitere Informationen...</a>
            </div>
        </div>
    </div>
</div>