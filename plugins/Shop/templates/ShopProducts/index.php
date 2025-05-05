<?php $this->extend('/Common/shop') ?>

<script>
<?php $this->Html->scriptStart(['block' => 'scriptBottom']) ?>
$(function () {
    let $productsContainer = $('[data-shop-products]'),
        page = <?= $this->request->getQuery('page', 1); ?>,
        $paginationLinks = $('[data-shop-pagination] [data-page]');

    function buildQueryString() {
        let params = {
            page: page
        };

        return new URLSearchParams(params).toString();
    }   

    function loadProducts(pushState = true) {
        $productsContainer.addClass('shop__grid--loading');
        $.get('<?= $this->Frontend->url('/shop-products/get') ?>', {
            page: page,    
        }, function(data){
            $productsContainer.removeClass('shop__grid--loading');
            $productsContainer.html(data);
            updatePagination();
            if (pushState){
                history.pushState({ page: page }, "", "?" + buildQueryString());
                document.querySelector('[data-shop-products]').scrollIntoView({
                    behavior: 'smooth'
                });
            }
            
        });
    }

    function updatePagination() {
        $paginationLinks.filter('[data-current]').removeAttr('data-current');
        $paginationLinks.filter('[data-page="' + page + '"]').attr('data-current', true);
    }

    window.addEventListener("popstate", function (event) {
        if (event.state !== null) {
            page = event.state.page;
            loadProducts(false);
        } else {
            page = 1;
            loadProducts(false);
        }
    });

    loadProducts(false);

    $paginationLinks.on('click', function(ev){
        ev.preventDefault();
        let newPage = parseInt($(this).attr('data-page'));

        if (newPage != page) {
            page = newPage;
            loadProducts();
        }
    });

});
<?php $this->Html->scriptEnd() ?>
</script>