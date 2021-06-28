<?php
require 'config.php';
$id = $_GET['id'];

$nome = $_POST['nome'];
$email = $_POST['email'];

$update = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";

$conexao->query($update);



?>
<form method="POST">
    Nome: </br>
    <input type="text" name="nome" value="<?php echo $preparacao['nome'];?>"></br></br>
    Email: </br>
    <input type="text" name="email" value="<?php echo $preparacao['email'];?>"></br></br>
    <input type="submit" value="Atualizar">
</form>
<a href="index.php">Voltar</a><?php


