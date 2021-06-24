<?php
require 'config.php';

?>
<div><a href="adicionar.php">Adicionar outro usuário:</a></div>

<table width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Opções</th>
    </tr>
    <?php
        if ($sql->rowCount() > 0) {
            foreach ($sql as $usuario) {
                echo '<tr>';
                echo '<td>'.$usuario['id'].'</td>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['email'].'</td>';
                echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                echo '</tr>';
            }
        
        } else {
            echo "Não existem usuários cadastrados";
        }
        
   
    ?>
</table>