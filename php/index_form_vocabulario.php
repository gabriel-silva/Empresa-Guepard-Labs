<?php
include 'constantes_database.php';
include_once 'cabecalho.php';

if (isset($_FILES['imagem'])) {

    $extImagem = strtolower(substr($_FILES['imagem']['name'], -4));
    $extAudio = strtolower(substr($_FILES['audio']['name'], -4));
    $newImagem = md5(time()) . $extImagem;
    $newAudio = md5(time()) . $extAudio;
    $dirImagem = "../imagens/";
    $dirAudio = "../audios/";

    move_uploaded_file($_FILES['imagem']['tmp_name'], $dirImagem . $newImagem);
    $imagem = "INSERT INTO VOCABULARIO_CELLE(VOC_IMAGEM) VALUES ('$extImagem')";

    move_uploaded_file($_FILES['audio']['tmp_name'], $dirAudio . $newAudio);
    $audio = "INSERT INTO VOCABULARIO_CELLE(VOC_AUDIO) VALUES('extAudio')";

}

?>

    <title>Vocabulário</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo_form_area_admin.css" media="all">
    <section>
        <div id="conteudo">
            <h1 class="t1">Área administrativa</h1>
            <hr id="hr-top">
            <?php
            if (isset($_SESSION['usuario'])) {

                ?>
                <h3 class="h3_area_adm"> Adicionar vocabulário </h3>
                <form class="form_area_adm" action="../processadores/processador_form_vocabulario.php" method="post"
                      enctype="multipart/form-data">

                    <label for="txtPalavra">Palavra:</label>
                    <input type="text" class="input_area_adm" name="txtPalavra" placeholder="Palavra" required/>

                    <label for="txtCategoria">Categoria:</label>
                    <input type="text" class="input_area_adm" name="txtCategoria" placeholder="Categoria"/>

                    <label>Adicione um audio </label> <input name="audio" type="file" class="control_admin"
                                                             required accept="audio/mp3"/><br>

                    <label>Adicione uma imagem </label> <input name="imagem" type="file" class="control_admin"
                                                               required accept="image/*"/><br>

                    <input type="submit" value="Enviar arquivos" class="submit_are_adm" name="submit"/>
                </form>

                <table class="table_form">
                    <caption class="voc_area_adm">VOCABULARIO</caption>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>CATEGORIA</th>
                        <!-- <th>AUDIO</th> -->
                        <!-- <th>IMAGEM</th> -->
                    </tr>
                    </thead>
                    <tbody id="corpo">
                    <?php
                    require_once 'conexao_form_vocabulario.php';
                    $conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

                    $select = $conexao->select('VOCABULARIO_CELLE');
                    if ($select) {
                        foreach ($select as $vocabulario) {
                            echo "<td>" . $vocabulario['VOC_ID'] . "</td>";
                            echo "<td>" . $vocabulario['VOC_PALAVRA'] . "</td>";
                            echo "<td>" . $vocabulario['VOC_CATEGORIA'] . "</td>";
                            // echo "<td>" . $vocabulario['VOC_AUDIO'] . "</td>";
                            // echo "<td>" . $vocabulario['VOC_IMAGEM'] . "</td>";
                            echo "<td><a class='delete' href='deletar_form_vocabulario.php?voc_id=" . $vocabulario['VOC_ID'] . "' ><img  src='../imagens/deletar.gif' class=\"img_are_adm\" ></a></td></tr>\n";
                        }
                    }

                    ?>

                    <script>
                        $('.delete').on('click', function (evt) {
                            if (!confirm('Tem certeza que deseja deletar?')) {
                                evt.preventDefault();
                            }
                        });
                    </script>

                    </tbody>
                </table>

                <?php
            } else {
                echo "<span style='font-size: 18px; font-family: sans-serif;'>Faça o login para enviar algum arquivo</span>";
            }
            ?>
        </div>
    </section>
<?php
include_once 'rodape.php';
?>