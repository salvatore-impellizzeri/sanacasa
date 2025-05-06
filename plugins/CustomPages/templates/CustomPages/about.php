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

        <?php
            $methods = [
                [
                    'num' => '01.',
                    'title' => 'Sopralluogo e rilievo',
                    'text' => 'Un nostro tecnico partner della tua zona effettua un sopralluogo dettagliato per raccogliere tutte le informazioni necessarie sul tuo immobile.',
                    'img' => 'img/img3.png'
                ],
                [
                    'num' => '02.',
                    'title' => 'Verifica e analisi',
                    'text' => 'Analizziamo la documentazione edilizia e catastale esistente per identificare eventuali non conformità e definire la strategia di regolarizzazione più efficace.',
                    'img' => 'img/img4.png'
                ],
                [
                    'num' => '03.',
                    'title' => 'Sopralluogo e rilievo',
                    'text' => 'Un nostro tecnico partner della tua zona effettua un sopralluogo dettagliato per raccogliere tutte le informazioni necessarie sul tuo immobile.',
                    'img' => 'img/img3.png'
                ],
            ]
        ?>
        <div class="swiper swiper--methods">
            <div class="swiper-wrapper">
                <?php foreach ($methods as $method) { ?>
                    <div class="swiper-slide">
                        <?= $this->element('box-slider', [
                            'num' => $method['num'],
                            'title' => $method['title'],
                            'text' => $method['text'],
                            'img' => $method['img']
                        ]); ?>
                    </div>
                <?php } ?>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="pt-134">
        <?= $this->element('title', [
            'label' => 'noi siamo sanacasa',
            'title' => 'I valori in cui crediamo',
            'extraClass' => "title--primary text-center mb-105",
        ]); ?>
        <?php
            $values = [
                [
                    'icon' => 'icons/icon1.svg',
                    'title' => 'Competenza e trasparenza',
                    'text' => 'Risolviamo ogni situazione specifica con soluzioni pratiche e mirate, offrendo consulenze chiare e professionali in linea con le normative vigenti. '
                ],
                [
                    'icon' => 'icons/icon2.svg',
                    'title' => 'Empatia e affidabilità',
                    'text' => 'Capiamo la tua situazione e sappiamo cosa significa investire un valore per regolarizzare un immobile, siamo qui per aiutarti. '
                ],
                [
                    'icon' => 'icons/icon3.svg',
                    'title' => 'Essenzialità ed efficenza',
                    'text' => 'Eliminiamo tecnicismi e complessità per darti solo informazioni e servizi indispensabili, nel minor tempo possibile. '
                ]
            ]
        ?>
        <div class="container-cards m-auto">
            <?php foreach ($values as $value) { ?>
               <div class="card">
                    <div class="card__icon">
                        <?= $this->Frontend->svg($value['icon']); ?>
                    </div>     
                    <h3>
                        <?= $value['title'] ?>
                    </h3>
                    <p>
                        <?= $value['text'] ?>
                    </p>
               </div>
            <?php } ?>
        </div>
    </div>
</div>