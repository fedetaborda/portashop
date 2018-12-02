(function($) {
    "use Strict";

    var productos = JSON.parse(localStorage.getItem("productos"));

    $('#eliminar-card').hide();

    if (productos != null) {

        $('#eliminar-card').show();


        productos.forEach(function(producto) {

            let index = 0;

            cont = "";
            cont += '<tr>'
            cont += '<td class="product-thumbnail">'
            cont += '<a href="productos.php?codigo_prod=' + producto[index].codigo_prod + '"><img src="img/products/p12.jpg" alt="' + producto[index].descripcion + '" /></a>'
            cont += '</td>'
            cont += '<td class="product-name"><a href="product-details.html">' + producto[index].descripcion + '</a></td>'
            cont += '<td class="product-price"><span class="amount">$' + producto[index].precio + '</span></td>'
            cont += '<td class="product-quantity"><input type="number" value="1" /></td>'
            cont += '<td class="product-subtotal">£165.00</td>'
            cont += '<td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>'
            cont += '</tr>'

            $('#table-cart').append(cont);

            index += 1;


        });

    } else {

        $('#table-cart').empty();
        cont = "";
        cont += '<p class="text-danger">No Existen Productos en el Carrito</p>';
        cont += '<a href="index.php" style="font-size:0.9em">Ver Productos</a>';

        $('#no-product').append(cont);

    }

    $('#eliminar-card').on('click', function(e) {

        e.preventDefault();

        localStorage.clear();

        $('#table-cart').empty();
        cont = "";
        cont += '<p class="text-danger">No Existen Productos en el Carrito</p>';
        cont += '<a href="index.php" style="font-size:0.9em">Ver Productos</a>';

        $('#no-product').append(cont);

        $('#eliminar-card').hide();
    });


})(jQuery);