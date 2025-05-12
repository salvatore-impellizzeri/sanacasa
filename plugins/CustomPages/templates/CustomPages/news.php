<div class="pt-h">
    <div class="pb-134">
        <?= $this->element('title', [
            'label' => 'news',
            'title' => 'Le ultime notizie e insights <br> dal mondo della sanatoria',
            'extraClass' => "title--primary text-center mb-105",
        ]); ?>
        <?php
            $articles = [
                [
                    'img' => 'img/img7.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
                [
                    'img' => 'img/img8.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
                [
                    'img' => 'img/img9.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
                [
                    'img' => 'img/img7.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
                [
                    'img' => 'img/img8.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
                [
                    'img' => 'img/img9.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
            ];

            $articlesHidden = [
                [
                    'img' => 'img/img7.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
                [
                    'img' => 'img/img8.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
                [
                    'img' => 'img/img9.png',
                    'date' => '10.04.25',
                    'url' => '/custom-pages/view/6',
                    'text' => 'Difformità opere interne: CILA in sanatoria, come sanare e quanto costa?'
                ],
            ];
        ?>
        <div class="container-xl m-auto mb-96">
            <div class="grid-cols-3 gap-37 gap-y-62">
                <?php foreach ($articles as $article) { ?>
                    <a href="<?= $this->Frontend->url($article['url']);?>" class="card card--articles fadeFromLeft-40" data-animated>
                        <div class="card--articles__img">
                            <img src="<?= $article['img'] ?>" alt="Immagine Articolo">
                        </div>
                        <div class="card--articles__text">
                            <div class="font-20 card--articles__date fw-medium">
                                <?= $article['date'] ?>
                            </div>
                            <h3>
                                <?= $article['text'] ?>
                            </h3>
                        </div>
                </a>
                <?php } ?>
            </div>
            <div class="hidden-articles">
                <div class="hidden-articles__wrapper grid-cols-3 gap-37 gap-y-62">
                    <?php foreach ($articlesHidden as $articleHidden) { ?>
                        <a href="<?= $this->Frontend->url($article['url']);?>" class="card card--articles fadeFromLeft-40" data-animated>
                            <div class="card--articles__img">
                                <img src="<?= $article['img'] ?>" alt="Immagine Articolo">
                            </div>
                            <div class="card--articles__text">
                                <div class="font-20 card--articles__date fw-medium">
                                    <?= $article['date'] ?>
                                </div>
                                <h3>
                                    <?= $article['text'] ?>
                                </h3>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="text-center">
            <?= $this->element('cta', [
                'label' => 'Carica altri articoli',
                'extraClass' => 'cta--primary fadeFromBottom-20 more-news'
            ]); ?>
        </div>
    </div>

    <!-- FORM -->
    <?= $this->element('form', [
        'title' => 'Parla con un nostro consulente tecnico e scopri come gestire la tua sanatoria edilizia.',
        'label' => 'inizia ora',
    ]); ?>
</div>