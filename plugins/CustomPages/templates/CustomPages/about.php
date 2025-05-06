<div class="pt-h about">

    <!-- HERO -->
    <div class="about__hero">
        <div class="container-title m-auto">
            <?= $this->element('title', [
                'label' => 'chi siamo',
                'title' => 'Siamo una rete di professionisti esperti e vogliamo aiutare i proprietari di immobili a risolvere irregolarità o difformità edilizie. ',
                'text' => "Immobili irregolari o difformi possono generare ritardi nelle compravendite, mutui negati, ristrutturazioni rimandate e stressante burocrazia. Siamo qui per rendere la sanatoria un iter semplice, sicuro e veloce. ",
                'extraClass' => "title--primary text-center",
            ]); ?>
        </div>
        <div class="about__hero__img m-auto">
            <img src="img/About.png" alt="About Image">
        </div>
    </div>
    
    <!-- METODO -->
    <div class="bg-secondary pt-134 pb-134">
        <div class="container-title m-auto">
            <?= $this->element('title', [
                'label' => 'il nostro metodo',
                'title' => 'Crediamo che il primo passo per la riqualifica del patrimonio immobiliare italiano, sia la sua legittimazione. ',
                'text' => "Ti diamo gli strumenti per raggiungere la conformità del tuo immobile. ",
                'extraClass' => "title--white text-center",
            ]); ?>
        </div>
    </div>
    <?= $this->element('box-slider', [
        'num' => '01.',
        'title' => 'Sopralluogo e rilievo',
        'text' => 'Un nostro tecnico partner della tua zona effettua un sopralluogo dettagliato per raccogliere tutte le informazioni necessarie sul tuo immobile.',
        'img' => 'img/img3.png'
    ]); ?>
</div>