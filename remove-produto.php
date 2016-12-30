<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
//Location redireciona para uma url
header("Location: produto-lista.php?removido=true");
die();
