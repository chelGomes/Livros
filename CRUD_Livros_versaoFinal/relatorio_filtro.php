<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD Livros</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<div id="tudo">
<div id="conteudo">
	<div id="topo">
	  <h1>Livraria IF Sudeste MG</h1>
	</div>
	<div id="principal">
	  <h2>Linguagem de Programação II</h2>
	  <h3>Livraria IF Sudeste MG</h3>
		<form name="form_acesso" method="post" action="relatorio_paginacao_filtro.php">
			<table width="600">
			<tr>
			  <td>Titulo Livros: 
				<input name="filtro" type="text" id="filtro" size="30" maxlength="30"></td>
			</tr>
		  </table>
		   <div align="center"><br>
			 <input type="submit" name="submit" value="Pesquisar">
			</div>
		</form>	
	</div> <!-- Fim da div#principal -->

	<div id="auxiliar">
	<h4>MENU</h4>
	<ul id="nav">
		<li class="um"><a href="index.php">Home</a></li>
		<li><a href="inclusao_livros.php">Inclusao de Livros</a></li>
		<li><a href="consulta_livros.php">Consulta (Alteracao e Exclusao)</a></li>
		<li><a href="relatorio_filtro.php">Relatorio</a></li>
	</ul>

	</div> <!-- Fim da div#auxiliar -->

	<div class="clear"></div>

</div> <!-- Fim da div#conteudo -->
<div id="rodape">
  <p>Desenvolvido por Suelen Souza e Michel Andrade</p>
</div>
</div> <!-- Fim da div#tudo -->
</body>
</html>
