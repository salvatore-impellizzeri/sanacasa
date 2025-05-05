<div class="login-form">
    <?= $this->Form->create(null, ['class' => 'login-form__section']) ?>
        <div class="login-form__main">
            <h2 class="login-form__title"><?= __d('clients', 'new client') ?></h2>
            <?php
            echo $this->Form->control('email', ['label' => __d('clients', 'email')]);
            echo $this->Form->control('password', ['label' => __d('clients', 'password')]);
        
            echo $this->Form->control('remember_me', ['type' => 'hidden', 'value' => true]);
            ?>
            <a href="<?= $this->Frontend->url('/clients/recover-password') ?>" class="login-form__recover"><?= __d('clients', 'lost password') ?></a>
        </div>

        <?= $this->Form->button(__d('clients', 'login'), ['class' => 'button button--full']); ?>
        

    <?= $this->Form->end() ?>

    <div class="login-form__section">
        <div class="login-form__main">
            <h2 class="login-form__title"><?= __d('clients', 'signup title') ?></h2>
            <div class="login-form__message">
                <?= __d('clients', 'sign up advantages') ?>
            </div>
        </div>

        <a href="<?= $this->Frontend->url('/clients/add') ?>" class="button button--full button--light"><?= __d('clients', 'signup') ?></a>
    </div>
</div>
