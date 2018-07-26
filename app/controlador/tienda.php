<?php

$config = [
    "tablaTienda"=>"tienda"
];
if($_GET['peticion']=='instalar'){
    $instalar = $jmy->db([$config['tablaTienda']]);
    $jmyWeb ->pre(['p'=>$instalar,'t'=>'Estado de la instalacion']);
}else{
    if($_GET['peticion']!=''){
       // $jmyWeb ->pre(['p'=>$_GET['peticion'],'t'=>'Peticion']);
        $out['ver'] = $jmy->ver([
                            "TABLA"=>$config['tablaTienda'],
                            "V"=>[$_GET['peticion']],
                            "COL"=>['url_corta'],
                            "SALIDA"=>"ID_F"
                    ]); 
                    
          $guardar= [
            'url_corta'=>$_GET['peticion']
        ];      
        $out['guardar']=$jmy->guardar([
            "TABLA"=>$config['tablaTienda'],
            "ID"=>$out['ver']['ot'][0],
            "A_D"=>true,
            "GUARDAR"=>$guardar
            ]);
            $ID = $out['guardar']['ID_F'];
            
            $jmyWeb->cargar([   "pagina"=>$ID[0],
                                "tabla"=>$config['tablaTienda']
                            ]);
            $jmyWeb->cargar_vista([
                            "url"=>"tienda.php",
                            "data"=>[   "ID"=>$ID,
                                        "tablaTienda"=>$config['tablaTienda']
                                        ]
            ]);
        }else{
            $jmyWeb->cargar([   "pagina"=>"tienda_lista",
            					"tabla"=>$config['tablaTienda']
             ]);
            $out =  $jmy->ver([
                    "TABLA"=>$config['tablaTienda'],
                    "SALIDA"=>"ARRAY"
             ]);
            $jmyWeb->cargar_vista([
                    "url"=>"tienda_lista.php",
                    "data"=>[ "lista" =>$out]
            ]);
        }
}