<html>
<head><title>teste</title></head>
<body>

<?php
  $host = 'localhost:3307';
  $database ='biblioteca';
  $usuario ='root';
  $senha = 'usbw';

 $conexao = mysql_connect ($host, $usuario, $senha) or die ("Erro ao conectar com o servidor");

if ($sql_banco = mysql_select_db($database, $conexao)){
  echo "Conexão com o banco realizada com sucesso <br/>"; 
  
   $teste = mysql_query("select * from login");
	while ($row = mysql_fetch_array ($teste)){
		echo $row['usuarioLogin']."<br/>" ;
		echo $row['senhaLogin']."<br/>";
	}
	
	mysql_close($conexao);
   
	
  } else {
  echo "Erro ao conectar no bando de dados";
  
}
 
mysql_set_charset('UTF8');


?>
</body>
</html>