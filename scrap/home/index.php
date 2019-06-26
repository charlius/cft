<?php
$array=unserialize($_GET["dato"]);
$largo=count($array);
$lista="";

require 'funciones.php';

?>
<!DOCTYPE html>
<html>
<head>
	<script src="../js/jquery-1.12.4.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CFTsa-notas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link active" href="#">Selecione Ramo</a>
        <select class="mdb-select md-form">
        	<option value="" disabled selected>tu opcion de ramos</option>
		<?php nom_ramo($array)?>
		</select>
      </li>
    </ul>
    <span class="navbar-text">
      <a href="https://www.facebook.com/profile.php?id=100015727862469">@charles-facebook <img href="https://www.facebook.com/profile.php?id=100015727862469" src="../fb-icono.png"></a>
      <button onclick="">salir</button>
    </span>
  </div>
</nav>
<div id="padre">
	<input type="text" id="id" readonly>
	<div id=notas>
		

	</div>
	

</div>



</body>
	<script>

$(".mdb-select").on("change", function(){
	var arrayJS=<?php echo json_encode($array);?>;
 	var micapa = document.getElementById('notas');
 	var ramo=$(".mdb-select option:selected").text();
 	var padre = document.getElementById("padre");
 	var nota = document.getElementById("notas");
 	
 	padre.removeChild(nota);
 	
 	var div = document.createElement("div");
 	div.id="notas"
 	padre.appendChild(div);

 	
 	//alert(ramo+" - "+arrayJS[0][0]);
    // Mostramos los valores del array
    for(var i=0;i<arrayJS.length;i++)
    {
    	if (ramo==arrayJS[i][0]) {
			for (var j = 4; j < arrayJS.length; j++) {

    		//document.write("<br>"+arrayJS[i][j]);

    		
			   var padre = document.getElementById("notas");
			   //aquí agregamos el componente de tipo input
			   var input = document.createElement("INPUT");
			   //aquí indicamos que es un input de tipo text
			   input.type = 'text';
			   input.id='n'+(j-3);
			   input.value= arrayJS[i][j];
			   input.readonly="readonly"
			   
			   //y por ultimo agreamos el componente creado al padre
			   padre.appendChild(input);
			   $("#n"+(j-3)).attr("readonly","readonly");
    		}



		}
    	
        
    }
    $('#id').val($(".mdb-select option:selected").text());
});
</script>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    
</script>
</html>


