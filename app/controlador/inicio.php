<?php 
$out = $jmy->ver([	
			"TABLA"=>"blog", 		
			"COLUMNAS"=>["titulo","subtitulo","imagen_1","url","fecha","sub_titulo"],
			"SALIDA"=>"ARRAY"
			//"FO"=>true
			//"ID_F"=>'blog'
		]);
$t = $jmyWeb->cargar(["pagina"=>"inicio"]);
//$jmyWeb ->pre(['p'=>$t,'t'=>'TITULO_ARAY']);

$jmyWeb ->cargar_vista(["url"=>"inicio.php","data"=>["blog"=>$out['otFm']]]);

?>