<?php
session_start();
?>
    <html>
    <head>
        <title>Resultados</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo_quiz.css" media="all">
    </head>
    </html>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db_name = "site_celle";

$usuario = $_SESSION['usuario'];

$connect = mysqli_connect($server, $user, $password, $db_name);

$query = "SELECT matricula FROM usuarios WHERE usuario = '$usuario'";
$result = mysqli_query($connect, $query);
$array = mysqli_fetch_array($result);

$matricula = $array['matricula'];

$sql = "SELECT erros, acertos, percentual, contexto, data FROM resultados WHERE matricula = '$matricula'";
$result_2 = mysqli_query($connect, $sql);

echo "<table class='popup' cellspacing='8'>";
echo "<tr>
			<th>Contexto</th>
			<th>Acertos</th>
			<th>Erros</th>
			<th>Aproveitamento</th>
			<th>Data / Hora</th>
		  </tr>";
while ($arr = mysqli_fetch_array($result_2)) {
    echo "
		<tr>
			<td class='td'>" . $arr['contexto'] . "</td>
			<td class='td'>" . $arr['acertos'] . "</td>
			<td class='td'>" . $arr['erros'] . "</td>
			<td class='td'>" . $arr['percentual'] . "%</td>
			<td class='td'>" . $arr['data'] . "</td>
		</tr>
		";
}
echo "</table>";
mysqli_close($connect);
?>