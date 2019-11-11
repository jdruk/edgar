<?php

// Primeiro servidor renet
$banco1 = mysql_connect('127.0.0.1', 'root', 'vertrigo');
mysql_select_db('mkradius', $banco1);

// Segundo servidor fnet
//$banco2 = mysql_connect('172.27.255.2', 'edgar', 'rhyan2006');
//mysql_select_db('mkradius', $banco2);

$banco3 = mysql_connect('127.0.0.1', 'root', 'vertrigo');
mysql_select_db('livro_caixa', $banco3);

// funçao para revomer caracteres
function    Tir($v){
   $v = str_replace("(", "", $v); 
   $v = str_replace(")", " ", $v);
   $v = str_replace("-", "", $v);
   $v = str_replace(".", " ", $v);  
   return $v;
}

$inicial=Tir($data_inicial);
$final=Tir($data_final);


?>
