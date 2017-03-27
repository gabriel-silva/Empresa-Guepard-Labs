<?php
include_once 'cabecalho.php';

if(isset($_POST['submit'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "site_celle";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$erros = $_SESSION['erros'];
	$acertos = $_SESSION['acertos'];
	$percentual = $_SESSION['aproveitamento'];
	$matricula = $_POST['matricula'];
	$usuario = $_SESSION['usuario'];

	if(isset($_SESSION['ctxt']) && $_SESSION['ctxt'] != 'default'){
		$contexto = $_SESSION['ctxt'];
	}
	if(isset($_SESSION['contexto']) && $_SESSION['contexto'] != 'default'){
		$contexto = $_SESSION['contexto'];
	}

	$query = "SELECT matricula FROM usuarios WHERE usuario = '$usuario'";
	$result = mysqli_query($conn, $query);
	$arr = mysqli_fetch_assoc($result);
	$matric = $arr['matricula'];

		$sql = "INSERT INTO `resultados`(`erros`,`acertos`,`percentual`, `matricula`, `contexto`) VALUES ('$erros', '$acertos', '$percentual', '$matricula', '$contexto')";

		if (mysqli_query($conn, $sql)) {
			$_SESSION['erros'] = 0;
			$_SESSION['acertos'] = 0;
			$_SESSION['ctxt'] = "default";
			$_SESSION['contexto'] = "default";
			$_SESSION['id'] = 0;

			echo "<div id='conteudo'>
					<h3 style='margin-top: 30px;'>Resultado salvo com sucesso!!</h3>
					<br/><br/>
					<a href='quiz.php'>Clique aqui para voltar ao quiz</a>
				  </div>
				  ";
    // header("location: quiz.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	mysqli_close($conn);
}
include_once 'rodape.php';
?>