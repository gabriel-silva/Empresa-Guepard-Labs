<?php
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

$server = "localhost";
$username = "root";
$password = "";
$dbname = "site_celle";


$link = mysqli_connect($server, $username, $password, $dbname);
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