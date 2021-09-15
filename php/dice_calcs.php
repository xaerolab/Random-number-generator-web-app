<?php
$nro_dados = $_POST['nroDados'];
$nro_caras = $_POST['nroCaras'];
$dados = [];

switch ($nro_caras) {
	case 4:
		for ($i=0; $i<$nro_dados; $i++) { 
			$nro_random = rand(1,4);
		   	array_push($dados, $nro_random);	
		}
		
		break;

	case 6:
		for ($i=0; $i<$nro_dados; $i++) { 
			$nro_random = rand(1,6);
		   	array_push($dados, $nro_random);	
		}
		break;

	case 8:
		for ($i=0; $i<$nro_dados; $i++) { 
			$nro_random = rand(1,8);
		   	array_push($dados, $nro_random);	
		}
		break;

	case 10:
		for ($i=0; $i<$nro_dados; $i++) { 
			$nro_random = rand(1,10);
		   	array_push($dados, $nro_random);	
		}
		break;

	case 12:
		for ($i=0; $i<$nro_dados; $i++) { 
			$nro_random = rand(1,12);
		   	array_push($dados, $nro_random);	
		}
		break;

	case 20:
		for ($i=0; $i<$nro_dados; $i++) { 
			$nro_random = rand(1,20);
		   	array_push($dados, $nro_random);	
		}
		break;
	
	default:
	
		break;
}

echo json_encode($dados);




