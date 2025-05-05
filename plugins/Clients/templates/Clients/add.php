<div class="client-form" >

    <h2 class="client-form__title"><?= __d('clients', 'signup title')?></h2>

    <?= $this->Form->create($client, ['autocomplete' => 'off', 'class' => 'antispam']); ?>

        <?php
        echo $this->Form->control('is_company', ['type' => 'radio', 'label' => false ,'options' => [0 => __d('clients', 'private'), 1 => __d('clients', 'company')], 'default' => 0]);
        echo $this->Html->div('', $this->Form->control('company', ['label' => __d('clients', 'company') , 'required' => true]), ['data-company-field']);
        echo $this->Form->control('fullname', ['label' => __d('clients', 'fullname')]);
        echo $this->Form->control('email', ['label' => __d('clients', 'email')]);
        echo $this->Form->control('password', [
            'label' => __d('clients', 'password'),
            'templates' => [
                'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}<div class="input-hint">{{inputHint}}</div></div>',
                'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
            ],
            'templateVars' => [
                'inputHint' => __d('clients', 'password hint')
            ]
        ]);
        echo $this->Form->control('repeat_password', ['label' => __d('clients', 'repeat password'), 'type' => 'password']);
        ?>

        <div class="form-privacy">
            <?php

            $privacyLink = $this->Frontend->seolink(__d('clients', 'privacy policy'), '/policies/view/6?popup=true', ['target' => '_blank', 'data-fancybox-iframe', 'data-type' => 'iframe']);
            echo $this->Form->control('privacy', [
                'type' => 'checkbox',
                'label' => $this->Html->tag('span', __d('clients', 'privacy disclaimer {0}', $privacyLink)),
                'escape' => false
            ]);
            ?>
        </div>

        <?= $this->Form->button(__d('clients', 'proceed'), ['class' => 'button button--alt button--full'])?>

    <?= $this->Form->end() ?>

</div>

<?php $this->Html->scriptStart(['block' => 'scriptBottom']); ?>
$('input[name="is_company"]').on('change', function(){

    $('input[name="is_company"]:checked').val() == 1 ? $('[data-company-field]').show() : $('[data-company-field]').hide();
});

$('input[name="is_company"]').eq(0).trigger('change');
<?php $this->Html->scriptEnd() ?>