<div class="title <?= $extraClass ?> fadeFromBottom-20" data-animated>
    <label class="font-chillax font-16 fw-medium">
        <?= $label ?>
    </label>
    <h2 class="title-secondary">
        <?= $title ?>
    </h2>
    <?php if(isset($text)) { ?>
        <p class="font-20">
            <?= $text ?>
        </p>
    <?php } ?>
</div>