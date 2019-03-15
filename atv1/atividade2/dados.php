<?php
$qtd = $_REQUEST['quantidade'];
$cont = 0;
echo '<h1>Resultado ' . $qtd .'X</h1>';
while ($qtd > $cont) {
    $lado = rand(1, 6);
    echo "<img src='../img/Dado_" . $lado . ".jpg'>";
    $qtd --;
}
