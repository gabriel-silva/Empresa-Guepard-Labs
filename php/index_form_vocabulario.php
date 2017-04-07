<?php 
include_once 'cabecalho.php';
?>

<title>Vocabulário</title>
<section>
	<div id="conteudo">
		<form id="frmCadastro" action="processador_form_vocabulario.php" method="post" >
			<h3> Adicionar vocabulário </h3>
			<label for="txtPalavra">Palavra:</label>
				<input type="text" name="txtPalavra" placeholder="Palavra" required/>
			
			<label for="txtCategoria">Categoria:</label>
				<input type="text" name="txtCategoria" placeholder="Categoria"/>
			
			<label for="txtAudio">Audio:</label>
				<input type="text" name="txtAudio"/>
			
			<label for="txtImagem">Imagem:</label>
				<input type="text" name="txtImagem"/> 
			
			<input type="submit" value="Salvar" id="btnSalvar" name="submit"/> 
		</form>
		
		<table id="tblListar">
			<caption>VOCABULARIO</caption>
			<thead>
				<tr> 
					<th>ID</th> <th>NOME</th> <th>CATEGORIA</th> <th>AUDIO</th> <th>IMAGEM</th>
				</tr>
			</thead>
			<tbody id="corpo">
				<?php
				require_once 'conexao_form_vocabulario.php';
				$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

				$select = $conexao->select('CELLE_VOCABULARIO');
				if($select){
					foreach ($select as $vocabulario) {					
						echo "<td>".$vocabulario['VOC_ID']."</td>";
						echo "<td>".$vocabulario['VOC_PALAVRA']."</td>";
						echo "<td>".$vocabulario['VOC_CATEGORIA']."</td>";
						echo "<td>".$vocabulario['VOC_AUDIO']."</td>";
						echo "<td>".$vocabulario['VOC_IMAGEM']."</td>";
						echo "<td><a href='deletar_form_vocabulario.php?voc_id=".$vocabulario['VOC_ID']."' ><img src='../Imagens/deletar.gif'></a></td></tr>\n";
					}
				}
				?>		
				
				
			</tbody>
		</table>
	</div>
</section>
<?php 
include_once 'rodape.php';
?>