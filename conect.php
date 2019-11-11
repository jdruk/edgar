<?php

$banco1 = mysql_connect('127.0.0.1', 'root', 'vertrigo');
mysql_select_db('mkradius', $banco1);

//$banco2 = mysql_connect('172.29.255.2', 'root', 'rhyan2006');
//mysql_select_db('mkradius', $banco2);

$banco3 = mysql_connect('localhost', 'root', 'vertrigo');
mysql_select_db('livro_caixa', $banco3);

?>

