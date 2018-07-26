<?php
//$page = $data['ID'][0];
//$tabla = $data['tablaTienda'];
//$this ->pre(['p'=>$data['lista']['otFm'],'t'=>'DATA']);
?>
<ul>
	<?php 
	    $resultados = $data['lista']['otFm'];

		for ($i=0; $i < count($resultados) ; $i++) { 
		    if($resultados[$i]['tituloP']!='' && $resultados[$i]['url_corta']!='')
		        echo '<li><a href="'.$this->url_inicio(['return'=>true]).'tienda/'.$resultados[$i]['url_corta'].'">'.$resultados[$i]['tituloP'].'</a></li>';
		}
	?>
    
</ul>