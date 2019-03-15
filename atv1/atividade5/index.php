<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Calculadora IMC</title>
<link href="enc/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
        <form method="POST" action="resultado.php" >
            <fieldset class="f">
                <label>
                <span class="span">Seu Peso</span>
                <br/>
                <input type="text" name="peso" />
                </label>
                
                <br />
                <label>
                <span class="span">Sua Altura (Use Pontuação: 1.99 Em METROS)</span>
                <br/>
                <input type="text" name="altura"/>
                </label>
                
                <input type="submit" name="envia" value="Calcular IMC">
            
            </fieldset>
        
        </form>
</body>
</html>