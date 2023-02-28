<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$email = $_POST["email"];

	// infelizmen o php apresentou erro no ma minha maquina me imposibilitando de linkar algo
}
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<h1>Cadastre-se</h1>
	<form method="post" action="">
		<label for="username">Usuário:</label>
		<input type="text" name="username" id="username"><br><br>

		<label for="password">Senha:</label>
		<input type="password" name="password" id="password"><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>

		<button type="submit">Entrar</button>
	</form>
</body>
</html>













