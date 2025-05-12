<div class="list-info <?= $extraClass ?? ''?>" data-animated>
    <div class="list-info__upper font-chillax fw-semibold font-20-secondary">
        <?= $this->Frontend->svg($icon); ?> <?= $title ?>
    </div>
    <ul class="font-20-secondary">
        <?php foreach ($list as $item) { ?>
            <li>            
                <?= $item ?>
            </li>
        <?php } ?>
    </ul>
</div>