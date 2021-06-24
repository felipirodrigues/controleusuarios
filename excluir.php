<?php
require 'config.php';

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = $_GET['id'];
    
    $delete = 'DELETE FROM usuarios WHERE id = :id';

    $preparada = $conexao->prepare($delete);
    $preparada->bindValue(':id', $id);
    $preparada->execute();

    header('Location: index.php');
}
else{
    echo "nada";
}
?>