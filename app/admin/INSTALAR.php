<?php

require(RUTA_APP."class/jmy3webCore.class.php"); $jmycore = new JMY3WEBCORE();
require(RUTA_APP."class/token_jmy.class.php"); $jmyconect = new HiJMY();



$cu=new mysqli(DB_HO,DB_US,DB_PA,DB_DB);

if($cu->connect_error){$error='Error de Conexión ('.$mysqli->connect_errno.')'.$mysqli->error;}else{

$n='CREATE TABLE IF NOT EXISTS `cat_d` (

  `ID` int(11) NOT NULL AUTO_INCREMENT,

  `NAME` varchar(250) NOT NULL,

  PRIMARY KEY (`ID`),

  UNIQUE KEY `NAME` (`NAME`)

) ENGINE=MyISAM DEFAULT CHARSET=latin1;';

if(!$cu->query($n)){$g['cat_d'] = "Tabla existente-".$cu->error;}   

$g['cat_d'] = 'DB cat Install';

}



$g['db'] = $this->db(['blog','vistaweb','estadisticas']);		



$jmyWeb ->pre(['p'=>$g,'t'=>'Estado del instalador']);





