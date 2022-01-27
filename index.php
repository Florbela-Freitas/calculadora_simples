
<?php
	//Declarando variáveis
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$resultado = (double) 0;

	//Validação para ver se o botão foi clicado
	if(isset($_POST["btncalc"])) {

		//Recuperando os valores
		$valor1 = $_POST["txtn1"];
		$valor2 = $_POST["txtn2"];

		//Validação  para tratamento de caixa vazia
		if($_POST["txtn1"] == null || $_POST["txtn2"] == null) {
			echo('<p class="msgErro">Preencha todos os campos!</p>');
		} else {
			//Validação para tratamento de valores inválidos
			if(!is_numeric($valor1) || !is_numeric($valor2)) {
                echo('<p class="msgErro">Todos os dados devem ser números!</p>');
            } else {
                if($_POST['rdocalc'] == 'somar') {
					$resultado = $valor1 + $valor2;
				} else if($_POST['rdocalc'] == 'subtrair') {
					$resultado = $valor1 - $valor2;
				} else if($_POST['rdocalc'] == 'multiplicar') {
					$resultado = $valor1 * $valor2;
				} else if($_POST['rdocalc'] == 'dividir') {
					$resultado = $valor1 / $valor2;
				} 
            }
		}
	}
?>

<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="index.php">
						Valor 1:<input type="text" name="txtn1" value="<?php echo($valor1)?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?php echo($valor2)?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						<?php echo($resultado);?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>
