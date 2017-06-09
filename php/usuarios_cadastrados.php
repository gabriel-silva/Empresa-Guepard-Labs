<?php
include 'constantes_database.php';
include_once 'cabecalho.php';
?>

    <title>Vocabulário</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo_form_area_admin.css" media="all">
    <section>
        <div id="conteudo">
            <h1 class="t1">Usuários Cadastrados</h1>
            <hr id="hr-top"></hr>
            <?php
            if (isset($_SESSION['usuario'])) {
                ?>
                <table class="table_form">
                    <thead>
                    <tr>
                        <th>USUÁRIO</th>
                        <th>MATRICULA</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>CURSO</th>
                        <th>PERIODO</th>
                        <th>TELEFONE</th>
                    </tr>
                    </thead>
                    <tbody id="corpo">
                    <?php

                    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                    $query = "SELECT * FROM usuarios";
                    $result = mysqli_query($link, $query);

                    foreach ($result as $users) {
                        echo "<tr>";
                        echo "<td>" . $users['usuario'] . "</td>";
                        echo "<td>" . $users['matricula'] . "</td>";
                        echo "<td>" . $users['nome'] . "</td>";
                        echo "<td>" . $users['email'] . "</td>";
                        echo "<td>" . $users['curso'] . "</td>";
                        echo "<td>" . $users['periodo'] . "</td>";
                        echo "<td>" . $users['telefone'] . "</td>";
                        echo "</tr>";
                        //echo "<td><a href='deletar_form_vocabulario.php?voc_id=" . $vocabulario['VOC_ID'] . "' ><img  src='../imagens/deletar.gif' class=\"img_are_adm\"></a></td></tr>\n";
                    }


                    mysqli_close($link);

                    ?>


                    </tbody>
                </table>

                <?php
            } else {
                echo "<span style='font-size: 18px; font-family: sans-serif;'>Faça o login para ver usuários cadastrados</span>";
            }
            ?>
        </div>
    </section>
<?php
include_once 'rodape.php';
?>