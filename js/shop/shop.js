(function($) {
    "use Strict";

    load(1, 0);


})(jQuery);


function load(page, categoria) {

    console.log(page, categoria);

    var parametros = { "action": "ajax", "page": page, "categoria": categoria };

    $.ajax({
            type: 'POST',
            url: 'servicios/shop_product/shop.php',
            data: parametros,
        })
        .done(function(data) {

            $(".productos").html(data);

        })
}