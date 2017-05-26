<?php
ob_start();
session_start();
?>
<!DOCTYPE HTML>
<!--suppress ALL -->
<html lang="pt-br">
<head>
    <!-- <title>Sobre</title> -->
    <meta charset="utf-8">
    <script src="../javaScript/jquery-1.12.0.min.js"></script>
    <link rel="shortcut icon" href="../imagens/logoIFPE.png"/>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/estilo_quiz.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/style_cadastro.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/kickstart-buttons.css" media="all">
    <script src="../javaScript/javaScript.js"></script>
</head>
<body>
<header>
    <div id="logo">
        <?php

        // Checa se não existe usuário salvo na sessão (Só vai exibir os campos para login se não existir)
        if (!isset($_SESSION['usuario'])) {
            ?>
            <!-- formulário de login -->
            <div class="login">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <table id="login" cellspacing="5">
                        <tr>
                            <td><span class="log">Usuário</span></td>
                            <td><input type="text" placeholder="usuario" name="usuario" required></td>
                        </tr>
                        <tr>
                            <td><span class="log">Senha</span></td>
                            <td><input type="password" placeholder="senha" name="senha" required></td>
                            <td><input class="large" type="submit" name="enviar" Value="Login"></td>
                        </tr>
                    </table>
                    <a href="cadastro.php">
                        <small>Não é cadastrado? Cadastre-se aqui</small>
                    </a>
                </form>
            </div>
            <?php
        } // Se existir usuário salvo na sessão, exibe uma mensagem de boas vindas e o botão para logout
        else {
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input class="submit logout" style="margin-right: 15%; margin-top: 52px;" type="submit" name="logout"
                       value="Logout">
            </form>
            <?php
            echo "<span class='boas_vindas'>Bem vindo(a), <b>" . $_SESSION['usuario'] . "</b>!! </span>";
        }
        // Se o botão para 'logout' for clicado, tira o usuário da sessão e redireciona para página home.php
        if (isset($_POST['logout'])) {
            unset($_SESSION['usuario']);
            header("location: home.php");
        }
        ?>

        <script type="text/javascript">
            // Menu Drop Down Acessível
            // TWS
            var dropdown_intervalId;
            var dropdown_ulId = (!dropdown_ulId) ? 'menu' : dropdown_ulId;
            var dropdown_delay = (!dropdown_delay) ? 0 : dropdown_delay;

            function dropdown_init() {
                try {
                    var as = document.getElementById(dropdown_ulId).getElementsByTagName('a');

                    for (var a = 0; a < as.length; a++) {
                        as[a].onfocus = function () {
                            dropdown_expand(this)
                        }
                        as [a].onmouseover = function () {
                            dropdown_expand(this)
                        }
                        as [a].onblur = function () {
                            dropdown_colapse(dropdown_delay)
                        }
                        as [a].onmouseout = function () {
                            dropdown_colapse(dropdown_delay)
                        }
                    }

                    dropdown_colapse(0);

                } catch (e) {
                }
            }

            function dropdown_expand(caller) {
                try {
                    clearInterval(dropdown_intervalId);

                    var uls = caller.parentNode.parentNode.getElementsByTagName('ul');

                    for (var ul = 0; ul < uls.length; ul++)
                        uls[ul].style.left = "-10000em";

                    caller.parentNode.getElementsByTagName('ul')[0].style.left = "auto";

                } catch (e) {
                }
            }

            function dropdown_colapse(milliseconds) {
                try {
                    clearInterval(dropdown_intervalId);

                    dropdown_intervalId = setInterval(function () {
                        var uls = document.getElementById(dropdown_ulId).getElementsByTagName('ul');

                        for (var ul = 0; ul < uls.length; ul++) {
                            uls[ul].style.left = "-10000em";
                            uls[ul].style.display = "block";
                        }

                        // uls[ul].class = '';

                        clearInterval(dropdown_intervalId);

                    }, milliseconds, null);

                } catch (e) {
                }
            }

            window.onload = dropdown_init;
        </script>

        <div class="banner">
            <div id="logo-reitoria">
                <img src="../imagens/logo.png" widht="300px" height="90px">
                <a class="acesso-reitoria"></a>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul class="menu">
            <li><a href="home.php" class="submenu" id="home.php">Home</a></li>
            <li><a href="sobre.php" class="submenu" id="sobre.php">Sobre</a></li>
            <li><a href="noticias.php" class="submenu" id="noticias.php">Notícias</a></li>
            <li><a href="#" id="#">Mídia</a>
                <ul style="display:none;">
                    <li><a href="videos.php" class="submenu" class="videos">Vídeos</a></li>
                    <li><a href="audios.php" class="submenu" class="audios">Áudios</a></li>
                    <li><a href="imagens_audios.php" class="submenu" class="imagens e audios">Listening</a></li>
                </ul>
            </li>
            <li><a href="#" id="#">Conteúdos</a>
                <ul style="display:none;">
                    <li><a href="paises_nacionalidades.php" class="submenu" id="paises_nacionalidades">Países e
                            Nacionalidades</a></li>
                    <li><a href="phrasal_verbs.php" class="submenu" id="phrasal_verbs">Phrasal Verbs</a></li>
                    <li><a href="expressoes_termos.php" class="submenu" id="expressoes_termos">Expressões e Termos</a>
                    </li>
                    <li><a href="numerais.php" class="submenu" id="numerais">Numerais</a></li>
                    <li><a href="medidas.php" class="submenu" id="medidas">Medidas</a></li>
                    <li><a href="termostecnicos.php" class="submenu" id="termo">Termos Técnicos</a></li>
                    <li><a href="termostecnicosdelogistica.php" class="submenu" id="expressoes">Termos Logistica</a>
                    </li>
                    <li><a href="mapa.php" class="submenu" id="expressoes">Países de Lingua Inglesa</a></li>
                </ul>
            </li>
            <li><a href="#" id="#">Atividades</a>
                <ul style="display:none;">
                    <li><a href="quiz.php" class="submenu">Quiz 1</a></li>
                    <li><a href="quiz_2.php" class="submenu">Quiz 2</a></li>
                </ul>
            </li>
            <li><a href="arquivos.php" class="submenu" id="arquivos.php">Envio</a></li>
            <li><a href="sites_relacionados.php" class="submenu" id="sites_relacionados.php">Extra</a></li>
            <li><a href="contatos.php" class="submenu" id="CONTATOS.php">Contato</a></li>
            <li><a href="index_form_vocabulario.php" class="submenu" id="index_form_vocabulario.php">Área
                    Administrativa</a></li>

        </ul>
        <br><br>
    </nav>
