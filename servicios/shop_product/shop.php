<?php

        // Incluir la clase de base de datos
        include_once("../../class/class.Database.php");

        $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

        if($action == 'ajax'){

		include 'pagination.php'; //incluir el archivo de paginación

		//las variables de paginación
        $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
        
        //categoria 1 todos los productos general
        $categoria =  (isset($_REQUEST['categoria'])&& $_REQUEST['categoria'] !=NULL)?$_REQUEST['categoria']:0;

        //caracteristica 1 todos los productos general
        $caracteristica =  (isset($_REQUEST['caracteristica'])&& $_REQUEST['caracteristica'] !=NULL)?$_REQUEST['caracteristica']:0;

        //ordenamiento de productos
        $orden =  (isset($_REQUEST['orden'])&& $_REQUEST['orden'] !=NULL)?$_REQUEST['orden']:'ASC';

		$per_page = 6; //la cantidad de registros que desea mostrar

		$adjacents  = 4; //brecha entre páginas después de varios adyacentes

		$offset = ($page - 1) * $per_page;

        //Cuenta el número total de filas de la tabla*/
        
        if($categoria == 0 || $caracteristica == 0 ) {

            $queryReg = "SELECT count(*) AS numrows FROM  productos";

            //consulta principal para recuperar los datos
		$sql = "SELECT
        productos.id,
        productos.codigo_prod,
        productos.descripcion,
        productos.precio,
        productos.stock,
        productos.stock_min,
        productos.comentario,
        productos.fecha_ingreso,
        estado.estado,
        categorias.categoria,
        caracteristica_product.caracteristica
        FROM
        productos
        INNER JOIN estado ON productos.estado = estado.id
        INNER JOIN categorias ON productos.categoria = categorias.id
        INNER JOIN caracteristica_product ON productos.caracteristica = caracteristica_product.id
        

        ORDER BY
        productos.id $orden

        LIMIT $offset,$per_page";


        }else{


            $queryReg = "SELECT count(*) AS numrows
        FROM
        productos
        INNER JOIN estado ON productos.estado = estado.id
        INNER JOIN categorias ON productos.categoria = categorias.id
        INNER JOIN caracteristica_product ON productos.caracteristica = caracteristica_product.id
        

        WHERE categorias.id = $categoria OR caracteristica_product.id = $caracteristica";


        //consulta principal para recuperar los datos
		$sql = "SELECT
        productos.id,
        productos.codigo_prod,
        productos.descripcion,
        productos.precio,
        productos.stock,
        productos.stock_min,
        productos.comentario,
        productos.fecha_ingreso,
        estado.estado,
        categorias.categoria,
        caracteristica_product.caracteristica
        FROM
        productos
        INNER JOIN estado ON productos.estado = estado.id
        INNER JOIN categorias ON productos.categoria = categorias.id
        INNER JOIN caracteristica_product ON productos.caracteristica = caracteristica_product.id
        

        WHERE categorias.id = $categoria AND caracteristica_product.id = $caracteristica


        ORDER BY
        productos.id $orden

        LIMIT $offset,$per_page";


        }

        $numrows = Database:: get_valor_query($queryReg, 'numrows' );
        
    	
		$total_pages = ceil($numrows/$per_page);

		$reload = 'index.php';

        

        $echo = Database:: get_arreglo($sql);

        include 'filter.php';

?>      

    <div class="col-lg-9 order-1 order-lg-2">
        <!-- Grid & List View Start -->
        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
            <div class="grid-list-view d-flex align-items-center  mb-sm-15">
                <ul class="nav tabs-area d-flex align-items-center">
                    <li>
                        <a class="active" data-toggle="tab" href="#grid-view">
                            <i class="fa fa-th"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#list-view" id="lista-prod">
                            <i class="fa fa-list-ul"></i>
                        </a>
                    </li>
                </ul>
                <span class="show-items"> Lista de Productos </span>
            </div>
            <!-- Toolbar Short Area Start -->
            <div class="main-toolbar-sorter clearfix">
                <div class="toolbar-sorter d-md-flex align-items-center">
                    <label>Ordenar:</label>
                    <select class="sorter wide">
                        <option value="Position">Relevance</option>
                        <option value="Product Name">Neme, A to Z</option>
                        <option value="Product Name">Neme, Z to A</option>
                        <option value="Price">Price low to heigh</option>
                        <option value="Price">Price heigh to low</option>
                    </select>
                </div>
            </div>
            <!-- Toolbar Short Area End -->
        </div>
        <!-- Grid & List View End -->
        <div class="shop-area mb-all-40">
            <!-- Grid & List Main Area End -->
            <div class="tab-content">
                <div id="grid-view" class="tab-pane fade show active">
                    <div class="row border-hover-effect">

    <?php

         for ($i=0; $i < count($echo) ; $i++) { 
       
        
    ?>

        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <!-- Single Product Start -->
            <div class="single-ponno-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="product-details.html">
                        <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                    </a>

                    <a class="sticker-new " href="wishlist.html">
                        <span class="ti-heart"></span>
                    </a>
                    <span class="sticker-sale">new</span>
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
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="quantity-pro">(200+)</span>
                        </div>
                    </div>
                    <div class="pro-add-cart">
                        <button type="button" valor-id="<?php echo $echo[$i]['codigo_prod']; ?>">Agregar
                        </button>
                    </div>
                </div>
                <!-- Product Content End -->
            </div>
        <!-- Single Product End -->
        </div> 
    <?php

        }//fin FOR      
                
    ?>
                
                    </div>
                    <!-- Row End -->
                </div>
                <!-- #grid view End -->
                <div id="list-view" class="tab-pane fade fix">
    
        <?php

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
                
        ?>
                                    
                </div>
                <!-- #list view End -->
            </div>
            <!-- Grid & List Main Area End -->
        </div>
        <!-- Shop Breadcrumb Area Start -->
        

            <?php echo paginate($reload, $page, $total_pages, $adjacents, $numrows);?>
                

        </div>
        <!-- Shop Breadcrumb Area End -->

    <?php
        }
    ?>

    </div>

   
