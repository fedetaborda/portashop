(function($) {
    "use Strict";

    load(1, 0, 0);


})(jQuery);


function load(page, categoria, caracteristica) {

    console.log(page, categoria, caracteristica);

    var parametros = { "action": "ajax", "page": page, "categoria": categoria, "caracteristica": caracteristica };

    $.ajax({
            type: 'POST',
            url: 'servicios/shop_product/shop.php',
            data: parametros,
        })
        .done(function(data) {

            $(".productos").html(data);

        })
}