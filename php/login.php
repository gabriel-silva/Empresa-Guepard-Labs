<?php
include "constantes_database.php";
session_start();
?>
    <style type="text/css">
        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>

<?php
$user = $_POST['usuario'];
$pass = md5($_POST['senha']);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query = "SELECT senha, usuario FROM usuarios WHERE usuario='$user' AND senha='$pass'";
$result = mysqli_query($link, $query);
$arr = mysqli_fetch_array($result);

if ($result) {
    $row = mysqli_num_rows($result);
    // echo "entrou";
    if ($row != 0) {

        $_SESSION['usuario'] = $user;
        header("location: sobre.php");
    } else {
        header("location: sobre.php");
        echo "<span style='color: white;'>Usuário ou senha inválidos!!</span>";
    }
}

mysqli_close($link);
?>