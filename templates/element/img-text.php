<div class="img-text <?= $extraClass ?? ''?>">
    <div class="img-text__text">
        <label class="font-chillax fw-medium text-secondary font-16">
            <?= $label ?>
        </label>
        <h3 class="fw-bold text-primary font-48">
            <?= $title ?>
        </h3>
        <p class="font-18">
            <?= $text ?>
        </p>
        <?php if(isset($labelCta)) { ?>
            <?= $this->element('cta', [
                'label' => $labelCta,
                'url' => $urlCta,
                'extraClass' => $classCta
            ]); ?>
        <?php } ?>
    </div>
    <div class="img-text__img">
        <img src="<?= $img ?>" alt="<?= $label ?>">
    </div>
</div>