<?php
require 'config.php';

    if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        echo $nome;

        $insert = 'INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha';

        $preparada = $conexao->prepare($insert);
        $preparada->bindValue(':nome', $nome);
        $preparada->bindValue(':email', $email);
        $preparada->bindValue(':senha', $senha);
        $preparada->execute();

        header('Location: index.php');

    } 

?>

<form method="POST";>
    Nome: </br>
    <input type="text" name="nome" ></br></br>
    Email: </br>
    <input type="email" name="email" ></br></br>
    Senha: </br>
    <input type="password" name="senha" ></br></br>

    <input type="submit" value="Cadastrar"></br></br>

    
</form>
<strong><a href="index.php">Página Inicial</a></strong>