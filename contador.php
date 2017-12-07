
<?php

	session_start();

	if(!isset($_SESSION["contador"])){
		$_SESSION["contador"]=1;
	}else{
		// para mostrar por pantalla cuantos llevamos ---> echo 
		++$_SESSION["contador"];
		if($_SESSION["contador"]>10){
			echo "Has Recargado ".$_SESSION['contador']." veces la pagina";
		}
	}

?>