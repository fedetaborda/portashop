<?php


if (isset ( $_GET['codigo_prod'] ) ) {

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
        produstos.codigo_prod = '".$_GET['codigo_prod']."'";

        $echo = Database:: get_arreglo($sql);

        if ( $echo ){

        $respuesta = json_encode( $echo );
        
        } else {

        $respuesta = '';
        } 


}//if isset


if (isset ( $_POST['codigo_prod'] ) ) {

    include_once("../../class/class.Database.php");


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
        produstos.codigo_prod = '".$_POST['codigo_prod']."'";

        $echo = Database:: get_arreglo($sql);

        if ( $echo ){

        echo $respuesta = json_encode( $echo );
        
        } else {

        $respuesta = '';
        } 


}//if isset

        

    

































?>