<?php
function nom_ramo($array){
	$largo=count($array);
	$lista="";
	
	for ($i=0;$i<=$largo;$i++) {
	# code...
		
			
		$lista.= "<option>".$array[$i][0]."</option>";
		
	}
	echo $lista;
}

function año($array){
	$largo=count($array);
	
	$arreglo = array();
	for ($i=2;$i<=$largo;$i++) {
	# code...
	
		if ($array["ramo".($i)][3]==2019 ) {
			
			
				# code...
				$arreglo[]=$array["ramo".($i)];

		
			
			
			
		}
	
	
		
	
	//print_r($datos["ramo".($i)][0]);
	//echo "<br />";
	}
	return $arreglo;

}

	



	
?>