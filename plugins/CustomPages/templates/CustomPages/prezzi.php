<div>
    <!-- PRICES -->
    <div class="pt-h bg-secondary pb-168">
        <div class="container-xl m-auto">
            <?= $this->element('title', [
                'label' => 'prezzi',
                'title' => 'Scegli il servizio in <br> base alla tua esigenza',
                'extraClass' => "title--white text-center mb-105",
            ]); ?>
            <?php 
                $prices = [
                    [
                        'type' => "Regolarizzazione <br> catastale",
                        'price' => "299",
                        'url' => '#'
                    ],
                    [
                        'type' => "Sanatoria <br> edilizia-urbanistica",
                        'price' => "899",
                        'url' => '#'
                    ]
                ]
            ?>
            <div class="boxes">
                <?php foreach ($prices as $price) { ?>
                    <div class="box box--price">
                        <div class="box--price__upper">
                            <h2 class="font-48 fw-bold">
                                <?= $price['type'] ?>
                            </h2>
                        </div>
                        <div class="box--price__lower">
                            <div>
                                <div class="font-18">
                                    A partire da
                                </div>
                                <div>
                                    <span class="fw-bold font-64">€ <?= $price['price'] ?></span><span class="font-18">/ unità</span>
                                </div>
                            </div>
                            <?= $this->element('cta', [
                                'label' => 'Dettaglio prezzi',
                                'url' => $price['url'],
                                'extraClass' => 'cta--secondary'
                            ]); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- SPIEGAZIONE -->
    <div class="box box--img m-auto mt-307 mb-150">
        <div class="box--img__image">
            <div class="box--img__img-container">
                <img src="img/img4.png" alt="">
            </div>
        </div>
        <div class="box--img__text text-center m-auto pt-83 pb-83">
            <h2 class="fw-bold font-64">
                Come funzionano?
            </h2>
            <p class="font-20">
                In base alla tipologia e alla dimensione del tuo immobile, le pratiche edilizie assumono un valore e delle responsabilità civili e penali di grado diverso. I prezzi sono calibrati in base a questa differenza.
            </p>
        </div>
    </div>

    <!-- SERVIZI -->
    <div class="mb-176 container-xs m-auto">
        <?= $this->element('title', [
            'label' => 'servizi inclusi',
            'title' => 'Il nostro pacchetto include tutti i servizi di cui avrai bisogno',
            'extraClass' => "title--primary text-center mb-134",
        ]); ?>
        <div>
            <?= $this->element('img-text', [    
                'img' => 'img/img5.png',
                'label' => 'architetto',
                'title' => "Architetto dedicato, esperto della situazione specifica del tuo immobile",
                'text' => "Nel prezzo è incluso il contratto con un Architetto parnter di SANACASA, che risponderà a tutte le tue domande sulla regolarizzazione da intraprendere",
                'extraClass' => 'mb-129 img-text--smaller'
            ]); ?>
            <?= $this->element('img-text', [    
                'img' => 'img/img6.png',
                'label' => 'adempimenti',
                'title' => "Presentazione della pratica edilizia e tutte le altre scadenze",
                'text' => "Il tuo Architetto preparerà la pratica edilizia in sanatoria e gli altri adempimenti necessari. In modo da mettere in regola il tuo immobile nel minor tempo possibile.",
                'extraClass' => 'invert img-text--smaller'
            ]); ?>
        </div>
    </div>

    <!-- EXTRA -->
    <div class="container-l m-auto pb-150">
        <?= $this->element('title', [
            'label' => 'extra',
            'title' => 'Servizi aggiuntivi su richiesta',
            'extraClass' => "title--primary text-center mb-96",
        ]); ?>
        <?php
            $extras = [
                [
                    'title' => 'Visure storiche e planimetrie catastali',
                    'text' => 'Per chi non ne avesse disponibilità. In 48 ore dalla firma dell’incarico, effettuiamo le necessarie visure attuali e storiche in Agenzia delle Entrate e otteniamo le planimetrie catastali utili a comprendere lo status del tuo immobile ',
                    'price' => '',
                    'included' => true
                ],
                [
                    'title' => 'Accesso agli atti amministrativi',
                    'text' => 'Per i proprietari che non ne fossero già in possesso. Effettuiamo le necessarie verifiche e ricerche dei titoli edilizi che hanno legittimato il tuo immobile e ci occupiamo della richiesta di accesso agli atti nel tuo Comune di appartenenza. ',
                    'price' => '100',
                    'included' => false
                ],
                [
                    'title' => 'Certificazione di conformità',
                    'text' => 'Per gli immobili oggetto di compravendita che hanno bisogno delle attestazioni di conformità edilizia-urbanistica e catastale richieste dai notai in sede di rogito.',
                    'price' => '150',
                    'included' => false
                ],
            ]
        ?>
        <div class="card--flex mb-117">
            <?php foreach ($extras as $extra) { ?>
                <div class="card card--extra">
                    <h3>
                        <?= $extra['title'] ?>
                    </h3>
                    <p>
                        <?= $extra['text'] ?>
                    </p>
                    <div class="card--extra__price fw-medium">
                        <div>
                            <?php if ($extra['included']) { ?>
                                incluso nel pacchetto
                            <?php } else { ?>
                                <span class="font-64">€ <?= $extra['price'] ?></span> / unità
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center">
            <?= $this->element('cta', [
                'label' => 'Dettaglio servizi',
                'url' => '#',
                'extraClass' => 'cta--secondary'
            ]); ?>
        </div>
    </div>
    
    <!-- DETAILS PACKAGE -->
    <div class="bg-secondary pt-168 pb-168">
        <div class="container-details m-auto">
            <?= $this->element('title', [
                'label' => 'dettaglio prezzi',
                'title' => 'Dettagli dei pacchetti',
                'text' => 'Prezzi a unità immobiliare per regolazizzazione di difformità interne',
                'extraClass' => "title--white text-center mb-117",
            ]); ?>
            <?= $this->element('list-container', [
                'packages' => [
                    [
                        'typology' => 'Appartamenti, uffici, negozi fino a 60mq',
                        'price_1' => '299',
                        'price_2' => '899',
                    ],
                    [
                        'typology' => 'Appartamenti, uffici, negozi tra 60 e 100mq',
                        'price_1' => '399',
                        'price_2' => '999',
                    ],
                    [
                        'typology' => 'Appartamenti, uffici, negozi tra 100 e 300mq',
                        'price_1' => '499',
                        'price_2' => '1099',
                    ],
                    [
                        'typology' => 'Appartamenti, uffici, negozi tra 300 e 500mq',
                        'price_1' => '599',
                        'price_2' => '1199',
                    ],
                    [
                        'typology' => 'Appartamenti, uffici, negozi oltre a 500mq',
                        'price_1' => '699', 
                        'price_2' => '1299',
                    ],
                    [
                        'typology' => 'Accessori a servizio delle unità (es. cantina, garage)',
                        'price_1' => '+100',
                        'price_2' => '+200',
                    ],
                    [
                        'typology' => 'Condomini (parti comuni e/o private) ',
                    ], 
                ],
                'labels' => [
                    [
                        'icon' => 'icons/icon4.svg',
                        'name' => 'Tipologia e dimensione immobile'
                    ],
                    [
                        'icon' => 'icons/icon5.svg',
                        'name' => 'Regolarizzazione catastale'
                    ],
                    [
                        'icon' => 'icons/icon6.svg',
                        'name' => 'Sanatoria edilizia-urbanistica'
                    ]
                ]

            ]); ?>
        </div>
    </div>

    <!-- DETAILS SERVICE -->
    <div class="pt-150 pb-150 container-m m-auto">
        <?= $this->element('title', [
            'label' => 'dettaglio prezzi',
            'title' => 'Dettagli dei servizi',
            'text' => 'Approfondisci nel dettaglio i servizi inclusi nei nostri pacchetti',
            'extraClass' => "title--primary text-center mb-83",
        ]); ?>
        <div class="container-flex gap-37">
            <?= $this->element('list-info', [
                'title' => 'Inclusi nel pacchetto',
                'icon' => 'icons/icon7.svg',
                'list' => [
                    "<strong>Consulenza</strong> specifica dedicata",
                    "<strong>Visura planimetrica</strong> catastale",
                    "Visure catastali <strong>storiche e attuali</strong>",
                    "Verifica di <strong>conformità edilizia e catastale</strong> (se propedeutica ad una regolarizzazione)",
                    "<strong>Sopralluoghi</strong> tecnici di rilievo dell'immobile e restituzione grafica",
                    "Elaborazione e Presentazione della <strong>pratica edilizia di sanatoria</strong> (C.I.L.A. - S.C.I.A. - P.D.C.)",
                    "<strong>Variazione</strong> e <strong>aggiornamento</strong> Catastale (DOCFA)",
                ],
                'extraClass' => 'list-info--primary'
            ]); ?>
            <?= $this->element('list-info', [
                'title' => 'Aggiuntivi',
                'icon' => 'icons/plus.svg',
                'list' => [
                    "Accesso agli <strong>atti amministrativi</strong>",
                    "Accertamenti di <strong>Compatibilità Paesaggistica e Ambientale</strong> (se in presenza di specifico Vincolo)",
                    "Verifica di <strong>conformità edilizia e catastale</strong> (se indipendente da una regolarizzazione",
                    "<strong>Certificazione</strong> di Conformità Edilizia e Catastale",
                    "Cambi d'Uso, <strong>Frazionamenti</strong> e <strong>Fusioni</strong>",
                    "<strong>Progettazione integrata</strong> ristrutturazioni e nuovo",
                    "Direzione <strong>lavori</strong> e <strong>sicurezza</strong>",
                    "<strong>Perizie</strong> e <strong>stime</strong>",
                    "<strong>Consulenza</strong> energetica e strutturale",
                    "Attestato di <strong>Presentazione Energetica</strong> (A.P.E.)"
                ],
                'extraClass' => 'list-info--secondary'
            ]); ?>
        </div>
    </div>

    <!-- FORM -->
    <?= $this->element('form', [
        'title' => 'Parla con un nostro consulente tecnico e scopri come gestire la tua sanatoria edilizia.',
        'label' => 'inizia ora',
    ]); ?>
</div>