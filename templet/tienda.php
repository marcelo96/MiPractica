<?php
$page = $data['ID'][0];
//$this ->pre(['p'=>$data,'t'=>'DATA']);
$tabla = $data['tablaTienda'];
?>
<article class="des">
		<table>
	<tbody><tr>
		<td>
        
        <div class="jmy_web_slider" data-page="<?php echo $page; ?>" data-tabla="<?php echo $tabla; ?>"  data-tabla="vistaweb" id="marco10" data-marco="marco10" <?php 
                                  $va[] = [ "type"=>"imagen","id"=>"imagen","width"=>"385","height"=>"252","url"=>'‪https://1mo2f44bo6lxqaiw53rzkxp1-wpengine.netdna-ssl.com/wp-content/uploads/2017/05/imagenlogogreyyellow.png' ];  ?>  data-var='<?php echo json_encode($va); ?>'></div>

        <img id="imagen" src="<?php $this->pnt('imagen','‪https://1mo2f44bo6lxqaiw53rzkxp1-wpengine.netdna-ssl.com/wp-content/uploads/2017/05/imagenlogogreyyellow.png'); ?>">
        
        </td>
		<td><h1><div class="jmy_web_div"  data-tabla="<?php echo $tabla; ?>"  data-page="<?php echo $page; ?>" id="tituloP" data-editor="no"><?php $this->pnt('tituloP','Nombre del producto'); ?></div></h1><br>

        <div class="jmy_web_div" data-tabla="<?php echo $tabla; ?>"  data-page="<?php echo $page; ?>" id="descripcion" data-editor="on"><?php $this->pnt('descripcion','<p><strong>$000.00</strong> de contado</p><br><p>Desde $00.00 quincenal</p>'); ?>
		</td>
	</tr>
</tbody></table>
</article>