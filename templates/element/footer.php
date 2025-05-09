<footer class="footer fadeFromBottom-20" data-animated>
    <div class="footer__container m-auto">
        <div class="footer__text">
            <p class="fw-light font-24">
                SANACASA non è uno studio di architettura. È un’agenzia che ti permette di gestire le regolarizzazioni del tuo immobile online, con un portale e un servizio di assistenza tecnica dedicata. Tutte le attività riservate sono svolte dagli Architetti/Ingegneri/Geometri partner di SANACASA, iscritti ai relativi Albi. 
            </p>
            <?= $this->element('cta', [
                'label' => 'Review us on',
                'svgFooter' => 'icons/trustpilot.svg',
                'url' => '#',
                'extraClass' => 'cta--labelSvg'
            ]); ?>
            <div class="footer__legal">
                <ul class="menu policy font-16">
                    <li><?= $this->Frontend->seolink(__d('policies', 'Privacy policy'), '/policies/view/1'); ?></li>
                    <li><?= $this->Frontend->seolink(__d('policies', 'Cookie policy'), '/policies/view/2'); ?></li>
                    <li><span id="cookie_reload"><?php echo __d('policies', 'manage cookies'); ?></span></li>
                    <li><a href="<?= $this->Frontend->url('#') ?>">Credits</a></li>
                    <li><strong><a href="<?= $this->Frontend->url('#') ?>">Contatti</a></strong></li>
                </ul>
            </div>
        </div>
        <div class="footer__links">
            <div class="footer__menu font-20">
                <?= $this->cell('Menu.Menu', [8]) ?>
            </div>
            <?= $this->element('cta', [
                'label' => 'Inizia ora',
                'url' => '#',
                'extraClass' => 'cta--primary cta--larger'
            ]); ?>
        </div>
    </div>
    <div class="footer__img">
        <?= $this->Frontend->svg('logo.svg'); ?>
    </div>
</footer>
