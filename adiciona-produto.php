<?php include("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descicao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if (array_key_exists("usado", $_POST)) {
    $usado = true;
} else {
    $usado = false;
}


if (insereProduto($conexao, $nome, $preco, $descicao, $categoria_id, $usado)) { ?>
    <p class="text-success"> Produto <?php echo $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
    <?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">O produto <?= $nome; ?> nao foi adicionado: <?= $msg?></p>
    <?php


}

mysqli_close($conexao);
?>

<?php include("rodape.php"); ?>