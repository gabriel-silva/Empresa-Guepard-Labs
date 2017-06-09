<?php
require_once 'conexao_form_vocabulario.php';
include_once 'constantes_database.php';

$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
$conexao->delete('VOCABULARIO_CELLE', 'VOC_ID', $_GET["voc_id"]);

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>
