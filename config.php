<?php
$parametros = 'mysql:dbname=estudos_pdo;host=localhost';
$dbuser = 'subdominio';
$dbpass = '123mudar';

try {
    $conexao = new PDO($parametros, $dbuser, $dbpass);
    
    $select = 'SELECT * FROM usuarios';
    $sql = $conexao->query($select);

    
    

} catch (PDOException $th) {
    echo "Deu ruim: ".$th->getMessage();
}