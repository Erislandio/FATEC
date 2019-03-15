<?php
$a = $_POST['valor_a'];
$b = $_POST['valor_b'];
$c = $_POST['valor_c'];

if ($a > 0) {
    $delta = ($b * $b) - ((4 * $a) * $c);
    echo "Valor de Delta: " . $delta . "<br />";

    if ($delta > 0)
    {
        $x = (abs($b) + sqrt($delta) / 2 * $a);
        echo "Valor de X1: " . $x . "<br />";

        $x = (abs($b) - sqrt($delta) / 2 * $a);
        echo "Valor de X2: " . $x . "<br />";
    }

    else if ($delta < 0)
    {
        echo "Não existe Raíz negativa";
    }

    else 
    {
        $x = (abs($b) + sqrt($delta) / 2 * $a);
        echo "Valor de X1: " . $x . "<br />";

        $x = (abs($b) - sqrt($delta) / 2 * $a);
        echo "Valor de X2: " . $x . "<br />";
    }
}

else 
{
    echo "O valor de A deve ser maior que 0";
}

echo "<a href='javascript:window.history.back()'>Voltar</a>";