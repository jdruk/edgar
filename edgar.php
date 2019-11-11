<?php

$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "mkradius";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$mes = date("m");
$ano = date("Y");
$dia = date("t", mktime(0,0,0,$mes,'01',$ano));
$teste = "select numconta, round(sum(valorpag), 2) as valor from sis_lanc where datapag between '$ano-$mes-01' and '$ano-$mes-$dia' group by numconta";
$result = mysqli_query($conn, $teste);

function banco($id, $valor){
   switch ($id) {
    case 19:
		$mes = date("m");
		$checkn = "SELECT * FROM lc_movimento WHERE cat='23' and mes='$mes'";
		$sqlcheckn = mysql_query($checkn);
		$rowsn = mysql_num_rows($sqlcheckn);
		if($linha == 0){
			$dia = date("d");
			$mes = date("m");
			$ano = date("Y");
			$conn_santander = mysqli_connect("localhost", "root", "vertrigo", "livro_caixa");
			$insert_santander = "INSERT INTO lc_movimento (dia,mes,ano,tipo,descricao,valor,cat) values ('$dia','$mes','$ano','1','Entrada','$valor','23')";
			mysqli_query($conn_santander, $insert_santander);
			echo mysql_error();
		} else {
			mysql_query($conn_santander, "UPDATE lc_movimento SET valor='$valor' WHERE cat='23' and mes='$mes'");
			echo mysql_error();		
		}
		

        break;
		
    case 11:
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
        $conn_bnb = mysqli_connect("localhost", "root", "vertrigo", "livro_caixa");
		$insert_bnb = "INSERT INTO lc_movimento (dia,mes,ano,tipo,descricao,valor,cat) values ('$dia','$mes','$ano','1','Entrada','$valor','22')";
		if (mysqli_query($conn_bnb, $insert_bnb)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $insert_bnb . "<br>" . mysqli_error($conn_bnb);
		}
        break;
   }
}


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {
  banco($row["numconta"], $row["valor"]);
}
?>

