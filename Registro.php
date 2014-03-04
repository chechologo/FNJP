<?
	header( 'Content-Type: text/html;charset=utf-8' ); //reconoce acentos y caracteres de otros idiomas como la Ñ
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$diaNacimiento = $_POST["diaNacimiento"];
	$mesNacimiento = $_POST["mesNacimiento"];
	$anoNacimiento = $_POST["anoNacimiento"];
	$sexo = $_POST["sexo"];
	$tipoDoc = $_POST["tipoDoc"];
	$numDoc = $_POST["numDoc"];
	
	
	if(empty($nombre)||empty($apellido)||empty($diaNacimiento)||empty($mesNacimiento)||empty($anoNacimiento)||empty($sexo)||empty($tipoDoc)||empty($numDoc))
	{
		echo '<font color="#FF0033">';
		echo "<br>NO INGRESO DATOS COMPLETOS PARA REGISTRAR";	
		echo '</font>';
	}
	
	else
	{
		echo "<br>NOMBRE: $nombre";
		echo "<br>APELLIDO: $apellido";
			
		/*************************************************************************************
										CALCULAR  AÑOS DE EDAD								*/
		$anoEdad = date("Y ") - $anoNacimiento;				
		if(($mesNacimiento==date("n")&&$diaNacimiento<=date("j"))||$mesNacimiento<date("n"))
		echo "<br>EDAD:<tr>".$anoEdad." años";
		else
		{
			$anoEdad--;
			echo "<br>EDAD:<tr>".$anoEdad." años";
		}
		/*************************************************************************************/
	
	
		echo "<br>SEXO: $sexo";
	
		
		echo "<br>".$tipoDoc." ".$numDoc; //echo "<br>$tipoDoc $numDoc";  forma alterna de concatenar
	}
?>