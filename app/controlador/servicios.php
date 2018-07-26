<?php
$gt = $_GET;
$url = strtolower($gt['peticion']); // quitar espacios trim() y minusculas strolower()
//$url = preg_replace("/^[0-9a-zA-Z]+$/","",$url); // quitar caracteres no aceptados mas los que esten en la expreción regular
$pet = explode('/', $url); // separa instrucciones para el blog
$url = trim($pet[0]); // url de registro en base de datos
//$jmyWeb ->pre(['p'=>$url,'t'=>'URL']);

/*$db = "servicios";
$t = $jmyWeb->modoEditor();
if($jmyWeb->modoEditor()){
	$VerificarDB = new JMY3MySQL();
	$VerificarDB->db([$db]);
}*/



if(in_array('pre',$pet)){ 
	$jmyWeb ->pre(['p'=>$out,'t'=>'PRE']);
}else{
	if($url!=''){
		$jmyWeb->cargar(["pagina"=>$url]);
		$out['pagina']=$url;
		echo $jmyWeb ->cargar_vista(["url"=>"servicios-detalles.php","data"=>$out]);	
	}else{
		$out = $jmyWeb->cargar(["pagina"=>"servicios"]);
		//$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARAY']);
		$out = $print[ot]['inicio'];
		$jmyWeb ->cargar_vista(["url"=>"servicios.php","data"=>$out]);
	}
}
?>