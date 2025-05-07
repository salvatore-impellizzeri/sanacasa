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
            ]
        ?>
        <div class="grid-cols-3 container-xl m-auto gap-37 gap-y-62 mb-96">
            <?php foreach ($articles as $article) { ?>
                <a href="<?= $this->Frontend->url($article['url']);?>" class="card card--articles">
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
        <div class="text-center">
            <?= $this->element('cta', [
                'label' => 'Carica altri articoli',
                'extraClass' => 'cta--primary'
            ]); ?>
        </div>
    </div>

     <!-- FORM -->
     <?= $this->element('form'); ?>
</div>