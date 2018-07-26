<?php

    $this ->pre([
        'p'=>$data,
        't'=>'Datos '
        ]);
    
     $page = "formuario";
?>

<div class="row">
    <div class="col-6">
        <div class="jmy_web_div" data-page="header" id="inf" data-editor="on"><?php $this->pnt('inf','Información editable',["secundario"=>"header"]); ?></div>
    </div>
</div>