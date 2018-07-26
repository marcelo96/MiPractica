<?php 
$db = "nosotros";
$t = $jmyWeb->modoEditor();
if($jmyWeb->modoEditor()){
	$VerificarDB = new JMY3MySQL();
	$VerificarDB->db([$db]);
}
$jmyWeb->cargar(["pagina"=>$db]);

$jmyWeb ->cargar_vista(["url"=>$db.'.php']);

?>