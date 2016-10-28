<?php

	require_once("conexion.php");

	$con = new Conexion();
	
	$opc = $_POST['opcion'];

	
	/*$sql="select * from usuarios";
	$resultado = $con->get_resultados_query($sql);
	print_r($resultado);*/

	switch($opc){

		case 'login':

			$us = $_POST['usuario'];
			$ps = $_POST['password'];

			$sql = 'SELECT * FROM usuarios where nombre = "'.$us.'";';

			$res = $con->get_resultados_query($sql);		

			if ($res){

				if($res[0]['pass']==$ps){
					echo "ok";
				}else{

					echo "Contraseña no es correcta";
				}

			}else{

				echo "El usuario aun no esta registrado";
			}


			break;

		case 'registro':	

		    $ced = $_POST['ced'];
		    $nom = $_POST['nom'];
		    $ape = $_POST['ape'];
		    $tel = $_POST['tel'];
		    $esp = $_POST['esp'];
		    $fec = $_POST['fec'];
		    $hor = $_POST['hor'];

		     $sql2 = "INSERT INTO personas VALUES ('".$ced."', '".$nom."', '".$ape."', '".$tel."', '".$esp."', '".$fec."','".$hor."');"	;
      //      // $sql = 'INSERT INTO paciente ('cedula', 'nombre', 'apellido', 'telefono', 'especialidad', 'fecha', 'hora') VALUES ("'.$nom.'", "'.$ape.'", "'.$ced.'", "'.$tel.'", '.$esp.', '.$fec.', '.$hor.'); 

            $res = $con->ejecutar_query($sql2);
			
			if ($res==true) {
				echo"ok";	
			}else{
				echo"falso";	
			}
			 


		   break;   


			


	}



?>