<?php
include_once 'cabecalho.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_celle";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$usuario = $_SESSION['usuario'];

$query = "SELECT matricula FROM usuarios WHERE usuario = '$usuario'";
$result = mysqli_query($conn, $query);
$arr = mysqli_fetch_assoc($result);
$matric = $arr['matricula'];
?>
    <title>Resultado Quiz</title>
    <section>
        <div id="conteudo">
            <h1 class="t1"> Resultado </h1>
            <hr id="hr-top"></hr>
            <br>
            <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
            <br/>
            <br/>
            <div class="resultado">
                <?php
                if (isset($_SESSION['contexto']) && $_SESSION['contexto'] != 'default') {
                    $contexto = $_SESSION['contexto'];
                }
                if (isset($_SESSION['ctxt']) && $_SESSION['ctxt'] != 'default') {
                    $contexto = $_SESSION['ctxt'];
                }
                if (isset($_POST['voltar'])) {
                    $_SESSION['acertos'] = 0;
                    $_SESSION['erros'] = 0;
                    $_SESSION['contexto'] = "default";
                    $_SESSION['ctxt'] = "default";
                    $_SESSION['id'] = 0;
                    header("location: quiz.php");

                }
                $total = $_SESSION['acertos'] + $_SESSION['erros'];

                $aproveitamento = number_format((($_SESSION['acertos'] * 100) / $total), 2, '.', ',');

                echo "<h3>Total de Acertos: " . $_SESSION['acertos'] . "</h3>";
                echo "<h3>Total de Erros: " . $_SESSION['erros'] . "</h3>";
                echo "<h3>Aproveitamento: " . $aproveitamento . " %</h3>";

                $_SESSION['aproveitamento'] = $aproveitamento;

                if ($aproveitamento >= 70) {
                    ?>
                    <br/>
                    <div class="msg"><h3><?= "Parabéns, você foi muito bem!!"; ?></h3></div>
                    <?php
                } elseif ($aproveitamento >= 50) {
                    ?>
                    <br/>
                    <div class="msg"><h3><?= "Você foi bem, mas pode melhorar!!"; ?></h3></div>
                    <?php
                } elseif ($aproveitamento < 50) {
                    ?>
                    <br/>
                    <div class="msg"><h3><?= "Você não foi bem dessa vez. Estude um pouco mais!!"; ?></h3></div>
                    <?php
                }
                ?>
            </div>
            <br/>
            <br/>
            <style type="text/css">
                ${demo.css}
            </style>
            <script type="text/javascript">

                $(function () {
                    $('#container').highcharts({
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'Aproveitamento'
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                    style: {
                                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                    }
                                }
                            }
                        },
                        series: [{
                            name: 'Aproveitamento',
                            colorByPoint: true,
                            data: [{
                                name: 'Acertos',
                                y: <?= $_SESSION['acertos'] ?>
                            }, {
                                name: 'Erros',
                                y: <?= $_SESSION['erros'] ?>,
                                sliced: true,
                                selected: true

                            },]
                        }]
                    });
                });
            </script>
            <script src="../javaScript/highcharts.js"></script>
            <script src="../javaScript/exporting.js"></script>
            <form action="#" method="POST">
                <input class="submit" type="submit" name="voltar" value="Voltar ao Quiz">
            </form>
            <br>
            <br>
            <form action="desempenho.php" method="POST">
                <label for="matricula">Matricula:</label>
                <input id="matricula" type="text" name="matricula" maxlength="14"
                       style="min-width: 100px; width: 10%;"/>
                <input class="submit" name="submit" type="submit" value="Salvar Resultado"/>
            </form>
        </div>
        <br/>
    </section>
    <script type="text/javascript">
        $('form').on('submit', function () {
            if ($(this).find('input[name="matricula"]').val() != <?= $matric ?>) {
                alert("A matrícula informada não pertence ao usuário logado ou não existe!!!!");
                $('#matricula').focus();
                return false;
            }
        });
    </script>
<?php
include_once 'rodape.php';
?>