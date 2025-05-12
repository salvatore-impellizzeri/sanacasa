<?php
use Cake\Core\Configure;

$extraClass = $extraClass ?? '';
$homeLink = ACTIVE_LANGUAGE == DEFAULT_LANGUAGE ? '/' : '/'.ACTIVE_LANGUAGE.'/';
$languages = Configure::read('Setup.languages');
?>

<header class="header <?= $extraClass ?? '' ?> fadeFromTop-20" data-animated>
    <div class="header__inner">
        <a href="<?= $homeLink ?>" class="header__logo">
            <?= $this->Frontend->svg('logo.svg') ?>
        </a>
        
        <nav class="header__menu">
            <?= $this->cell('Menu.Menu', [1]) ?>
        </nav>
        <div class="header__hamburger">
            <?php echo $this->element('hamburger'); ?>
        </div>
    
        <?php if (!empty($cta)): ?>
            <div class="header__cta">
                <?= $this->element('cta', [
                    'label' => 'Inizia ora',
                    'url' => '#',
                    'extraClass' => 'cta--primary'
                ]); ?>
            </div>
        <?php endif; ?>

    </div>
</header>
