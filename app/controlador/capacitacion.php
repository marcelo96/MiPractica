<?php
$gt = $_GET;
$url = strtolower($gt['peticion']); 
$pet = explode('/', $url); // separa instrucciones para el blog
$url = trim($pet[0]); // url de registro en base de datos
$out['pagina'] =  ($url!='')?$url:$gt['peticion'];
if($pet[1]!=''){
	
	//$jmyWeb ->pre(['p'=>$pet[1],'t'=>'URL']);
	$url = 'cursos-'.$pet[1];
	$out = $jmyWeb->cargar(["pagina"=>$url]);
	$jmyWeb ->cargar_vista(["url"=>"cursos-detalle.php","data"=>["pagina"=>$url]]);
}else{
	$out = $jmyWeb->cargar(["pagina"=>$url]);
	$jmyWeb ->cargar_vista(["url"=>"instituto.php","data"=>["pagina"=>$url]]);
}

 
?>