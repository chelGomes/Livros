<?php
// Verifica se o usuário está logado

include("funcoes/verifica_usuario_logado.php");
//
?>
<html>
<head>
	<title> Livraria IF Sudeste MG </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</style>
</head>
<body>

<div>
  <h1>Livraria IF Sudeste MG</h1>
  <h2>CRUD Livros</h2>
  <h3>Seja bem-vindo area restrita!</h3>
  
  <table width="445" border="1" align="center" cellpadding="2" cellspacing="1" bordercolor="#4A7742">
    <tr>
      <td width="28%" height="22" align="right" nowrap><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Usuarios:</font></td>
      <td width="72%" bgcolor="#EDF3EE"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Inclusao - Consulta (Altera&ccedil;&atilde;o e Exclus&atilde;o)</font></td>
    </tr>
    <tr>
      <td colspan="2" align="right" nowrap><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="logout.php">Logout</a></font></div></td>
    </tr>
  </table>
  
</div>
<div id="auxiliar">
		
			<h4>MENU</h4>
			<div id="nav">
				<li class="um"><a href="livro.php">Home</a></li>
				<li><a href="inclusao_livros.php">Inclusao de Livros</a></li>
				<li><a href="consulta_livros.php">Consulta (Alteracao e Exclusao) de Livros</a></li>
				<a href="logout.php">Logout</a>
			</div>

</div> <!-- Fim da div#auxiliar -->

</body>
</html>