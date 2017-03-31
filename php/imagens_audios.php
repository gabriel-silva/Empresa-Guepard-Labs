<?php 
	include_once 'cabecalho.php';
	?>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Imagens e Aúdios</title>
		</head>
		<body>

			 <section>
        <div id="conteudo">  
            <h1 class="t1">Imagens e Aúdios</h1>
            <hr id="hr-top"></hr>
            <div class="imagens_audios">


			<table>
				<?php
				$nome = ['airplane','american_football','apple','archery','arm','auditorium','back','baseball','beans','bear','belly','bicycle','bird','blackboard','boat','books','boxing','bread','bus','butterfly','candy','canoeing','car','carrots','cheese','chin','classroom','coconut','cycling','dolphin','ear','eggs','elbow','eraser','exam','eye','eyebrows','fencing','finger','fish','foot','fox','fruits','guava','hair','hands','horse','horsemanship','ice_hockey','knee','leg','lemon','library','long_jump','meat','motorcycle','motoring','mouth','nails','neck','nose','orange','owl','papaya','parachuting','parrot','peaches','pen','pepper','pineapple','pole_vault','popcorn','potato','race','rice','roller_skating','rowing','rugby','sailing','scooter','shark','ship','shot','shot_put','shoulder','skateboard','slackline','soccer','strawberry','streetcar','student','subway','sugar','swimming','teacher','tennis','thigh','tomato','track_field','train','watermelon','wolf','wrist'];?>
				<table>

				<?php for($i=0; $i < count($nome)-2; $i+=3){
					echo "<tr><td> <div float=\"left\">
								<figure>
									<img src=\"../Imagens/imagens_mafia/".$nome[$i].".jpg\" width=\"80%\"heigth=\"80%\">
								</figure>
								<audio controls> 
									<source src=\"../audios/audios_mafia/".$nome[$i].".mp3\" type=\"audio/mp3\">
								</audio>
						  </div> </td>
						  <td> <div float=\"left\">
								<figure>
									<img src=\"../Imagens/imagens_mafia/".$nome[$i+1].".jpg\" width=\"80%\"heigth=\"80%\">
								</figure>
								<audio controls> 
									<source src=\"../audios/audios_mafia/".$nome[$i+1].".mp3\" type=\"audio/mp3\">
								</audio>
						  </div> </td>
						  <td> <div float=\"left\">
								<figure>
									<img src=\"../Imagens/imagens_mafia/".$nome[$i+2].".jpg\" width=\"80%\"heigth=\"80%\">
								</figure>
								<audio controls> 
									<source src=\"../audios/audios_mafia/".$nome[$i+2].".mp3\" type=\"audio/mp3\">
								</audio>
						  </div> </td></tr>";							

				}
				?>
        </table>
    </section>
		</body>
	</html>
	<?php 
	include_once 'rodape.php';
?>
