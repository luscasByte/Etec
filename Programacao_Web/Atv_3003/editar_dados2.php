<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sem título</title>
</head>
<body>

	<?php
$id = $_POST['codProduto']; // Recebendo o valor id do formulário
$nomeProduto = $_POST['nomeProduto'];
$qtdeEstoque = $_POST['qtdeEstoque'];
$descProduto = $_POST['descProduto'];
$respCadastro = $_POST['respCadastro'];

require_once("conn.php");



mysqli_query($conn,"UPDATE tbproduto SET nomeProduto='$nomeProduto', qtdeEstoque='$qtdeEstoque', descProduto='$descProduto', respCadastro='$respCadastro'  WHERE codProduto='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>
<p><a href="teste_consulta.php">  Voltar</a>
</body>

</html>