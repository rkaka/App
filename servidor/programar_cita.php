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


	}



?>