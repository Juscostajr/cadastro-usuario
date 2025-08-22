<?php

use App\Model\User;

require_once __DIR__ . '/../vendor/autoload.php';

if ($_POST) {
    $user = new User(
        name: $_POST['user_name'],
        email: $_POST['user_email']
    );
    
    $user->save();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h1>Cadastro de Usuários</h1>
    <form method="post">
        <label>Nome</label>
        <input type="text" name="user_name">
        <label>Email</label>
        <input type="text" name="user_email">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>


