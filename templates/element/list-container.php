<div class="list-container">
    <div class="list-container__upper">
        <?php foreach ($labels as $label) { ?>
            <label class="font-chillax font-20 fw-semibold list-container__label mb-0 fadeFromBottom-20" data-animated>
                <?= $this->Frontend->svg($label['icon']); ?>
                <span><?= $label['name'] ?></span>
            </label>
        <?php } ?>
    </div>
    <ul>
        <?php foreach ($packages as $package) { ?>
            <li class="font-20 fadeFromBottom-20" data-animated>
                <div class="text-left">
                    <?= $package['typology'] ?>
                </div>
                <div class="text-center">
                    <?php if(isset($package['price_1'])) { ?>
                        <?= $package['price_1'] ?> €
                    <?php } else { ?>
                        chiedi un preventivo
                    <?php } ?>
                </div>
                <div class="text-center">
                    <?php if(isset($package['price_2'])) { ?>
                        <?= $package['price_2'] ?> €
                    <?php } else { ?>
                        chiedi un preventivo
                    <?php } ?>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>