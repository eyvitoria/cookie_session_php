<?php
session_start();

if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['senha']) && !empty($_POST['senha'])){
$info = $_POST;
$_SESSION['session'] = $info;
$user = $_POST['user'];
$senha = $_POST['senha'];

echo "<h2>Seu user é:</h2>";
echo "<h3>$user</h3>";

}

?>
<a href="index.php"><button>Voltar</button></a>