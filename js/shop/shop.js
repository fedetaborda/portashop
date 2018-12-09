(function($) {
    "use Strict";


    $.ajax({
            type: 'POST',
            url: 'servicios/shop_product/shop_grid.php',
            data: ""
        })
        .done(function(data) {

            $(".outer_div").html(data);

        })

    $('#lista-prod').click(function(e) {

        e.preventDefault();

        //console.log('list');

        $.ajax({
                type: 'POST',
                url: 'servicios/shop_product/shop_list.php',
                data: ""
            })
            .done(function(data) {

                $(".outer_list").html(data);

            })



    });



})(jQuery);