<div class="form pb-182 pt-182 bg-gradient-blue">
    <div class="m-auto container-form font-20">
        <?= $this->element('title', [
            'label' => $label,
            'title' => $title,
            'extraClass' => 'text-center title--white'
        ]); ?>
        <div class="form__content">
            <?= $this->element('Contacts.contact-form', [
                'id' => 1
            ]) ?>
        </div>
    </div>
</div>