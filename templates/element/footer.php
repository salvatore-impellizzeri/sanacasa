<footer class="footer">
    <div class="footer__container m-auto">
        <div class="footer__text">
            <p class="fw-light font-24">
                SANACASA non è uno studio di architettura. È un’agenzia che ti permette di gestire le regolarizzazioni del tuo immobile online, con un portale e un servizio di assistenza tecnica dedicata. Tutte le attività riservate sono svolte dagli Architetti/Ingegneri/Geometri partner di SANACASA, iscritti ai relativi Albi. 
            </p>
            <?= $this->element('cta', [
                'label' => 'Review us on Trustpiolt',
                'url' => '#',
                'extraClass' => 'cta--trustpilot'
            ]); ?>
            <div class="footer__legal">
                <ul class="menu">
                    <li><?= $this->Frontend->seolink(__d('policies', 'Privacy policy'), '/policies/view/1'); ?></li>
                    <li><?= $this->Frontend->seolink(__d('policies', 'Cookie policy'), '/policies/view/2'); ?></li>
                    <li><span id="cookie_reload"><?php echo __d('policies', 'manage cookies'); ?></span></li>
                </ul>
            </div>
        </div>
        <div class="footer__links">
            <div class="footer__menu">
                <?= $this->cell('Menu.Menu', [8]) ?>
            </div>
            <?= $this->element('cta', [
                'label' => 'Inizia ora',
                'url' => '#',
                'extraClass' => 'cta--primary'
            ]); ?>
        </div>
    </div>
    <div class="footer__img">
        <?= $this->Frontend->svg('logo.svg'); ?>
    </div>
</footer>

    <!-- <div class="footer__info">
        <?= $this->element('snippet', ['id' => 1])?>
    </div>
