<?php
require 'config.php';
$id = 0;
if (isset($_GET['id']) && empty($_GET['id']) == false) {
    
    $id = $_GET['id'];
    
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    $select = "SELECT * FROM usuarios WHERE id = $id";
    $update = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id='$id';";

    $enviada = $conexao->query($update);
    $resultado = $enviada->fetch();

    //$update = "UPDATE usuarios SET nome = :nome, email = :email WHERE id='$id';";
    
    //var_dump($resultado);


    
    //$preparada = $conexao->prepare($update);
    //$preparada->bindValue(':nome', $nome);
    //$preparada->bindValue(':email', $email);

    //$preparada->execute();
    
    
    
} 
else{
header("Location: index.php");
}
?>

<form method="GET">
    Nome: </br>
    <input type="text" name="nome" value="<?php echo $resultado['nome']?>"></br></br>
    Email: </br>
    <input type="text" name="email" value="<?php echo $resultado['email']?>"></br></br>
    <input type="submit" value="Atualizar">
</form>
<strong><a href="index.php">Página Inicial</a></strong>

<?php

//header("Location: index.php");