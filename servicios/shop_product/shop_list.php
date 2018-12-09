<?php

        // Incluir la clase de base de datos
        include_once("../../class/class.Database.php");

		//include 'pagination.php'; //incluir el archivo de paginación

		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

		$per_page = 4; //la cantidad de registros que desea mostrar

		$adjacents  = 4; //brecha entre páginas después de varios adyacentes

		$offset = ($page - 1) * $per_page;

		//Cuenta el número total de filas de la tabla*/

        $queryReg = "SELECT count(*) AS numrows FROM  productos";


        $numrows = Database:: get_valor_query($queryReg, 'numrows' );
        
    	
		$total_pages = ceil($numrows/$per_page);

		$reload = 'index.php';

        //consulta principal para recuperar los datos
		$sql = "SELECT
        productos.id,
        productos.codigo_prod,
        productos.descripcion,
        productos.precio,
        productos.stock,
        productos.stock_min,
        productos.estado,
        productos.comentario,
        productos.fecha_ingreso,
        productos.estado,
        tipo_producto.tipo_producto
        FROM
        productos
        INNER JOIN tipo_producto ON productos.tipo_producto = tipo_producto.id
        WHERE
        productos.estado = 1 ORDER BY productos.descripcion LIMIT $offset,$per_page";

        $echo = Database:: get_arreglo($sql);



		if ($numrows>0){

        for ($i=0; $i < count($echo) ; $i++) { 
        
        ?>

            <!-- Single Product Start -->
            <div class="single-ponno-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="product-details.html">
                        <img class="primary-img" src="img/products/p2.jpg" alt="single-product">
                    </a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4>
                            <a href="product-details.html"><?php echo $echo[$i]['descripcion']; ?></a>
                        </h4>
                        <p>
                            <span class="special-price">$<?php echo $echo[$i]['precio']; ?></span>
                        </p>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <span class="quantity-pro">(200+)</span>
                        </div>
                        <p>Phone is a revolutionary new mobile phone that allows you to make a call
                            by simply tapping a name or number in your address book, a favorites
                            list, or a call log. It also automatically syncs all your..</p>
                        <p>
                        <div class="pro-actions">
                        <div class="pro-add-cart">
                            <button type="button" valor-id="<?php echo $echo[$i]['codigo_prod']; ?>">Agregar
                            </button>
                        </div>

                        </div>
                    </div>
                </div>
                <!-- Product Content End -->
            </div>
            <!-- Single Product End -->

        
        <?php

        }//fin FOR      
            
    }
        
?>
           
