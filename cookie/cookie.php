
<?php  

if (isset($_COOKIE['emilly']) && !empty($_COOKIE['pokemon'])){
$nome = $_COOKIE['emilly'];
echo '<h2>Seu nome é:</h2>';
echo $nome;

}else{
$name = $_POST['nome'];
setcookie('emilly',$name, time() + 3600 );
}
echo '<h2>Seu nome é:</h2>';
echo $name;
?>
<br><br>
<a href="index.php"><button>Voltar</button></a>