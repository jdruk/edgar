<?php
//##################### GERENCIANET ##########################
// TOTAL BRUTO
$sqlbrutogerencianet = "select sum(b.valor) as brutogerencianet from sis_cliente a join sis_lanc b on(a.login = b.login) where b.datavenc between '$data_inicial' and '$data_final' and a.conta='2' and a.isento='nao' and tit_vencidos<2 and deltitulo<>1 and cli_ativado='s'";
$resultbrutogerencianet = mysql_query($sqlbrutogerencianet, $banco1);
$linhabrutogerencianet = mysql_fetch_array($resultbrutogerencianet);
$bruto_gerencianet = $linhabrutogerencianet['brutogerencianet'];

// TOTAL RECEBIDOR
$sqlrecebgerencianet = "select sum(a.valorpag) as recebidogerencianet from sis_lanc a join sis_cliente b on(a.login=b.login) where datapag between '$data_inicial' and '$data_final' and b.conta in ('2','19', '10') and a.coletor='notificacao' and cli_ativado='s' and COALESCE(NULL,1)";
$resultrecebgerencianet = mysql_query($sqlrecebgerencianet, $banco1);
$linharecebgerencianet = mysql_fetch_array($resultrecebgerencianet);
$recebido_gerencianet = $linharecebgerencianet['recebidogerencianet'];

// QUANTIDADE DE CLIENTES
$sqlcliegerencianet = "select count(login) as clientes from sis_cliente where conta='2' and isento='nao' and tit_vencidos<2 and cli_ativado='s'";
$resultcliegerencianet = mysql_query($sqlcliegerencianet, $banco1);
$linhacliegerencianet = mysql_fetch_array($resultcliegerencianet);
$clientes_gerencianet = ($linhacliegerencianet["clientes"]);

// CLIENTES PAGANTES
$sqlcliepgerencianet = "select count(a.login) as cliepgerencianet from sis_lanc a join sis_cliente b on(a.login=b.login) where datapag between '$data_inicial' and '$data_final' and b.conta in ('2','19', '10') and a.coletor='notificacao' and cli_ativado='s' and COALESCE(NULL,1)"; 
$resultcliepgerencianet = mysql_query($sqlcliepgerencianet, $banco1);
$linhacliepgerencianet = mysql_fetch_array($resultcliepgerencianet);
$clientesp_gerencianet = ($linhacliepgerencianet["cliepgerencianet"]);

//##################### BNB ##########################
// TOTAL BRUTO
$sqlbrutobnb = "select sum(b.valor) as brutobnb from sis_cliente a join sis_lanc b on(a.login = b.login) where b.datavenc between '$data_inicial' and '$data_final' and a.conta='10' and a.isento='nao' and tit_vencidos<2 and deltitulo<>1 and cli_ativado='s'";
$resultbrutobnb = mysql_query($sqlbrutobnb, $banco1);
$linhabrutobnb = mysql_fetch_array($resultbrutobnb);
$bruto_bnb = $linhabrutobnb['brutobnb'];

// TOTAL RECEBIDOR
$sqlrecebbnb = "select sum(valorpag) as recebidobnb from sis_lanc where datapag between '$data_inicial' and '$data_final' and numconta='10'";
$resultrecebbnb = mysql_query($sqlrecebbnb, $banco1);
$linharecebbnb = mysql_fetch_array($resultrecebbnb);
$recebido_bnb = $linharecebbnb['recebidobnb'];

//QUANTIDADE DE CLIENTES
$sqlcliebnb = "select count(login) as clientes from sis_cliente where conta='10' and cli_ativado='s'";
$resultcliebnb = mysql_query($sqlcliebnb, $banco1);
$linhacliebnb = mysql_fetch_array($resultcliebnb);
$clientes_bnb = ($linhacliebnb["clientes"]);

// CLIENTES PAGANTES
$sqlcliepbnb = "select count(login) as cliepbnb from sis_lanc where datapag between '$data_inicial' and '$data_final' and numconta='10'";
$resultcliepbnb = mysql_query($sqlcliepbnb, $banco1);
$linhacliepbnb = mysql_fetch_array($resultcliepbnb);
$clientesp_bnb = ($linhacliepbnb["cliepbnb"]);

//##################### SANTANDER ##########################
// TOTAL BRUTO
$sqlbrutosantander = "select sum(b.valor) as brutosantander from sis_cliente a join sis_lanc b on(a.login = b.login) where b.datavenc between '$data_inicial' and '$data_final' and a.conta='19' and a.isento='nao' and tit_vencidos<2 and deltitulo<>1 and cli_ativado='s'";
$resultbrutosantander = mysql_query($sqlbrutosantander, $banco1);
$linhabrutosantander = mysql_fetch_array($resultbrutosantander);
$bruto_santander = $linhabrutosantander['brutosantander'];

// TOTAL RECEBIDOR
$sqlrecebsantander = "select sum(valorpag) as recebidosantander from sis_lanc where datapag between '$data_inicial' and '$data_final' and numconta='19'";
$resultrecebsantander = mysql_query($sqlrecebsantander, $banco1);
$linharecebsantander = mysql_fetch_array($resultrecebsantander);
$recebido_santander = $linharecebsantander['recebidosantander'];

