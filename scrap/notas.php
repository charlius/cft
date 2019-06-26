<?php 
$rut=$_GET["cliente"];
$pass=$_GET["pass"];
include 'cft2.php';
require 'home/funciones.php';
//$op=$_GET['op'];
$op=1;
$html = str_get_html($response);
$contador=0;
$var=0;
$notas = array();
$datos=  array();
foreach ($html->find('td[colspan=2]') as $elemento) {
 	# code...
 	$contador=$contador+1;
 	//echo " este es un contdor ".$contador;
 	if ($contador==4) {
 		
	 //	echo "este es un contdor ".$contador;
	 	$html =$elemento;
	 	
 	}
} 
$contador=0;
$contador=0;
$datos=  array();
$datos_t= array();
$nom1="";
foreach ($html->find('table') as $ele) {
	# code...
	foreach ($ele->find('font[face=Verdana, Arial, Helvetica, sans-serif]') as $valor) {
	
			//echo $valor;
	
		}

}


	
foreach ($html->find('font[face=Arial, Helvetica, sans-serif]') as $valor) {
	# code...
	//echo "***este es un nuevo contdor**** ";

	$nom1 = substr($valor->plaintext, 0, 3);
	break;
	
}
 $nom='AUT';
foreach ($html->find('font[face=Arial, Helvetica, sans-serif]') as $valor) {
	# code...
	//echo "***este es un nuevo contdor**** ";
	

	$n=substr($valor->plaintext,0,3);

	
	if (strcasecmp($n, $nom1) == 0){
		
		
		$contador=$contador+1;
		$notas['ramo'.$contador]= $datos;
		$datos['ramo'.$contador]=$datos_t;
		unset($datos_t);
		$datos_t= array();		
    	
	} else{
		$nom=$valor->plaintext;
		
		//array_push($datos, $nom);
		$datos_t[]=$nom;


	}
	
	//echo "  ".$valor." ";
	
}
$datos['ramo'.($contador+1)]=$datos_t;


$largo=count($datos);

for ($i=1;$i<=$largo-1;$i++) {
	# code...
	//print_r($datos["ramo".($i)][0]);
	//echo "<br />";
}

$contador=0;
if ($op==1) {
		# code...
	
	print_r(json_encode($datos));
	
	}else{

		$datos=año($datos);
		
		//header ("Location: http://localhost/anteriores/scrap/home/index.php?dato=".serialize($datos));
	}	
 

	
?>
   
 




