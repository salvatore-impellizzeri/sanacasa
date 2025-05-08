<?php if (empty($label)) return; ?>

<?php if (!empty($url)) : ?>
    <a class="cta <?= $extraClass ?? '' ?> fadeFromBottom-20" href="<?= $url ?>" data-animated>
        <span class="cta__label">
            <?= $label ?> <?= isset($svgFooter) ? $this->Frontend->svg($svgFooter) : null ?>
        </span>
        <?php if (!empty($icon)) : ?>
            <span class="cta__icon">
                <?= $this->Frontend->svg($icon) ?>
            </span>
        <?php endif; ?>
    </a>
<?php else : ?>
    <button class="cta <?= $extraClass ?? '' ?> fadeFromBottom-20" data-animated type="submit">
        <span class="cta__label">
            <?= $label ?>
        </span>
        <?php if (!empty($icon)) : ?>
            <span class="cta__icon">
                <?= $this->Frontend->svg($icon) ?>
            </span>
        <?php endif; ?>
    </button>
<?php endif; ?>