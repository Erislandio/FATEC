<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];

    $precoTotal = ($quantidade * number_format($preco, 2, '.', ',')) - $desconto;
}

else 
{
    echo "<script> alert('Não recebemos os dados'); window.location.back; </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Preço total</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Preço Total: <?php echo "R$ " . number_format($precoTotal, 2, '.', ','); ?></h2>
</body>
</html>