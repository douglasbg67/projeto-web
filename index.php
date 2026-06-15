<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>formulario de cadastro</title>
</head>
<body>
	<div class="conteiner">
		<h1>Formulário de Cadastro</h1>
		<form action="salvar.php" method="POST">
			<label>Nome:</label>
			<input type="text" name="nome" required>
			<label>CPF:</label>
			<input type="text" name="cpf" required>
			<label>RG:</label>
			<input type="text" name="rg" required>
			<label>Contato:</label>
			<input type="text" name="contato" required>

			<h2>Endereço</h2>
			<label>Rua:</label>
			<input type="text" name="rua" required>
			<label>Bairro:</label>
			<input type="text" name="bairro" required>
			<label>Número:</label>
			<input type="text" name="numero" required>
			<label>Cidade:</label>
			<input type="text" name="cidade" required>
			<button type="submit">Enviar Cadastro</button>
		</form>
	</div>
</body>
</html>