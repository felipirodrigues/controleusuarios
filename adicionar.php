<?php
require 'config.php';
$id = 0;
if(isset($_GET['id']) && empty($_GET['id']) == false) {
$id = addslashes($_GET['id']);
}
if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
$pdo->query($sql);
header("Location: index.php");
}
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $conexao->query($sql);
if($sql->rowCount() > 0){
$dado = $sql->fetch();
}else{
header("Location: index.php");
}
?>
<form method="POST">
Nome:<br/>
<input type="text" name="nome" value="<?php echo $dado['nome']; ?>" /><br/>
E-mail:<br/>
<input type="text" name="email" value="<?php echo $dado['email']; ?>" /><br/>
<input type="submit" value="Atualizar" />
</form>

/*require 'config.php';

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
<strong><a href="index.php">Página Inicial</a></strong>*/