<?php
    $ids = $_POST['id'];
    $entrar = $_POST['entrar'];
    
   ////////////
   $servidor="mysql.hostinger.com.br";
   $nomedeusuario="u817064590_jos";
   $servidorsenha="josue.pedro";
//////////////////////////
$connect = @mysql_connect($servidor,$nomedeusuario,$servidorsenha);
$db = mysql_select_db('u817064590_mysql');
//////////////
        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM pipa WHERE id = '$ids'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('nao existe id');window.location.href='http://projetodesafio.esy.es/';</script>";
                    die();
                }else{
                    setcookie("id",$ids);
                    header("Location:update.html");
                }
        }
?>
