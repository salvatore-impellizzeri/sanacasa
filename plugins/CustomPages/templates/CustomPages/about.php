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
            <img src="img/About.png" alt="About Image" class="fadeFromBottom-about" data-animated>
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
                [
                    'num' => '05.',
                    'title' => 'Sopralluogo e rilievo',
                    'text' => 'Un nostro tecnico partner della tua zona effettua un sopralluogo dettagliato per raccogliere tutte le informazioni necessarie sul tuo immobile.',
                    'img' => 'img/img4.png'
                ],
                [
                    'num' => '06.',
                    'title' => 'Sopralluogo e rilievo',
                    'text' => 'Un nostro tecnico partner della tua zona effettua un sopralluogo dettagliato per raccogliere tutte le informazioni necessarie sul tuo immobile.',
                    'img' => 'img/img3.png'
                ],
            ]
        ?>
        <div class="swiper swiper--methods pt-141 pb-118 fadeFromRight-40" data-animated>
            <div class="swiper-wrapper">
                <?php foreach ($methods as $method) { ?>
                    <div class="swiper-slide">
                        <?= $this->element('box', [
                            'num' => $method['num'],
                            'title' => $method['title'],
                            'text' => $method['text'],
                            'img' => $method['img']
                        ]); ?>
                    </div>
                <?php } ?>
            </div>

            <div class="swiper-button-prev button-down">
                <?= $this->Frontend->svg('icons/arrow-left.svg'); ?>
            </div>
            <div class="swiper-button-next button-down">
                <?= $this->Frontend->svg('icons/arrow-right.svg'); ?>
            </div>
        </div>
    </div>

    <!-- VALORI -->
    <div class="pt-134 pb-176">
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
               <div class="card rotateCard" data-animated>
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

    <!-- RECENSIONI -->
    <div class="bg-primary pt-141 pb-141 top-shadow">
        <?= $this->element('title', [
            'label' => 'dicono di noi',
            'title' => 'Ascolta le esperienze di chi ci ha scelto',
            'extraClass' => "title--primary text-center mb-105",
        ]); ?>
        <?php
            $ratings = [
                [
                    'rating' => 5,
                    'title' => '“Tutto in regola e senza stress!”',
                    'text' => "Ero preoccupata per alcune difformità nel mio appartamento, ma SANACASA ha reso tutto incredibilmente semplice. La piattaforma è intuitiva e il tecnico che mi ha seguito è stato super disponibile e competente. Pratica completata senza intoppi!",
                    'name' => 'Sara S.'
                ],
                [
                    'rating' => 4,
                    'title' => '"Servizio efficiente e professionale"',
                    'text' => "Ho utilizzato SANACASA per la regolarizzazione del garage e sono rimasto molto soddisfatto. Il sopralluogo è stato rapido, la documentazione chiara e l'assistenza costante. Un modo comodo e affidabile per mettersi in regola.",
                    'name' => 'Enrico V.'
                ],
                [
                    'rating' => 4,
                    'title' => '“Consigli utili e iter trasparente”',
                    'text' => "Oltre alla regolarizzazione vera e propria, ho apprezzato molto i consigli ricevuti dal team di SANACASA su come rendere il mio immobile più commerciabile. L'iter della pratica è stato sempre chiaro e monitorabile online. Ottima esperienza!",
                    'name' => 'Brian B.'
                ]
            ]
        ?>
        <div class="container-cards m-auto">
            <?php foreach ($ratings as $rating) { ?>
               <div class="card card--white rotateCard" data-animated>
                    <div class="card__rating">
                        <?php for ($i = 0; $i < $rating['rating']; $i++) { ?>
                            <?= $this->Frontend->svg('icons/star.svg'); ?>
                        <?php } ?>
                    </div>
                    <h3 class="font-chillax">
                        <?= $rating['title'] ?>
                    </h3>
                    <p>
                        <?= $rating['text'] ?>
                    </p>
                    <div class="font-chillax card__name fw-semibold font-20">
                        <?= $rating['name'] ?>
                    </div>
               </div>
            <?php } ?>
        </div>
    </div>

    <!-- FORM -->
    <?= $this->element('form', [
        'title' => 'Parla con un nostro consulente tecnico e scopri come gestire la tua sanatoria edilizia.',
        'label' => 'inizia ora',
    ]); ?>

</div>