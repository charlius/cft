<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>

	<meta charset="utf-8">
</head>
</head>
<body>
	
		<?php
			include '../conectar.php';
			if(isset($_POST['login'])){
				$nombre_usuario = $_POST['nombre_usuario'];
				$pass = $_POST['pass'];
				$con=new connex();
				$seleccion="SELECT usuario.id_usuario,usuario.pass,cargo.descripcion,personal.id_personal FROM usuario,cargo,personal WHERE usuario.nombre='".$nombre_usuario."' and personal.cargo=cargo.id_cargo and personal.id_personal=usuario.id_personal";
				
				$consulta   = $con->query($seleccion);
				
				$fila=$con->row($consulta);

				
				if ($fila && password_verify($pass, $fila['pass'])) {
				
					
					$_SESSION["nombre_usuario"] = $nombre_usuario;
					$_SESSION["cargo"] = $fila["descripcion"];
					$_SESSION["id_personal"] = $fila["id_personal"];
					$_SESSION["id_usuario"]= $fila["id_usuario"];

				  	
					echo '<script> window.location="../index.php"; </script>';
					
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';

					echo  '<script> window.location="index.php"; </script>';
				}
			}
		?>	
</body>
</html>