// QUANTIDADE DE CLIENTES
$sqlcliesantander = "select count(login) as clientes from sis_cliente where conta='19' and cli_ativado='s'";
$resultcliesantander = mysql_query($sqlcliesantander, $banco1);
$linhacliesantander = mysql_fetch_array($resultcliesantander);
$clientes_santander = ($linhacliesantander["clientes"]);

// CLIENTES PAGANTES
$sqlcliepsantander = "select count(login) as cliepsantander from sis_lanc where datapag between '$data_inicial' and '$data_final' and numconta='19'";
$resultcliepsantander = mysql_query($sqlcliepsantander, $banco1);
$linhacliepsantander = mysql_fetch_array($resultcliepsantander);
$clientesp_santander = ($linhacliepsantander["cliepsantander"]);

//##################### RENATO ##########################
// TOTAL BRUTO
//$sqlbrutorenato = "select sum(b.valor) as brutorenato from sis_cliente a join sis_lanc b on(a.login = b.login) where b.datavenc between '$data_inicial' and '$data_final' and cli_ativado='s' and deltitulo<>1";
//$resultbrutorenato = mysql_query($sqlbrutorenato, $banco2);
//$linhabrutorenato = mysql_fetch_array($resultbrutorenato);
//$bruto_renato = $linhabrutorenato['brutorenato'];

// TOTAL RECEBIDOR
//$sqlrecebrenato = "select sum(valorpag) as recebidorenato from sis_lanc where datapag between '$data_inicial' and '$data_final'";
//$resultrecebrenato = mysql_query($sqlrecebrenato, $banco2);
//$linharecebrenato = mysql_fetch_array($resultrecebrenato);
//$recebido_renato = $linharecebrenato['recebidorenato'];

// QUANTIDADE DE CLIENTES
//$sqlclierenato = "select count(login) as clientes from sis_cliente where cli_ativado='s'";
//$resultclierenato = mysql_query($sqlclierenato, $banco2);
//$linhaclierenato = mysql_fetch_array($resultclierenato);
//$clientes_renato = ($linhaclierenato["clientes"]);

//################### RAFANET #########################
$data_inicial_rafanet = date('Y-m-25', strtotime('-1 months', strtotime($data_inicial)));
$data_final_rafanet = substr($data_final, 0, 8) . '25';

// TOTAL BRUTO
$sqlbrutorafanet = "select sum(b.valor) as valorbruto from sis_cliente a join sis_lanc b on(a.login = b.login) where b.datavenc between '$data_inicial_rafanet' and '$data_final_rafanet' and a.conta='11'";
$resultbrutorafanet = mysql_query($sqlbrutorafanet, $banco1);
$linhabrutorafanet = mysql_fetch_array($resultbrutorafanet);
$bruto_rafanet= $linhabrutorafanet["valorbruto"];

// TOTAL RECEBIDOR
$sqlrecebrafanet = "select sum(b.valorpag) as valorecebido from sis_cliente a join sis_lanc b on(a.login = b.login) where b.datapag between '$data_inicial_rafanet' and '$data_final_rafanet' and a.conta='11'";
$resultrecebrafanet = mysql_query($sqlrecebrafanet,$banco1);
$linharecebrafanet = mysql_fetch_array($resultrecebrafanet);
$recebido_rafanet = $linharecebrafanet['valorecebido'];

// QUANTIDADE DE CLIENTES
$sqlclierafanet = "select count(login) as clientes from sis_cliente where conta='11'";
$resultclierafanet = mysql_query($sqlclierafanet,$banco1);
$linhaclierafanet = mysql_fetch_array($resultclierafanet);
$clientes_rafanet = ($linhaclierafanet["clientes"]);

// CAIXA DIARIO
$mes_caixa = date('m', strtotime($data_inicial));
$ano_caixa = date('Y', strtotime($data_inicial));

$sqlcaixasaida = "select sum(valor) as caixasaida from lc_movimento where ano='$ano_caixa' and mes='$mes_caixa' and tipo='0' and cat!=24";
$resultcaixasaida = mysql_query($sqlcaixasaida, $banco3);
$linhacaixasaida = mysql_fetch_array($resultcaixasaida);
$caixa_saida = $linhacaixasaida['caixasaida'];

$sqlcaixaentrada = "select sum(valor) as caixaentrada from lc_movimento where ano='$ano_caixa' and mes='$mes_caixa' and tipo='1' and cat!=24";
$resultcaixaentrada = mysql_query($sqlcaixaentrada, $banco3);
$linhacaixaentrada = mysql_fetch_array($resultcaixaentrada);
$caixa_entrada = $linhacaixaentrada['caixaentrada'];

$caixa_mensal = ($caixa_saida - $caixa_entrada) ;

$sqlcaixarene = "select sum(valor) as renecaixa from lc_movimento where ano='$ano_caixa' and mes='$mes_caixa' and cat='24'";
$resultcaixarene = mysql_query($sqlcaixarene, $banco3);
$linhacaixarene = mysql_fetch_array($resultcaixarene);
$caixa_rene = $linhacaixarene['renecaixa'];

echo 'R$ ' . number_format($bruto_gerencianet, 2, ',', '.');

mysqli_close($banco1);
//mysqli_close($banco2);
mysqli_close($banco3);

?>
