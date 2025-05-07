<div class="pt-h">

    <!-- TITLE -->
    <div class="container-title m-auto">
        <?= $this->element('title', [
            'label' => 'diventa partner SANACASA',
            'title' => "Sie un'agente immobiliare, un tecnico o un amministratore di condominio?",
            'text' => "Scopri come far risparmiare i tuoi clienti e come ottenere un cashback",
            'extraClass' => "title--primary text-center mb-96",
        ]); ?>
    </div>

    <!-- CONTENT -->
    <div class="bg-primary pt-118 pb-118">
        <div class="container-details m-auto">
            <?= $this->element('img-text', [    
                'img' => 'img/img10.png',
                'label' => 'agenzia immobiliare',
                'title' => "Sei un agente immobiliare?",
                'text' => "Richiedi il tuo coupon personalizzato da consegnare ai tuoi clienti. Loro riceveranno uno sconto e tu accumulerai punti ogni volta che i tuoi coupon saranno utilizzati. Raggiunta la soglia punti riceverai una commissione in percentuale.",
                'labelCta' => 'Scopri di più',
                'urlCta' => '#',
                'classCta' => 'cta--primary',
                'extraClass' => 'img-text--grayscale mb-150'
            ]); ?>
            <?= $this->element('img-text', [    
                'img' => 'img/img11.png',
                'label' => 'amministratore condominiale',
                'title' => "Sei un amministratore di condominio?",
                'text' => "Richiedi il tuo coupon personalizzato da utilizzare per i condomini da te amministrati o da consegnare ai proprietari di singole unità immobiliari private. Otterrai sconti e accumulerai punti ogni volta che i tuoi coupon saranno utilizzati. Raggiunta la soglia punti riceverai una commissione in percentuale.",
                'labelCta' => 'Scopri di più',
                'urlCta' => '#',
                'classCta' => 'cta--primary',
                'extraClass' => 'invert img-text--grayscale mb-150'
            ]); ?>
            <?= $this->element('img-text', [    
                'img' => 'img/img12.png',
                'label' => 'architetto / ingegnere / geometra',
                'title' => "Sei un tecnico esperto in pratiche di regolarizzazione?",
                'text' => "Contattaci per verificare la necessità di tecnici partner nella tua zona e per scoprire come collaborare con noi.",
                'labelCta' => 'Scopri di più',
                'urlCta' => '#',
                'classCta' => 'cta--primary',
                'extraClass' => 'img-text--grayscale'
            ]); ?>
        </div>

    </div>

    <?= $this->element('form'); ?>
</div>