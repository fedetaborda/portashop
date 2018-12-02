<?php
// Incluir la clase de base de datos
include_once("class/class.Database.php");


       $sql = "SELECT
        produstos.id,
        produstos.codigo_prod,
        produstos.descripcion,
        produstos.precio,
        produstos.stock,
        produstos.stock_min,
        produstos.estado,
        produstos.comentario,
        produstos.fecha_ingreso,
        produstos.estado,
        tipo_producto.tipo_producto
        FROM
        produstos
        INNER JOIN tipo_producto ON produstos.tipo_producto = tipo_producto.id
        WHERE
        produstos.estado = 1";

        $echo = Database:: get_arreglo($sql);

        if ( $echo ){

        $respuesta = json_encode( $echo );
        
        } else {

        $respuesta = '';
        }

        

    

































?>