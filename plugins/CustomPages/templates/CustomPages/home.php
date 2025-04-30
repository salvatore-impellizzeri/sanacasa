<div class="home">

    <!-- HERO -->
    <div class="home__hero">
        <video src="img/video/home-video.mp4" autoplay loop muted playsinline></video>
        <div class="home__hero__content">
            <div class="home__hero__text">
                <span class="font-chillax font-24 fw-medium">
                    la sanatoria di casa, semplice
                </span>
                <h1 class="title-primary">
                    Il modo più semplice per gestire la tua sanatoria edilizia e catastale.
                </h1>
                <p class="font-20">
                    Architetto dedicato, sopralluogo e rilievo, verifica edilizia e catastale, sanatoria dell’immobile, regolarizzazione catastale, certificazione di conformità. 
                </p>
            </div>
            <div class="home__hero__buttons">
                <?= $this->element('cta', [
                    'label' => 'Come funziona',
                    'url' => '#',
                    'extraClass' => 'cta--secondary'
                ]); ?>
                <?= $this->element('cta', [
                    'label' => 'Parla con noi',
                    'url' => '#',
                    'extraClass' => 'cta--primary'
                ]); ?>
            </div>
        </div>
    </div>

    <!-- COME FUNZIONA -->
    <div class="home__info pt-150 container-s m-auto">
        <?= $this->element('title', [
            'label' => 'come funziona',
            'title' => 'Consulenti e tecnici specializzati a tua disposizione, tutte le volte che hai bisogno ',
            'extraClass' => 'text-center title--primary mb-96'
        ]); ?>
        <div class="home__info__content">
            <?= $this->element('img-text', [    
                'img' => 'img/img1.png',
                'label' => 'architetto',
                'title' => "Hai dubbi? Chiedi all'architetto",
                'text' => "Un tecnico tra i nostri partner di zona ti aiuterà con la regolarizzazione del tuo immobile. Ti seguiremo dal sopralluogo tecnico alla presentazione della pratica edilizia, dandoti consigli e informazioni sull’iter amministrativo e su come rendere facilmente commerciabile il tuo immobile ",
                'extraClass' => 'mb-96'
            ]); ?>
            <?= $this->element('img-text', [    
                'img' => 'img/img2.png',
                'label' => 'consulente tecnico',
                'title' => 'Il tuo esperto di regolarizzazione a portata di clic.',
                'text' => 'Un tecnico partner SANACASA della tua zona ti guida dalla A alla Z nella regolarizzazione del tuo immobile. Sopralluogo, pratiche, conformità: un professionista dedicato al tuo servizio online.',
                'extraClass' => 'invert'
            ]); ?>
        </div>
    </div>
</div>