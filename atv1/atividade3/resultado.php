<?php 
    $altura = $_POST['altura'];
    $largura = $_POST['largura']; 

    echo  "Área : ". ($altura * $largura) . "<br />";

    if ($largura == $altura) {
        echo "A figura é um Quadrado";
        echo "<br />";
        echo "<img src='quadrado.jpg' />";
    }

    else {
        echo "A figura é um Retângulo";
        echo "<br />";
        echo "<img src='retangulo.jpg' />";
    }

    echo "<a href='window.history.back()'>Voltar</a>";
?>