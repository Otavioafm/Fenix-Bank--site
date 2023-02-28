


<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'otavio' && $password == '123'){
    $_SESSION['loggedin'] = true;
    header('Location: home.html');
    exit;
} else {
    echo 'Nome de usuário ou senha inválidos';
}
// infelizmen o php apresentou erro no ma minha maquina me imposibilitando de linkar algo
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
<h1>Tela de Login</h1>
	<form method="post" action="">
		<label for="username">Usuário:</label>
		<input type="text" name="username" id="username"><br><br>

		<label for="password">Senha:</label>
		<input type="password" name="password" id="password"><br><br>
		<button type="submit">Entrar</button>
	</form>
</body>
</html>


















