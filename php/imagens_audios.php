<?php 
include_once 'cabecalho.php';
?>
<html lang="pt-br">
<head>
	<style>
		.conteiner {
			position: relative;
			
		}

		.image {
			opacity: 1;
			display: block;
			width: 100%;
			height: auto;
			transition: .5s ease;
			backface-visibility: hidden;
		}
		.overlay {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
			transition: .5s ease;
			background-color: #008CBA;
		}
		.container:hover .image {
			opacity: 0.3;
		}

		.container:hover .middle {
			opacity: 1;
		}

		.text {
			background-color: #4CAF50;				
			font-size: 16px;
			padding: 16px 32px;
		}
		p{
			color: cornsilk;
		}
	</style>

	<meta charset="utf-8">
	<title>Imagens e Aúdios</title>
</head>
<body>

	<section>
		<div id="conteudo">  
			<h1 class="t1">Imagens e Aúdios</h1>
			<hr id="hr-top"></hr>
			<div class="imagens_audios">
				
					<?php
					$nome = ['airplane','american_football','apple','archery','arm','auditorium','back','baseball','beans','bear','belly','bicycle','bird','blackboard','boat','books','boxing','bread','bus','butterfly','candy','canoeing','car','carrots','cheese','chin','classroom','coconut','cycling','dolphin','ear','eggs','elbow','eraser','exam','eye','eyebrows','fencing','finger','fish','foot','fox','fruits','guava','hair','hands','horse','horsemanship','ice_hockey','knee','leg','lemon','library','long_jump','meat','motorcycle','motoring','mouth','nails','neck','nose','orange','owl','papaya','parachuting','parrot','peaches','pen','pepper','pineapple','pole_vault','popcorn','potato','race','rice','roller_skating','rowing','rugby','sailing','scooter','shark','ship','shot','shot_put','shoulder','skateboard','slackline','soccer','strawberry','streetcar','student','subway','sugar','swimming','teacher','tennis','thigh','tomato','track_field','train','watermelon','wolf','wrist'];?>
					<table>

						<?php for($i=0; $i < count($nome)-2; $i+=3):
						?> <tr>
						<td> 
							<div float= "left">
								<div class="overplay">
									<div class = "text"> 
										<b> 
											<p><?=$nome[$i]?></p> 
										</b> 
									</div>
								</div>
								<div class= "conteiner">
									<figure>
										<img src="../Imagens/imagens_mafia/<?=$nome[$i]?>.jpg" alt ="Avatar" class ="image">
										<div class="middle">
											<div class="text"></div>
										</div>
									</figure>
								</div>
								<audio controls> 
									<source src="../audios/audios_mafia/<?=$nome[$i]?>.mp3" type="audio/mp3">
									</audio>
								</div>
							</td>
							<td> 
								<div float="left">
									<div class = "text">
										<b>
											<p class = name>
												<?=$nome[$i+1]?>	
											</p>
										</b> 
									</div>
									<div class= "conteiner">
										<figure>
											<img src="../Imagens/imagens_mafia/<?=$nome[$i+1]?>.jpg" alt ="Avatar" class ="image">
											<div class="middle">
												<div class="text">													
												</div>
											</div>
										</figure>
									</div>
									<audio controls> 
										<source src="../audios/audios_mafia/<?=$nome[$i+1]?>.mp3" type="audio/mp3">
										</audio>
									</div> 
								</td>
								<td> 
									<div float="left">
										<div class = "text"> 
											<b>
												<p class = name><?=$nome[$i+2]?></p>
											</b>
										</div>
										<div class= "conteiner">
											<figure>
												<img src="../Imagens/imagens_mafia/<?=$nome[$i+2]?>.jpg" alt ="Avatar" class ="image">
												<div class= "middle">
													<div class="text"></div>
												</figure>
											</div>
											<audio controls> 
												<source src="../audios/audios_mafia/<?=$nome[$i+2]?>.mp3" type="audio/mp3">
												</audio>
											</div> 
										</td>
									</tr>
								<?php endfor; ?>
							</table>
						</section>
					</body>
					</html>
					<?php 
					include_once 'rodape.php';
					?>
