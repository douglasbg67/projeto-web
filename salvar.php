<?php
	$nome =$_POST['nome'];
	$cpf =$_POST['cpf'];
	$rg =$_POST['rg'];
	$contato =$_POST['contato'];

	$rua =$_POST['rua'];
	$bairro =$_POST['bairro'];
	$numero =$_POST['numero'];
	$cidade =$_POST['cidade'];

	$dados ="
	Nome: $nome
	CPF: $cpf
	RG: $rg
	Contato: $contato

	Rua: $rua
	Bairro: $bairro
	Número: $numero
	Cidade: $cidade
	";

	$arquivo =fopen("dados/dados.txt", "a");
	fwrite($arquivo, $dados);
	fclose($arquivo);
	echo "
		<!DOCTYPE html>
		<html>
		<head>
		<meta charset='UTF-8'>
		<title>Cadastro Realizado</title>
			<style>
				body{
					font-family:Arial;
					background-color:#f0f2f5;
					text-align:center;
					padding-top:100px;
				}
					.mensagem{
					background-color:white;
					width: 400px;
					margin: auto;
					padding: 30px;
					border-radius: 10px;
					box-shadow: 0px 0px 10px #999;
				}	
		</style>
</head>
	<body>
	<div class='mensagem'>
	<h1>Cadastro realizado com sucesso!</h1>
	<p>Os dados foram recebidos pelo Php.</p>
	<a href='index.php'>Voltar</a>
	</div>
</body>

	";

  ?>