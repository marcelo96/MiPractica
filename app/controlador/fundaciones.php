<?php
$gt = $_GET;
$url = strtolower($gt['peticion']); // quitar espacios trim() y minusculas strolower()
//$url = preg_replace("/^[0-9a-zA-Z]+$/","",$url); // quitar caracteres no aceptados mas los que esten en la expreción regular
$pet = explode('/', $url); // separa instrucciones para el blog
$url = trim($pet[0]); // url de registro en base de datos
$url = ($url!='')?$url:'cursos'; // pagina inicial
$out = $jmyWeb->cargar(["pagina"=>$url]);
//$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARAY']);
$out = $print[ot]['inicio'];
$out['pagina'] =  $url;
$jmyWeb ->cargar_vista(["url"=>"fundacion.php","data"=>$out]);

?>