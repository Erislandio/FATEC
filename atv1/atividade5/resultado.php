<?php 
		$peso = $_POST['peso'];
		$altura = $_POST['altura'];
		
		$conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;
		
		$resultado = number_format($conta2);
		
		if(isset($resultado) && $resultado != '0'){;	
			echo '<h1>Seu IMC é:</h1>';

			if ($resultado < 18.5) 
				echo $resultado . "<br />" . "Você está abaixo do peso ideal";
			else if ($resultado >= 18.5 && $resultado <= 24.9)
				echo $resultado . "<br />" . "Parabéns, você está em seu peso normal!";
			else if ($resultado >= 25 && $resultado <= 29.9)
				echo $resultado . "<br />" . "Você está acima de seu peso (sobrepeso)";
			else if ($resultado >= 30 && $resultado <= 34.9)
				echo $resultado . "<br />" . "Obesidade grau I";
			else if ($resultado >= 35 && $resultado <= 39.9)
				echo $resultado . "<br />" . "Obesidade grau II";
			else
				echo $resultado . "<br />" . "Obesidade grau III";

		}else{
			echo '<h1>Por favor, utilize apenas numeros!</h1>';	
		}

		echo "<a href='window.history.back'>Voltar</a>";
		?>