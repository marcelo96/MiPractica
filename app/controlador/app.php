<?php
/*
require('../config.inc.php');
require("../app/class/token_jmy.class.php");
*/
//require("app/class/jmy3mysql.class.php");
//require(RUTA_APP."class/jmy3mysql.class.php");
$jmyconect = new HiJMY();
//$jmy = new JMY3MySQL();
$ID_F = '';
$get = $jmyconect->get($_POST);


$out=[
	//"JMY_KEY"=>JMY_KEY,
	//"JMY_SECRET_KEY"=>JMY_SECRET_KEY,
	"GET"=>$get,
	"_POST"=>$_POST,
	
	"db"=>$jmy->db([$get['post']['TABLA']]),
	
					
	"guardar"=>$jmy->guardar([	"TABLA"=>"PRODUCTOS", // STRING
								"ID"=>[$get['id']], // Array
								"COLUMNAS"=>['nombre'], // Array
								"AGREGAR_COLUMNAS"=>TRUE, 
								"GUARDAR"=>$get['post']['CAMPOS'],
					]),
	
	"ver"=>$jmy->ver([	"TABLA"=>$get['post']['TABLA'], // STRING
						"ID"=>$get['post']['TABLA'], // STRING OPCIONAL
						//"COLUMNAS"=>["NOMBRE","APELLIDO","SEXO","SEXO"], // ARRAY OPCIONAL
						//"BUSQUEDA"=>["angora","luciernaga"], // ARRAY OPCIONAL
						//"VARIABLE"=>[5,6], // BUSCA POR VARIALBES EXACTAS
						//"LIKE_V_OPER"=>"AND" // STRING OPCIONAL OPERADOR PARA BUSQUEDA ENTRE OR Y AND ,OR DEFAULT
						//"SALIDA"=>"ID_F", // STRING OCIONAL ARRAY, ID_F, CONTADOR // Permite que el regreso del array en diferentes acomds y resultados
						//"ESTADO"=>[0,1], // ARRAY OPCIONAL Filtra estados (0 borrado, 1 activo)
					]),				
	/*				
	"borrar"=>$jmy->borrar([	"TABLA"=>"PRODUCTOS", // STRING
								"COLUNAS"=>["APELLIDO"], // ARRAY 
								"ID"=>$ID, // STRING 
					]),
	"ver2_codigo_antiguo"=>$jmy->ver([	"TABLA"=>"PRODUCTOS", // STRING
						"ID_D"=>["NOMBRE","APELLIDO","SEXO","SEXO"], // ARRAY OPCIONAL
						"ID_F"=>$ID_F, // STRING OPCIONAL
						//"ID_V"=>[5,6], // ARRAY OPCIONAL
						//"ID_S"=>[7,8], // ARRAY OPCIONAL
						//"LIKE_V"=>["angora","luciernaga"], // ARRAY OPCIONAL
						//"LIKE_V_OPER"=>"AND" // STRING OPCIONAL
					]),*/
					
];
echo json_encode($out);
/*echo '<pre>';
print_r($out);
echo '</pre>';*/