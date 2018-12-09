<?php
// Incluir la clase de base de datos
include_once("class/class.Database.php");


       $sql = "SELECT
        produstos.id,
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
        productos.estado = 1";

        $echo = Database:: get_arreglo($sql);

        if ( $echo ){

        $respuesta = json_encode( $echo );
        
        } else {

        $respuesta = '';
        }

        

    

































?>