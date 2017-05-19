
<?php
	require_once '../php/conexao_form_vocabulario.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$dados = array('VOC_PALAVRA' => $_POST["txtPalavra"], 'VOC_CATEGORIA' => $_POST["txtCategoria"], 'VOC_AUDIO' => $_POST['txtAudio'], 'VOC_IMAGEM' => $_POST['txtImagem']);


	$insert = $conexao->insert('CELLE_VOCABULARIO', $dados); 
	
// redireciona para a página anterior
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
