<?php
$idss=$_POST['id'];
$cor=$_POST['c'];
$preco=$_POST['p'];
$tamanho=$_POST['languagem'];
$fots=$_POST['arquivo'];
///////////////
$servidor="mysql.hostinger.com.br";
$nomedeusuario="u817064590_jos";
$servidorsenha="josue.pedro";
//////////////////////////
$connect = @mysql_connect($servidor,$nomedeusuario,$servidorsenha);
$db = mysql_select_db('u817064590_mysql');
//////////////
$sql="UPDATE pipa SET cor ='$cor',tamanho ='$tamanho',preco=$preco,foto='$fots' WHERE id = $idss";
$resultado = mysql_query($sql,$connect);

echo "<script language='javascript' type='text/javascript'>alert('DADOS alterados com sucesso!');window.location.href='http://projetodesafio.esy.es';</script>";
 
?>