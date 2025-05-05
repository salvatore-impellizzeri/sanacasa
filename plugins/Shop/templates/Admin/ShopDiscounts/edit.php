<?php 
$this->extend('/Admin/Common/edit'); 
$this->set('statusBarSettings', [
    'pathway' => [
        [
            'title' => __dx($po, 'admin', 'discounts'),
            'url' => ['action' => 'index']
        ],
        [
            'title' => __d('admin', $this->request->getParam('action')),
        ]
    ]
]);
?>

<?php echo $this->Form->create($item, ['type' => 'file', 'id' => 'superForm']); ?>
    <fieldset class="input-group">
        <legend class="input-group__info">
            Generali        
        </legend>
        <?php
        $discountTypeOptions = [
            0 => __dx($po, 'admin', 'all products'),
            1 => __dx($po, 'admin', 'some categories'),
            2 => __dx($po, 'admin', 'some products')
        ];
        echo $this->Form->control('title', ['label' => __d('admin', 'title'), 'extraClass' => 'span-4']);
        echo $this->Form->control('percentage', ['label' => __dx($po, 'admin', 'discount_percentage'), 'extraClass' => 'span-2']);
        echo $this->Form->control('discount_type', ['label' => __dx($po, 'admin', 'discount_type'), 'extraClass' => 'span-2', 'options' => $discountTypeOptions, 'default' => 0, 'data-discount-type']);
        echo $this->Form->control('round_discounts', ['label' => __dx($po, 'admin', 'round_discounts'), 'type' => 'checkbox', 'extraClass' => 'span-2']);
        echo $this->Form->control('active', ['label' => __dx($po, 'admin', 'active'), 'type' => 'checkbox', 'extraClass' => 'span-2']);
        echo $this->Form->control('valid_from', ['label' => __dx($po, 'admin', 'valid_from'), 'extraClass' => 'span-6', 'step' => 60]);
        echo $this->Form->control('valid_to', ['label' => __dx($po, 'admin', 'valid_to'), 'extraClass' => 'span-6', 'step' => 60]);
        ?>
    </fieldset>

    <fieldset class="input-group" data-categories-select>
        <legend class="input-group__info">
            Applica sconto ad alcune categorie
        </legend>
        <?php
        echo $this->Backend->belongsToMany('shop_categories', $item, [
            'label' => __dx($po, 'admin', 'shop_categories'),
            'url' => ['controller' => 'ShopCategories', 'action' => 'checkbox']
        ]);
        ?>
    </fieldset>

    <fieldset class="input-group" data-products-select>
        <legend class="input-group__info">
            Applica sconto ad alcuni prodotti
        </legend>
        <?php
        echo $this->Backend->belongsToMany('shop_products', $item, [
            'label' => __dx($po, 'admin', 'shop_products'),
            'url' => ['controller' => 'ShopProducts', 'action' => 'checkbox']
        ]);
        ?>
    </fieldset>

    <fieldset class="input-group">
        <legend class="input-group__info">
            Applica sconto ad alcuni clienti
        </legend>
        <?php
        echo $this->Backend->belongsToMany('clients', $item, [
            'label' => __dx($po, 'admin', 'discount_clients'),
            'url' => ['plugin' => 'Clients', 'controller' => 'Clients', 'action' => 'checkbox']
        ]);
        ?>
    </fieldset>

    <?php echo $this->element('admin/save');?>

<?= $this->Form->end() ?>

<?php $this->Html->scriptStart(['block' => 'scriptBottom']); ?>
$('[data-discount-type]').on('change', function(){
    let $trigger = $(this);
    $('[data-categories-select]').toggle($trigger.val() == 1);
    $('[data-products-select]').toggle($trigger.val() == 2);
}).trigger('change');
<?php $this->Html->scriptEnd() ?>
