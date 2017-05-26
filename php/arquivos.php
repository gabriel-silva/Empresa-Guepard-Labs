<?php
require 'cabecalho.php';
?>
<?php

$uploaddir = '/var/www/uploads/';

?>
    <title>Envio de Arquivos</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all"/>
    <script type="text/javascript">x
        function validaForm() {
            console.log($('#nome').val());
            erro = false;
            if ($('#nome').val() == '') {
                alert('Você precisa preencher o campo Nome');
                erro = true;
            }
            if ($('#matricula').val() == '' && !erro) {
                alert('Você precisa preencher o campo Matricula');
                erro = true;
            }

            //se nao tiver erros
            if (!erro) {
                $('#formulario_contato').submit();
            }
        }
    </script>

    <div id="conteudo">
        <h1 class="t1">Envio de Arquivos</h1>
        <hr id="hr-top"></hr>
        <?php
        if (isset($_SESSION['usuario'])) {
        ?>
        <form method="post" id="envio_de_arquivo" onsubmit="validaForm(); return false;" class="form">
            <div class="name">
                <label for="name">Nome da Atividade</label>
                <input type="text" name="nome" class="control" id="nome" placeholder="Nome da Atividade"/>
            </div>
            <br>
            <div class="name">
                <label for="matricula">Nº da Matricula </label>
                <input type="text" name="matricula" class="control" id="matricula" placeholder="Sua Matricula"/>
            </div>
            <br>
            <form enctype="multipart/form-data" action="" method="POST" onsubmit="validaForm();">
                <input type="hidden" name="MAX_FILE_SIZE" class="control" value="30000"/>
                <!-- </form> -->
                <!-- O Nome do elemento input determina o nome da array $_FILES -->
                <label>Arquivo </label> <input name="arquivo" type="file" class="control"/>
                <br>
                <input type="submit" value="Enviar arquivo"/></p>
            </form>
            <?php
            }
            else {
                echo "<span style='font-size: 18px; font-family: sans-serif;'>Faça o login para enviar algum arquivo</span>";
            }
            ?>
    </div>
<?php
require 'rodape.php';
?>