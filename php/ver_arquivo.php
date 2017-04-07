
<?php
	//recuperar o codigo do arquivo atraves do metodo GET
	$codigo= $_GET['codigo'];
echo $codigo;
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	//$select = $conexao->select('arquivo','codigo, tipo, arquivo',"codigo='$codigo'");



$consulta = "SELECT arquivo, tipo FROM arquivo WHERE codigo='".$codigo."'";

$resultado = $conexao->executar($consulta);
$dados = mysql_fetch_array($resultado);
$tipo = $dados['tipo'];
$arquivo = $dados['arquivo'];

   //EXIBE ARQUIVO  - se o navegador não oferecer suporte para a extensão sera solicita dowload do arquivo
   header("Content-type: ".$tipo."");
   echo $arquivo;
?>