</body>
</html>
<?php

// validação do usuário para login

if (isset($_POST['enviar'])) {
    $user = $_POST['usuario'];      // Salva o conteúdo do input name="usuario" do form de login na variável $user
    $pass = md5($_POST['senha']);   // Salva o conteúdo do input name="senha" do form de login na variável $pass

    // Salva os dados do servidor, usuario, senha e nome do banco de dados para fazer a conexão

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "site_celle";

    $link = mysqli_connect($server, $username, $password, $dbname);    // Faz a conexão com o banco de dados

    // consulta para puxar do banco usuario e senha que sejam iguais aos digitados no form de login

    $query = "SELECT senha, usuario FROM usuarios WHERE usuario='$user' AND senha='$pass'";
    $result = mysqli_query($link, $query);      // Executa a query e salva o resultado

    // Checa se houve resultado da consulta
    if ($result) {
        $arr = mysqli_fetch_assoc($result);     // Transforma o resultado da consulta em um array associativo (os índices são as colunas da tabela 'usuarios')
        $row = mysqli_num_rows($result);        // Recebe o número de linhas retornadas da consulta ao banco

        // Checa se o usuário e senha digitados no form de login são iguais aos que estão salvos no banco de dados
        if ($user == $arr['usuario'] && $pass == $arr['senha']) {
            // Se verdadeiro, salva o usuário na sessão
            $_SESSION['usuario'] = $user;
        }

        // Checa se o número de linhas retornadas da consulta é diferente de zero. Se verdadeiro, redireciona para a página "home.php"
        if ($row != 0) {
            header("location: home.php");
        } // Senão, exibe um alerta para o usuário
        else {
            echo "<script>
              alert('Usuário ou senha incorretos!!');
            </script>";
        }
    }
    // Encerra a conexão com o banco de dados
    mysqli_close($link);
}
ob_end_flush();
?>
