<?php
    $animationText = (isset($extraClass) && $extraClass === 'invert') ? 'fadeFromRight-40' : 'fadeFromLeft-40';
    $animationImg = (isset($extraClass) && $extraClass === 'invert') ? 'fadeFromLeft-40' : 'fadeFromRight-40';
?>

<div class="img-text <?= $extraClass ?? ''?>">
    <div class="img-text__text <?= $animationText ?>" data-animated>
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
    <div class="img-text__img <?= $animationImg ?>" data-animated>
        <img src="<?= $img ?>" alt="<?= $label ?>">
    </div>
</div>