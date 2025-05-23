<?php foreach ($faqs as $faq) { ?>
    <div class="faq fadeFromLeft-40" data-accordion data-animated>
        <div class="faq__toggler" data-accordion-toggler>
            <h3 class="faq__title"><?= $faq['title'] ?></h3>
            <span class="faq__toggler__indicator"></span>
        </div>
        <div class="faq__content" data-accordion-content>
            <div class="faq__paragraph font-18"><?= $faq['excerpt'] ?></div>
        </div>
    </div>
<?php } ?>