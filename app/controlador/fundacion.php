<?php
$gt = $_GET;
$url = strtolower($gt['peticion']); // quitar espacios trim() y minusculas strolower()
//$url = preg_replace("/^[0-9a-zA-Z]+$/","",$url); // quitar caracteres no aceptados mas los que esten en la expreción regular
$pet = explode('/', $url); // separa instrucciones para el blog
$url = trim($pet[0]); // url de registro en base de datos
$url = ($url!='')?$url:'fundacion'; // pagina inicial

//$jmyWeb ->pre(['p'=>$pet,'t'=>'TITULO_ARAY']);

$out['pagina'] =  $url;

switch($url):
	case 'trayectoria':
		if($pet[1]!=""){
			$out['pagina']=$pet[1];
			$vista = 'trayectoria_detalle';
			$c = $jmyWeb->cargar(["pagina"=>$out['pagina']]);
			$url = $url.'/'.$out['trayectoria'];
		}else{
			$vista = 'trayectoria';
			$c  = $jmyWeb->cargar(["pagina"=>'trayectoria']);
			//$jmyWeb ->pre(['p'=>$c,'t'=>'TITULO_ARRAY']);
		}
	break;
	default:
		$vista = 'fundacion';
		$jmyWeb->cargar(["pagina"=>$url]);
endswitch;

//$jmyWeb ->pre(['p'=>$url,'t'=>'url']);
$jmyWeb ->cargar_vista(["url"=>$vista.".php","data"=>$out]);

?>