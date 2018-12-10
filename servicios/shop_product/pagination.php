<?php

function paginate($reload, $page, $tpages, $adjacents, $numrows, $categoria) { 


    $prevlabel = "Anterior";
	$nextlabel = "Siguiente";
    $out = '<ul class="pfolio-breadcrumb-list text-center">';

?>
    
<!-- Shop Breadcrumb Area Start -->
<div class="shop-breadcrumb-area border-default paginator">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-5">
            <span class="show-items">Producto 1 al 9 de <?php echo $numrows ?> item(s) </span>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-7">
            <ul class="pfolio-breadcrumb-list text-center">

<?php	
	// previous label

	if($page==1) {
		$out.= "<li class='float-left prev disabled'><span><a><i class='fa fa-angle-left' aria-hidden='true'></i>$prevlabel</a></span></li>";
	} else if($page==2) {
		$out.= "<li class='float-left prev'><a href='javascript:void(0);' onclick='load( 1 ,".$categoria.")'><i class='fa fa-angle-left' aria-hidden='true'></i>$prevlabel</a></li>";
	}else {
		$out.= "<li class='float-left prev'><span><a href='javascript:void(0);' onclick='load(".($page-1).",".$categoria.")'><i class='fa fa-angle-left' aria-hidden='true'></i>$prevlabel</a></span></li>";

	}
	
	// first label
	if($page>($adjacents+1)) {
		$out.= "<li><a href='javascript:void(0);' onclick='load(1,".$categoria.")'>1</a></li>";
	}
	// interval
	if($page>($adjacents+2)) {
		$out.= "<li><a>...</a></li>";
	}

	// pages

	$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
	$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
	for($i=$pmin; $i<=$pmax; $i++) {
		if($i==$page) {
			$out.= "<li class='active'><a>$i</a></li>";
		}else if($i==1) {
			$out.= "<li><a href='javascript:void(0);' onclick='load(1,".$categoria.")'>$i</a></li>";
		}else {
			$out.= "<li><a href='javascript:void(0);' onclick='load(".$i.",".$categoria.")'>$i</a></li>";
		}
	}

	// interval

	if($page<($tpages-$adjacents-1)) {
		$out.= "<li><a>...</a></li>";
	}

	// last

	if($page<($tpages-$adjacents)) {
		$out.= "<li class='float-left prev'><a href='javascript:void(0);' onclick='load($tpages,".$categoria.")'>$tpages</a></li>";
	}

	// next

	if($page<$tpages) {
		$out.= "<li class='float-right next'><span><a href='javascript:void(0);' onclick='load(".($page+1).", ".$categoria.")'>$nextlabel<i class='fa fa-angle-right' aria-hidden='true'></i></a></span></li>";
	}else {
		$out.= "<li class='float-right next disabled'><span><a>$nextlabel<i class='fa fa-angle-right' aria-hidden='true'></i></a></span></li>";
	}
	
    return $out;

}

?>

            </ul>
        </div>
    </div>
</div>
<!-- Shop Breadcrumb Area End -->