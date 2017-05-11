<?php
  $host = 'http://localhost:8080/phpmyadmin/';
  $database ='teste';
  $usuario ='root';
  $senha = 'usbw';

 $conexao = mysql_connect ($host, $usuario, $senha) or die ("Erro ao conectar com o servidor");

if ($sql_banco = mysql_select_db($database, $conexao)){
  echo "Conexão com o banco realizada com sucesso";
    
} else {
  echo "Erro ao conectar no bando de dados";
  
}

mysql_set_charset('UTF8');


?>