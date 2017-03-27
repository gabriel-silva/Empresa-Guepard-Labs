<?php
include_once 'cabecalho.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_celle";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$matricula  = $_POST ['matricula'];
$nome = $_POST ['nome'];
$sexo = $_POST ['sexo'];
$nasc_dia = $_POST ['nasc_dia'];
$nasc_mes = $_POST ['nasc_mes'];
$nasc_ano = $_POST ['nasc_ano'];
$telefone = $_POST ['telefone'];
$email  = $_POST ['email'];
$usuario = $_POST['usuario'];
$password  = md5($_POST ['password']);
$periodo = $_POST ['periodo'];
$curso = $_POST ['curso'];

$datanasc = $nasc_dia."/".$nasc_mes."/".$nasc_ano;

$sql = "INSERT INTO `usuarios`(`nome`, `sexo`, `datanasc`, `telefone`, `email`, `usuario`, `senha`, `periodo`, `curso`, `matricula`) VALUES ('$nome', '$sexo', '$datanasc', '$telefone', '$email', '$usuario', '$password', '$periodo', '$curso', '$matricula')";

if (mysqli_query($conn, $sql)) {
	echo "<div id='conteudo'>
			<h3 style='margin-top: 30px;'>Usuário cadastrado com sucesso!!</h3>
			<br/><br/>
			<a href='home.php'>Clique aqui para voltar</a>
		  </div>
	";
	// header("location: sobre.php");
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
include_once 'rodape.php';
?>




