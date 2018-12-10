<?php

// Incluir la clase de base de datos
include_once("../../class/class.Database.php");

$sql="SELECT
categorias.categoria,
Count(*) AS cantidad,
categorias.id
FROM
productos
INNER JOIN categorias ON productos.categoria = categorias.id
WHERE
categorias.estado = 1

GROUP BY productos.categoria
ORDER BY
categorias.categoria ASC
LIMIT 5";


$cat = Database:: get_arreglo($sql);



?>


<div class="col-lg-3 order-2 order-lg-1 mt-all-30">

    <div class="sidebar shop-sidebar">
            
            <!-- Price Filter Options End -->
            <!-- Sidebar Categorie Start -->
            <div class="sidebar-categorie mb-30">
                <h3 class="sidebar-title">categories</h3>
                <ul class="sidbar-style">

                <?php

                    for ($i=0; $i < count($cat) ; $i++) { 
                ?>
                    <li class="form-check active">
                        <label onclick="load( 1, <?php echo $cat[$i]['id']; ?>)" class="form-check-label"><?php echo $cat[$i]['categoria']; ?> (<?php echo $cat[$i]['cantidad']; ?>)</label>
                    </li>

                <?php
                    }
                ?>
                </ul>
            </div>
            <!-- Sidebar Categorie Start -->
            <!-- Product Size Start -->
            <div class="size mb-30">
                <h3 class="sidebar-title">size</h3>
                <ul class="size-list sidbar-style">
                    <li class="form-check">
                        <input class="form-check-input" value="" id="small" type="checkbox">
                        <label class="form-check-label" for="small">S (6)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="" id="medium" type="checkbox">
                        <label class="form-check-label" for="medium">M (9)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="" id="large" type="checkbox">
                        <label class="form-check-label" for="large">L (8)</label>
                    </li>
                </ul>
            </div>
            <!-- Product Size End -->
            <!-- Product Color Start -->
            <div class="color mb-30">
                <h3 class="sidebar-title">color</h3>
                <ul class="color-option sidbar-style">
                    <li>
                        <span class="white"></span>
                        <a href="#">white (4)</a>
                    </li>
                    <li>
                        <span class="orange"></span>
                        <a href="#">Orange (2)</a>
                    </li>
                    <li>
                        <span class="blue"></span>
                        <a href="#">Blue (6)</a>
                    </li>
                    <li>
                        <span class="yellow"></span>
                        <a href="#">Yellow (8)</a>
                    </li>
                </ul>
            </div>
            <!-- Product Color End -->
            <!-- Sidebar Categorie Start -->
            <div class="sidebar-categorie mb-30">
                <h3 class="sidebar-title">Components</h3>
                <ul class="sidbar-style">
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">cotton (4)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">polyester (4)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">Viscose (5)</label>
                    </li>
                </ul>
            </div>
            <!-- Sidebar Categorie Start -->
            <!-- Sidebar Categorie Start -->
            <div class="sidebar-categorie mb-30">
                <h3 class="sidebar-title">Styles</h3>
                <ul class="sidbar-style">
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">casual (5)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">dressy (2)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">girly (8)</label>
                    </li>
                </ul>
            </div>
            <!-- Sidebar Categorie Start -->
            <!-- Sidebar Categorie Start -->
            <div class="sidebar-categorie">
                <h3 class="sidebar-title">Properties</h3>
                <ul class="sidbar-style">
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">colorful dress (2)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">maxi dress (2)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">midi dress (2)</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">short dress (4) </label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input" value="#" type="checkbox">
                        <label class="form-check-label">short sleve (3) </label>
                    </li>
                </ul>
            </div>
            <!-- Sidebar Categorie Start -->
    </div>

</div>



