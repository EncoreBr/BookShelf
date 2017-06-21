<?php

$nome = $_POST['nome_cliente'];
$sobrenome = $_POST['sobrenome_cliente'];
$sexo = $_POST['sexo_cliente'];
$email = $_POST['email_cliente'];
$user = $_POST['user_cliente'];
$senha = $_POST['senha_cliente'];
$dnasc = $_POST['data_nasc'];
$dnasc = str_replace(["-", "–"], '', $dnasc);
$dia = substr($dnasc,0,2);
$mes = substr($dnasc,2,2);
$ano = substr($dnasc,4,4);
$dnasc= $ano.$mes.$dia;

$strcon = mysqli_connect('localhost','bookshelf','bookshelf','db_bookshelf');

if (!$strcon) {
	die('Não foi possível conectar ao MySQL');
}
//Criando a declaração SQL:
$sql = "INSERT INTO  tbl_clientes (nome_cliente, sobrenome_cliente, email_cliente, user_cliente, senha_cliente,sexo_cliente, data_nasc) VALUES ('$nome','$sobrenome','$email','$user','$senha','$sexo','$dnasc')";
//Executando a declaração no banco de dados:
$resultado = mysqli_query($strcon,$sql) or die("Erro ao executar a inserção dos dados");
echo "Registro inserido com sucesso";
mysqli_close($strcon); 
?>