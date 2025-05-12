<div class="pt-h faq-page">
    <div class="container-title m-auto">
        <?= $this->element("title", [
            "label" => "FAQ",
            "title" => "Domande frequenti",
            "extraClass" => "title--primary text-center mb-105",
        ]); ?>
    </div>
    <div class="pb-100">
        <div class="container-faq m-auto mb-96">
            <div class="faq-page__accordion">
                <?= $this->element("faq", [
                    'faqs' => [
                        [
                            "title" => "Cosa comprende esattamente il servizio di SANACASA?", 
                            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, provident maiores cupiditate earum magni, temporibus ad eaque, distinctio suscipit accusamus molestiae rem corporis. Odit minus aliquid suscipit magni eos similique!"
                        ],
                        [
                            "title" => "Devo spostarmi o prendere appuntamenti fisici per la regolarizzazione?", 
                            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, provident maiores cupiditate earum magni, temporibus ad eaque, distinctio suscipit accusamus molestiae rem corporis. Odit minus aliquid suscipit magni eos similique!"
                        ],
                        [
                            "title" => "Chi si occuperà della mia pratica di regolarizzazione?", 
                            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, provident maiores cupiditate earum magni, temporibus ad eaque, distinctio suscipit accusamus molestiae rem corporis. Odit minus aliquid suscipit magni eos similique!"
                        ],
                        [
                            "title" => "Quali sono i tempi necessari per completare una regolarizzazione con SANACASA?", 
                            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, provident maiores cupiditate earum magni, temporibus ad eaque, distinctio suscipit accusamus molestiae rem corporis. Odit minus aliquid suscipit magni eos similique!"
                        ],
                        [
                            "title" => "Qunato costa il servizio di SANACASA?", 
                            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, provident maiores cupiditate earum magni, temporibus ad eaque, distinctio suscipit accusamus molestiae rem corporis. Odit minus aliquid suscipit magni eos similique!"
                        ],
                    ] 
                ]) ?>
            </div>
            <div class="faq-page__img fadeFromRight-40" data-animated>
                <img src="img/img7.png" alt="Immagine FAQ">
            </div>
        </div>
        <div class="text-center">
            <?= $this->element('cta', [
                'label' => "Vai alla form",
                'url' => "#",
                'extraClass' => "cta--primary fadeFromBottom-20"
            ]); ?>
        </div>
    </div>
    <?= $this->element('form', [
        'title' => 'Parla con un nostro consulente tecnico e scopri come gestire la tua sanatoria edilizia.',
        'label' => 'inizia ora',
    ]); ?>
</div>
