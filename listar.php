<?php
$cor=$_POST['c'];
$preco=$_POST['p'];
$tamanho=$_POST['languagem'];
$foto=$_POST['f'];
/////////////////////////
$servidor="mysql.hostinger.com.br";
$nomedeusuario="u817064590_jos";
$servidorsenha="josue.pedro";
//////////////////////////
$connect = @mysql_connect($servidor,$nomedeusuario,$servidorsenha);
$db = mysql_select_db('u817064590_mysql');
//////////////
$sql="select * from pipa";
$resultado = mysql_query($sql,$connect);
?>
<html>
<head>
</head>

<body>
     <table border="solid 3px #000">
           <tr>
              <td><b>id</b></td>
              <td><b>cor</b></td>
              <td><b>tamanho</b></td>
              <td><b>preço</b></td>
              <td><b>foto</b></td>
           </tr>
           <?php while($dados=mysql_fetch_array($resultado)){ ?>
           <tr>
              <td><?php echo $dados['id']; ?></td>
              <td><?php echo $dados['cor']; ?></td>
              <td><?php echo $dados['tamanho']; ?></td>
              <td><?php echo $dados['preco']; ?></td>
              <td><?php echo $dados['foto']; ?></td>
           </tr>
           <?php   }?>
     </table>
</body>
</html>