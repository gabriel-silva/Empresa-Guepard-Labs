<?php
ob_start();
require_once 'cabecalho.php';

// Checa se a variável de sessão do índice contexto não está setada. Se verdadeiro, seta como "default" e salva na variável $contexto
if (!isset($_SESSION['ctxt'])) {
    $_SESSION['ctxt'] = 'default';
    $contexto = $_SESSION['ctxt'];
}
?>
    <title>Quiz</title>
    <section>
        <div id="conteudo">
            <h1 class="t1"> Quiz Tipo 1</h1>
            <hr id="hr-top"></hr>
            <?php

            // Checa se existe usuário na sessão pois só vai exibir o quiz para usuários logados
            if (isset($_SESSION['usuario'])) {
                ?>
                <button class="results" onclick="window.open('resultados.php', 'pagina', 'width=630, height=300;')">Ver
                    Seus Resultados
                </button>
                <label id="contexto">Escolha o Contexto:</label><br/><br/>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <select name="contexto" onchange="this.form.submit()">
                        <option value="default">Selecione</option>
                        <option value="todos">Todos</option>
                        <option value="cozinha">Utensílios de Cozinha</option>
                        <option value="vestuario">Vestuario</option>
                        <option value="jardim">Jardim</option>
                        <option value="mobilias">Mobílias</option>
                        <option value="profissoes">Profissões</option>
                        <option value="eletrodomesticos">Eletrodomésticos</option>
                    </select>
                </form>
                <?php
            } // Se não estiver logado, exibe uma mensagem para o usuário fazer o login
            else {
                echo "<span style='font-size: 18px; font-family: sans-serif;'>Faça o login para realizar o Quiz</span>";
            }

            // Arrays dos contextos
            $cozinha = [
                ['spoon.mp3', 'spoon.jpg', 'knife.jpg', 'glass.jpg', 'cup.jpg', '1', 'Spoon'],
                ['knife.mp3', 'fork_coz.jpg', 'coffee_filter.jpg', 'knife.jpg', 'drainer.jpg', '3', 'Knife'],
                ['shell.mp3', 'cup.jpg', 'shell.jpg', 'spatula.jpg', 'pan.jpg', '2', 'Ladle'],
                ['plates.mp3', 'cuscuzeira.jpg', 'jar.jpg', 'cake_pan.jpg', 'plates.jpg', '4', 'Plates'],
                ['kettle.mp3', 'coffee_filter.jpg', 'fork_coz.jpg', 'spatula.jpg', 'kettle.jpg', '4', 'Kettle'],
                ['glass.mp3', 'glass.jpg', 'drainer.jpg', 'pressure_cooker.jpg', 'frying_pan.jpg', '1', 'Glass'],
                ['fork.mp3', 'shell.jpg', 'kettle.jpg', 'fork_coz.jpg', 'serving_platter.jpg', '3', 'Fork'],
                ['drainer.mp3', 'cake_pan.jpg', 'drainer.jpg', 'wooden_spoon.jpg', 'thermal_bottle.jpg', '2', 'Drainer'],
                ['jar.mp3', 'jar.jpg', 'spoon.jpg', 'serving_platter.jpg', 'spatula.jpg', '1', 'Jar'],
                ['frying_pan.mp3', 'pan.jpg', 'thermal_bottle.jpg', 'fork_coz.jpg', 'frying_pan.jpg', '4', 'Frying Pan'],
                ['thermal_bottle.mp3', 'drainer.jpg', 'glass.jpg', 'thermal_bottle.jpg', 'cup.jpg', '3', 'Thermal Bottle'],
                ['cup.mp3', 'pan.jpg', 'cup.jpg', 'kettle.jpg', 'jar.jpg', '2', 'Cup'],
                ['spatula.mp3', 'spatula.jpg', 'cake_pan.jpg', 'cuscuzeira.jpg', 'coffee_filter.jpg', '1', 'Spatula'],
                ['pressure_cooker.mp3', 'jar.jpg', 'spatula.jpg', 'plates.jpg', 'pressure_cooker.jpg', '4', 'Pressure Cooker'],
                ['cake_pan.mp3', 'shell.jpg', 'drainer.jpg', 'cake_pan.jpg', 'thermal_bottle.jpg', '3', 'Cake Pan'],
                ['serving_platter.mp3', 'plates.jpg', 'fork_coz.jpg', 'pan.jpg', 'serving_platter.jpg', '4', 'Serving Platter'],
                ['cuscuzeira.mp3', 'shell.jpg', 'cuscuzeira.jpg', 'coffee_filter.jpg', 'knife.jpg', '2', 'Cuscuzeira'],
                ['wooden_spoon.mp3', 'wooden_spoon.jpg', 'spatula.jpg', 'serving_platter.jpg', 'frying_pan.jpg', '1', 'Wooden Spoon'],
                ['pan.mp3', 'plates.jpg', 'pan.jpg', 'fork_coz.jpg', 'drainer.jpg', '2', 'Pan'],
                ['coffee_filter.mp3', 'coffee_filter.jpg', 'pressure_cooker.jpg', 'drainer.jpg', 'spoon.jpg', '1', 'Coffee Filter']
            ];

            $vestuario = [
                ['blazer.mp3', 'shirt.jpg', 'tie.jpg', 'vest.jpg', 'blazer.jpg', '4', 'Blazer'],
                ['blouse.mp3', 'blouse.jpg', 'hat.jpg', 'jumpsuit.jpg', 'skirt.jpg', '1', 'Blouse'],
                ['coat.mp3', 'swimwear.jpg', 'coat.jpg', 'pants.jpg', 'pijamas.jpg', '2', 'Coat'],
                ['dress.mp3', 'dress.jpg', 'nightdress.jpg', 'shirt.jpg', 'coat.jpg', '1', 'Dress'],
                ['hat.mp3', 'blazer.jpg', 'vest.jpg', 'hat.jpg', 'blouse.jpg', '3', 'Hat'],
                ['jumpsuit.mp3', 'shirt.jpg', 'tie.jpg', 'shoes.jpg', 'jumpsuit.jpg', '4', 'Jumpsuit'],
                ['nightdress.mp3', 'pants.jpg', 'vest.jpg', 'nightdress.jpg', 'hat.jpg', '3', 'Nightdress'],
                ['pants.mp3', 'dress.jpg', 'pants.jpg', 'pijamas.jpg', 'blazer.jpg', '2', 'Pants'],
                ['pijamas.mp3', 'swimwear.jpg', 'pijamas.jpg', 'tie.jpg', 'hat.jpg', '2', 'Pijamas'],
                ['shirt.mp3', 'jumpsuit.jpg', 'shoes.jpg', 'skirt.jpg', 'shirt.jpg', '4', 'Shirt'],
                ['shoe.mp3', 'shoes.jpg', 'blouse.jpg', 'blazer.jpg', 'pants.jpg', '1', 'Shoes'],
                ['skirt.mp3', 'coat.jpg', 'swimwear.jpg', 'skirt.jpg', 'dress.jpg', '3', 'Skirt'],
                ['swimwear.mp3', 'nightdress.jpg', 'jumpsuit.jpg', 'swimwear.jpg', 'coat.jpg', '3', 'Swimwear'],
                ['tie.mp3', 'blouse.jpg', 'hat.jpg', 'shoes.jpg', 'tie.jpg', '4', 'Tie'],
                ['vest.mp3', 'vest.jpg', 'dress.jpg', 'shirt.jpg', 'pants.jpg', '1', 'Vest']
            ];

            $jardim = [
                ['watering.mp3', 'flowerpot.jpg', 'watering.jpg', 'loan.jpg', 'esculpture.jpg', '2', 'Watering'],
                ['planter.mp3', 'fork.jpg', 'stool.jpg', 'planter.jpg', 'flower.jpg', '3', 'Planter'],
                ['flower.mp3', 'flower.jpg', 'fountain.jpg', 'tree.jpg', 'grass.jpg', '1', 'Flower'],
                ['decking.mp3', 'decking.jpg', 'tree.jpg', 'bird.jpg', 'pergola.jpg', '1', 'Decking'],
                ['composto.mp3', 'watering.jpg', 'stool.jpg', 'flower.jpg', 'composto.jpg', '4', 'Composto'],
                ['grass.mp3', 'bird.jpg', 'esculpture.jpg', 'grass.jpg', 'planter.jpg', '3', 'Grass'],
                ['pergola.mp3', 'fork.jpg', 'decking.jpg', 'pergola.jpg', 'stool.jpg', '3', 'Pergola'],
                ['bird.mp3', 'tree.jpg', 'bird.jpg', 'fountain.jpg', 'flowerpot.jpg', '2', 'Bird'],
                ['tree.mp3', 'loan.jpg', 'composto.jpg', 'grass.jpg', 'tree.jpg', '4', 'Tree'],
                ['fountain.mp3', 'fountain.jpg', 'planter.jpg', 'watering.jpg', 'flower.jpg', '1', 'Fountain'],
                ['stool.mp3', 'bird.jpg', 'planter.jpg', 'pergola.jpg', 'stool.jpg', '4', 'Stool'],
                ['fork.mp3', 'decking.jpg', 'tree.jpg', 'fork.jpg', 'esculpture.jpg', '3', 'Fork'],
                ['loan.mp3', 'loan.jpg', 'flower.jpg', 'fountain.jpg', 'flowerpot.jpg', '1', 'Loan'],
                ['esculpture.mp3', 'composto.jpg', 'esculpture.jpg', 'grass.jpg', 'watering.jpg', '2', 'Esculpture'],
                ['flowerpot.mp3', 'pergola.jpg', 'flowerpot.jpg', 'fork.jpg', 'bird.jpg', '2', 'Flowerpot']
            ];

            $mobilias = [
                ['table.mp3', 'couch.jpg', 'wardrobe_arm.jpg', 'table.jpg', 'nightstand.jpg', '3', 'Table'],
                ['couch.mp3', 'bed.jpg', 'chair.jpg', 'wardrobe_gr.jpg', 'couch.jpg', '4', 'Couch'],
                ['wardrobe_arm.mp3', 'fruit_bowl.jpg', 'wardrobe_arm.jpg', 'curtains.jpg', 'chair.jpg', '2', 'Wardrobe'],
                ['nightstand.mp3', 'nightstand.jpg', 'dresser.jpg', 'table.jpg', 'wardrobe_gr.jpg', '1', 'Nightstand'],
                ['bed.mp3', 'fruit_bowl.jpg', 'couch.jpg', 'curtains.jpg', 'bed.jpg', '4', 'Bed'],
                ['fruit_bowl.mp3', 'wardrobe_arm.jpg', 'chair.jpg', 'fruit_bowl.jpg', 'nightstand.jpg', '3', 'Fruit Bowl'],
                ['dresser.mp3', 'wardrobe_gr.jpg', 'dresser.jpg', 'curtains.jpg', 'couch.jpg', '2', 'Dresser'],
                ['curtains.mp3', 'nightstand.jpg', 'curtains.jpg', 'chair.jpg', 'table.jpg', '2', 'Curtains'],
                ['chair.mp3', 'chair.jpg', 'wardrobe_arm.jpg', 'couch.jpg', 'fruit_bowl.jpg', '1', 'Chair'],
                ['wardrobe_gr.mp3', 'nightstand.jpg', 'bed.jpg', 'wardrobe_gr.jpg', 'dresser.jpg', '3', 'Wardrobe']
            ];

            $profissoes = [
                ['electrician.mp3', 'lawyer.jpg', 'electrician.jpg', 'dentist.jpg', 'singer.jpg', '2', 'Electrician'],
                ['programmer.mp3', 'writer.jpg', 'baker.jpg', 'journalist.jpg', 'programmer.jpg', '4', 'Programmer'],
                ['writer.mp3', 'cultivator.jpg', 'mechanic.jpg', 'writer.jpg', 'teacher.jpg', '3', 'Writer'],
                ['driver.mp3', 'photographer.jpg', 'driver.jpg', 'dentist.jpg', 'doctor.jpg', '2', 'Driver'],
                ['baker.mp3', 'baker.jpg', 'teacher.jpg', 'lawyer.jpg', 'journalist.jpg', '1', 'Baker'],
                ['teacher.mp3', 'teacher.jpg', 'veterinarian.jpg', 'photographer.jpg', 'programmer.jpg', '1', 'Teacher'],
                ['veterinarian.mp3', 'cultivator.jpg', 'doctor.jpg', 'veterinarian.jpg', 'electrician.jpg', '3', 'Veterinarian'],
                ['journalist.mp3', 'singer.jpg', 'mechanic.jpg', 'writer.jpg', 'Journalist.jpg', '4', 'Journalist'],
                ['lawyer.mp3', 'dentist.jpg', 'electrician.jpg', 'lawyer.jpg', 'driver.jpg', '3', 'Lawyer'],
                ['mechanic.mp3', 'baker.jpg', 'mechanic.jpg', 'photographer.jpg', 'cultivator.jpg', '2', 'Mechanic'],
                ['dentist.mp3', 'dentist.jpg', 'teacher.jpg', 'veterinarian.jpg', 'programmer.jpg', '1', 'Dentist'],
                ['photographer.mp3', 'singer.jpg', 'doctor.jpg', 'photographer.jpg', 'journalist.jpg', '3', 'Photographer'],
                ['cultivator.mp3', 'cultivator.jpg', 'electrician.jpg', 'writer.jpg', 'veterinarian.jpg', '1', 'Cultivator'],
                ['doctor.mp3', 'journalist.jpg', 'driver.jpg', 'lawyer.jpg', 'doctor.jpg', '4', 'Doctor'],
                ['singer.mp3', 'dentist.jpg', 'singer.jpg', 'mechanic.jpg', 'baker.jpg', '2', 'Singer']
            ];

            $eletrodomesticos = [
                ['microwave.mp3', 'microwave.jpg', 'blender.jpg', 'fan.jpg', 'sandwich_maker.jpg', '1', 'Microwave'],
                ['tv.mp3', 'radio.jpg', 'washing_machine.jpg', 'freezer.jpg', 'tv.jpg', '4', 'TV'],
                ['sandwich_maker.mp3', 'refrigerator.jpg', 'food_mixer.jpg', 'sandwich_maker.jpg', 'cooker.jpg', '3', 'Sandwich Maker'],
                ['blender.mp3', 'coffee_machine.jpg', 'blender.jpg', 'aspirator.jpg', 'clothes_iron.jpg', '2', 'Blender'],
                ['air_conditioning.mp3', 'microwave.jpg', 'radio.jpg', 'food_mixer.jpg', 'air_conditioning.jpg', '4', 'Air Conditioning'],
                ['radio.mp3', 'radio.jpg', 'washing_machine.jpg', 'refrigerator.jpg', 'aspirator.jpg', '1', 'Radio'],
                ['coffee_machine.mp3', 'blender.jpg', 'tv.jpg', 'cooker.jpg', 'coffee_machine.jpg', '4', 'Coffee Machine'],
                ['fan.mp3', 'freezer.jpg', 'sandwich_maker.jpg', 'fan.jpg', 'clothes_iron.jpg', '3', 'Fan'],
                ['freezer.mp3', 'aspirator.jpg', 'freezer.jpg', 'air_conditioning.jpg', 'refrigerator.jpg', '2', 'Freezer'],
                ['washing_machine.mp3', 'tv.jpg', 'washing_machine.jpg', 'cooker.jpg', 'microwave.jpg', '2', 'Washing Machine'],
                ['cooker.mp3', 'radio.jpg', 'freezer.jpg', 'cooker.jpg', 'coffee_machine.jpg', '3', 'Cooker'],
                ['clothes_iron.mp3', 'refrigerator.jpg', 'air_conditioning.jpg', 'sandwich_maker.jpg', 'clothes_iron.jpg', '4', 'Clothes Iron'],
                ['food_mixer.mp3', 'food_mixer.jpg', 'microwave.jpg', 'aspirator.jpg', 'blender.jpg', '1', 'Food Mixer'],
                ['refrigerator.mp3', 'cooker.jpg', 'fan.jpg', 'refrigerator.jpg', 'tv.jpg', '3', 'Refrigerator'],
                ['aspirator.mp3', 'coffee_machine.jpg', 'aspirator.jpg', 'microwave.jpg', 'sandwich_maker.jpg', '2', 'Vacuum']
            ];
            $todos = array_merge($profissoes, $vestuario, $cozinha, $jardim, $eletrodomesticos, $mobilias);

            $array = [
                "cozinha" => $cozinha,
                "vestuario" => $vestuario,
                "jardim" => $jardim,
                "mobilias" => $mobilias,
                "eletrodomesticos" => $eletrodomesticos,
                "profissoes" => $profissoes,
                "todos" => $todos,
                "default" => "default"
            ];

            function resetContext()
            {
                $_SESSION['indx'] = 0;
                $_SESSION['acertos'] = 0;
                $_SESSION['erros'] = 0;
                $_SESSION['ctxt'] = "default";
                $_SESSION['id'] = 0;
                unset($_SESSION['questoes']);
            }

            // Zera as variáveis de sessão ao iniciar o quiz (quando o usuário escolhe um contexto para responder)
            if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['contexto']) && $_POST['contexto'] !== "default")) {
                resetContext();
                $_SESSION['ctxt'] = $_POST['contexto'];
            }

            $contexto = $_SESSION['ctxt'];

            $perguntas = $array[$contexto];

            if (!isset($_SESSION['id'])) {
                $_SESSION['id'] = 0;
                $id = 0;
            } else {
                $id = $_SESSION['id'];
            }

            if (!isset($_SESSION['questoes'])) {
                $_SESSION['questoes'] = $perguntas;
                $questoes = $perguntas;
            } else {
                $questoes = $_SESSION['questoes'];
            }

            if (isset($id) && $id == 0 && $contexto != "default") {
                shuffle($perguntas);
                $questoes = $perguntas;
                $id = 1;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset"])) {
                $_POST['contexto'] = 'default';
                resetContext();
                $indice = 0;
                $id = 0;
                header("location: quiz.php");
            }

            if (!isset($_SESSION['indx'])) {
                $_SESSION['indx'] = 0;
                $indice = 0;
            } else {
                $indice = $_SESSION['indx'];
            }

            if (!isset($_SESSION['acertos'])) {
                $_SESSION['acertos'] = 0;
                $acertos = 0;
            } else {
                $acertos = $_SESSION['acertos'];
            }

            if (!isset($_SESSION['erros'])) {
                $_SESSION['erros'] = 0;
                $erros = 0;
            } else {
                $erros = $_SESSION['erros'];
            }

            if (isset($_POST["escolha"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
                $escolha = $_POST["escolha"];
                if ($escolha === $questoes[$indice][5]) {
                    $indice++;
                    $acertos++;
                    if ($indice === sizeof($questoes)) {
                        $indice = 0;
                        $id = 0;
                        unset($_SESSION['questoes']);
                        header("location:resultado_final.php");
                    }
                } else {
                    $erros++;
                    echo '<style type="text/css"> 
					#img_' . $escolha . ' {
					border-color: red;
				}
				</style> 
				<audio autoplay>
				<source src="../audios/erro.mp3"/>
				</audio>';
                }
            }
            $_SESSION['indx'] = $indice;
            $_SESSION['acertos'] = $acertos;
            $_SESSION['erros'] = $erros;
            $_SESSION['id'] = $id;
            $_SESSION['questoes'] = $questoes;

            if ($contexto !== "default") {
                ?>
                <h2>Selecione a imagem correspondente ao áudio</h2>

                <p style="text-indent: 0;"><span><b>Pergunta: <?= $indice + 1; ?></b></span></p>
                <br>
                <br>
                <table>
                    <tr>
                        <td>
                            <h2><?= $questoes[$indice][6]; ?></h2>
                        </td>
                        <td>
                            <div id="botao_audio">
                                <audio id="audio" autoplay src="../audios/<?= $questoes[$indice][0]; ?>"/>
                                </audio>
                                <button class="b_audio" onclick="document.getElementById('audio').play()"></button>
                            </div>
                        </td>
                    </tr>
                </table>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="content">
                        <ul class="itens">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                                ?>
                                <div class="item">
                                    <li class="itens">
                                        <input class="img" id="img_<?= $i; ?>" type="image"
                                               src="../imagens/imagens_quiz/<?= $questoes[$indice][$i]; ?>"
                                               name="escolha" value="<?= $i; ?>"/>
                                    </li>
                                </div>
                            <?php } ?>
                        </ul>
                    </div>
                </form>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <br/>
                    <input class="large" type="submit" name="reset" value="Reset">
                </form>
                <?php
            }
            ?>
        </div>
    </section>
<?php
require_once 'rodape.php';
ob_end_flush();
?>