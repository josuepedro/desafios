<?php
$cor=$_POST['c'];
$preco=$_POST['p'];
$tamanho=$_POST['languagem'];
$fots=$_POST['arquivo'];
/////////////////////////
$servidor="mysql.hostinger.com.br";
$nomedeusuario="u817064590_jos";
$servidorsenha="josue.pedro";
//////////////////////////
$connect = @mysql_connect($servidor,$nomedeusuario,$servidorsenha);
$db = mysql_select_db('u817064590_mysql');
//////////////////////////
if($cor==""&$tamanho==""&$preco==0||$preco<0&$foto==""){
echo "<script language='javascript' type='text/javascript'>alert('preencher todos os campos!!!');window.location.href='http://projetodesafio.esy.es';</script>";
}else{
$sql = "INSERT INTO pipa(cor,tamanho,preco,foto)
				VALUES('$cor','$tamanho',$preco,'$fots')";
	        $resultado = mysql_query($sql,$connect);
                echo $resultado;
	        if ($resultado){
                echo "<script language='javascript' type='text/javascript'>alert('pipa inserida com sucesso!!!');window.location.href='http://projetodesafio.esy.es';</script>";
                } else {
                echo "<script language='javascript' type='text/javascript'>alert('não foi possivel inserir pipo...');window.location.href='http://projetodesafio.esy.es';</script>";
		
}
}
?>