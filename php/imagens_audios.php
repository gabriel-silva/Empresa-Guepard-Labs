<?php
include_once 'cabecalho.php';
?>
<title>Listening</title>
<link rel="stylesheet" type="text/css" href="../css/imagens_audios.css">


<section>
    <div id="conteudo">

        <h1 class="t1">Listening</h1>
        <hr id="hr-top"></hr>
        <div class="box">

            <?php
            $nome = ['airplane', 'american_football', 'apple', 'archery', 'arm', 'auditorium', 'back', 'baseball', 'beans', 'bear', 'belly', 'bicycle', 'bird', 'blackboard', 'boat', 'books', 'boxing', 'bread', 'bus', 'butterfly', 'candy', 'canoeing', 'car', 'carrots', 'cheese', 'chin', 'classroom', 'coconut', 'cycling', 'dolphin', 'ear', 'eggs', 'elbow', 'eraser', 'exam', 'eye', 'eyebrows', 'fencing', 'finger', 'fish', 'foot', 'fox', 'fruits', 'guava', 'hair', 'hands', 'horse', 'horsemanship', 'ice_hockey', 'knee', 'leg', 'lemon', 'library', 'long_jump', 'meat', 'motorcycle', 'motoring', 'mouth', 'nails', 'neck', 'nose', 'orange', 'owl', 'papaya', 'parachuting', 'parrot', 'peaches', 'pen', 'pepper', 'pineapple', 'pole_vault', 'popcorn', 'potato', 'race', 'rice', 'roller_skating', 'rowing', 'rugby', 'sailing', 'scooter', 'shark', 'ship', 'shot', 'shot_put', 'shoulder', 'skateboard', 'slackline', 'soccer', 'strawberry', 'streetcar', 'student', 'subway', 'sugar', 'swimming', 'teacher', 'tennis', 'thigh', 'tomato', 'track_field', 'train', 'watermelon', 'wolf', 'wrist'];

            for ($i = 0; $i < count($nome) - 1; $i++):
                ?>
                <div class="float_box">

                    <div class="conteiner">
                        <figure class="in_box">
                            <figcaption>
                                <b>
                                    <p><?= strtoupper($nome[$i]) ?></p>
                                </b>
                            </figcaption>
                            <img src="../imagens/imagens_mafia/<?= $nome[$i] ?>.jpg" alt="Avatar" class="image">
                            <figcaption>
                                <audio controls>
                                    <source src="../audios/audios_mafia/<?= $nome[$i] ?>.mp3" type="audio/mp3">
                                </audio>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="float_box">

                <div class="footerZoado">
                    <figure class="in_box">
                        <figcaption>
                            <b>
                                <p><?= strtoupper($nome[count($nome) - 1]) ?></p>
                            </b>
                        </figcaption>
                        <img src="../imagens/imagens_mafia/<?= $nome[count($nome) - 1] ?>.jpg" alt="Avatar"
                             class="image">
                        <figcaption>
                            <audio controls>
                                <source src="../audios/audios_mafia/<?= $nome[count($nome) - 1] ?>.mp3"
                                        type="audio/mp3">
                            </audio>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
include_once 'rodape.php';
?>
