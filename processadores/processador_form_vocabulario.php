<?php


require_once '../php/conexao_form_vocabulario.php';
include_once '../constantes_database.php';

$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
$dados = array('VOC_PALAVRA' => $_POST["txtPalavra"], 'VOC_CATEGORIA' => $_POST["txtCategoria"]);


$insert = $conexao->insert('VOCABULARIO_CELLE', $dados);

if (isset($_FILES['imagem'])) {

	$imagem = 
    $extImagem = strtolower(substr($_FILES['imagem']['name'], -4));
    $extAudio = strtolower(substr($_FILES['audio']['name'], -4));
    $newImagem = time().$extImagem;
    $newAudio = time().$extAudio;
    $dirImagem = "../imagens/imagens_mafia/";
    $dirAudio = "../audios/audios_mafia/";

    move_uploaded_file($_FILES['imagem']['tmp_name'], $dirImagem . $newImagem);

    move_uploaded_file($_FILES['audio']['tmp_name'], $dirAudio . $newAudio);



}

// redireciona para a página anterior
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>
