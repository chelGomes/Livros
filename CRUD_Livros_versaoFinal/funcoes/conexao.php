<?php
/*// abre conexão com o MySQL
$vConexao = mysql_connect('localhost', 'biblioteca1','livro123');
// seleciona o banco de dados ativo
mysql_select_db('bd_livros', $vConexao);*/

//instancia objeto PDO, conectando no mysql

$conn = new PDO('mysql:host=localhost;dbname=bd_livros','biblioteca1','livro123');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>