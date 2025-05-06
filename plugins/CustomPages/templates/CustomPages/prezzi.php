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
            'extraClass' => "title--white text-center",
        ]); ?>
        <div class="pt-134">
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

    <!-- FORM -->
    <?= $this->element('form'); ?>
</div>