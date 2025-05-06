<div class="home">

    <!-- HERO -->
    <div class="home__hero">
        <video src="img/video/home-video.mp4" autoplay loop muted playsinline></video>
        <div class="home__hero__content">
            <div class="home__hero__text">
                <?= $this->element('title', [
                    'label' => 'la sartoria di casa, semplice',
                    'title' => 'Il modo più semplice per gestire la tua sanatoria edilizia e catastale.',
                    'text' => "Architetto dedicato, sopralluogo e rilivelo, verifica edilizia e catastale, sanatoria dell'immobile, regolarizzazione catastale, certificazione di conformità.",
                    'extraClass' => "title--white",
                ]); ?>
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
    <div class="home__info pt-150 pb-150 container-s m-auto">
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
        <?= $this->element('cta', [
            'label' => 'Scopri di più',
            'url' => '#',
            'extraClass' => 'cta--unique'
        ]); ?>
    </div>

    <!-- INFO POSIZIONE -->
    <div class="home__position bg-primary pt-134 pb-134">
        <div class="container-m m-auto home__position__content">
            <div class="home__position__selection">
                <?= $this->element('title', [
                    'label' => 'dove siamo',
                    'title' => 'Scopri i nostri servizi attivi nella tua zona',
                    'extraClass' => 'title--primary mb-50'
                ]); ?>
                <div>
                    <!-- FORM -->
                    <!-- gli stili dei bottoni sono già stati fatti su cta.less -->
                </div>
            </div>
            <div>
                <div class="home__position__img">
                    <img src="img/italy.png" alt="Italia">
                </div>
            </div>
        </div>
    </div>

    <!-- HOME FORM -->
    <div class="home__form pb-182 pt-182 bg-gradient-blue">
        <div class="m-auto container-form">
            <?= $this->element('title', [
                'label' => 'inizia ora',
                'title' => 'Parla con un nostro consulente tecnico e scopri come gestire la tua sanatoria edilizia.',
                'extraClass' => 'text-center title--white mb-54'
            ]); ?>
        </div>
        <div class="home__form__content">
            <!-- FORM -->
        </div>
    </div>
</div>