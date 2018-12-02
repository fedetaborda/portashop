$(document).ready(function() {


    var productos = [];

    var productosStorage = JSON.parse(localStorage.getItem("productos"));


    if (productosStorage != null) {

        productos = productosStorage;

        console.log(productos);

    }


    function list() {

        $("cart-checkout-delete").click(function() {
            alert("Handler for .click() called.");
        });


        $('#list_cart').empty();

        $('#footer').empty();


        var productosStorage = JSON.parse(localStorage.getItem("productos"));

        if (productosStorage != null) {


            productosStorage.forEach(function(producto) {

                var index = 0;
                var content = "";
                content += '<div class="single-cart-box">'
                content += '<div class="cart-img">'
                content += '<a href="productos.php?codigo_prod=' + producto[index].codigo_prod + '">'
                content += '<img src="img/products/p1.jpg" alt=' + producto[index].descripcion + '>'
                content += '</a>'
                content += '<span class="pro-quantity">1X</span>'
                content += '</div>'
                content += '<div class="cart-content">'
                content += '<h6>'
                content += '<a href="productos.php?codigo_prod=' + producto[index].codigo_prod + '">' + producto[index].descripcion + '</a>'
                content += '</h6>'
                content += '<span class="cart-price">$' + producto[index].precio + '</span>'
                content += '<span>Size: S</span>'
                content += '<span>Color: Yellow</span>'
                content += '</div>'
                content += '<a class="del-icone" href="#">'
                content += '<span class="ti-close"></span>'
                content += '</a>'
                content += '</div>'


                $('#list_cart').append(content);

                index += 1;


            });

            var content2 = "";

            content2 += '<ul class="price-content">'
            content2 += '<li>Subtotal'
            content2 += '<span>$57.95</span>'
            content2 += '</li>'
            content2 += '<li>Shipping'
            content2 += '<span>$7.00</span>'
            content2 += '</li>'
            content2 += '<li>Taxes'
            content2 += '<span>$0.00</span>'
            content2 += '</li>'
            content2 += '<li>Total'
            content2 += '<span>$64.95</span>'
            content2 += '</li>'
            content2 += '</ul>'
            content2 += '<div class="cart-actions text-center">'
            content2 += '<a class="cart-checkout" href="checkout.html">Ver Carrito</a>'
            content2 += '<a href="#" class="cart-checkout-delete">Vaciar Carrito</a>'
            content2 += '</div>'

            $('#footer').append(content2);

        } else {

            var nodata = "";

            nodata += '<p class="text-dark">No Existen Productos</p>';


            $('#list_cart').html(nodata);


        }


    }

    function addCart(id) {
        if (id) {

            $.ajax({
                type: 'POST',
                url: 'servicios/index/get_producto.php',
                data: 'codigo_prod=' + id,
                dataType: 'json'

            })

            .done(function(data) {

                productos.push(data);

                localStorage.setItem("productos", JSON.stringify(productos));

                //lista nuevamente carrito
                list();


                //console.log(productosStorage);


            })


            .fail(function(data) {
                console.log(data);
            })
        }
    }



}); //fin