<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Calculadora Dev</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	</head>

	<body>
		<header>	
    <img class="banner" src="./res/icon-1.png">
			<div class="caixa">
				<h1 class="titulo"> <center>Calculadora Dev - Preço / Hora</h1>
				
			</div>
		</header>

		<img class="banner1" src="./res/photo-1.jpg">
		<main>
        <form>
          <label for="Valor do seu Pagamento">Valor do Salário mensal:</label>
          <input type="number" id="salario" class="input-padrao" required placeholder="$alario Pretendido R$">

          <label for="Horas trabalhadas">Quantas horas trabalha por Dia:</label>
          <input type="number" id="horasDia" class="input-padrao" required placeholder="Horas Diárias">
          
          <input type="button" id="send" value="Calcular" class="enviar" onclick="gainFunction()"> 

          <label class="output">Valor da sua Hora é</label>
          <label class="output" id="PrecoH">...</label>
         
        </form>
        <h2 class="titulo-principal">Sobre a Calculadora Dev</h2>			
		</main>

    <script>
     
          function gainFunction() {
            var sal = document.getElementById('salario');
            var horas = document.getElementById('horasDia');

            var s1 = Number(sal.value);
            var h1 = Number(horas.value);
            var precoH = s1/(25*h1);

            var result = document.getElementById('PrecoH')
            result.innerHTML = precoH.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
            alert("O Valor da sua hora é: " + precoH.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}));

          }
          
    </script>
    
	</body>

	<footer>
  
	</footer>
	
</html>
<?php
  print("Olá Mundo, PHP!");

?>