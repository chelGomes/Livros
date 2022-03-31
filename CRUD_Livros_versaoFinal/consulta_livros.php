<?php
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
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
	  <h1 id="livraria">Livraria IF Sudeste MG</h1>
	</div>
	<div id="principal">
	  <h2 id="cadastro">CADASTRO DE LIVROS</h2>
	  <h3 id="consulta">CONSULTA DE LIVROS</h3>
<?php
try{
	// abre conexão com o banco
	require_once '../funcoes/conexao.php';
	//executa uma instrução SQL de consulta
	$result= $conn->query("SELECT * FROM tb_livros");
	if($result){
	  echo "<table>";	
	  echo "<tr>\n";
	  echo "<td>\n";
	  echo "<b>Codigo</b>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Nome<br /> Livro</b>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Autor<br/>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Tema<br/>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Editora</b>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Ano<br /> Publicacao</b>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Quantidade<br /> Livro</b>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Edicao</b>\n";
	  echo "</td>\n";
	  echo "<td>\n";
	  echo "<b>Operacao</b>\n";
	  echo "</td>\n";
	  echo "</tr>\n";
	  echo "<tr><td colspan='9' height='5' bgcolor='#5FB404'></td></tr>\n";
	  //while ($row = mysql_fetch_assoc($result))
		while ($row = $result->fetch(PDO::FETCH_OBJ))  
	  {
		echo "<tr>\n";
		echo "<td>\n";
		//echo $row['codigo'] . "&nbsp;\n";
		echo $row->codigo . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		//echo $row['nome_livro'] . "&nbsp;\n";
		echo $row->nome_livro . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		//echo $row['tema'] . "&nbsp;\n";
		echo $row->tema . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		//echo $row['autor'] . "&nbsp;\n";
		echo $row->autor . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		//echo $row['editora'] . "&nbsp;\n";
		echo $row->editora . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		//echo $row['ano_publicacao'] . "&nbsp;\n";
		echo $row->ano_publicacao . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		//echo $row['quantidade_livros'] . "&nbsp;\n";
		echo $row->quantidade_livros . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		//echo $row['edicao'] . "&nbsp;\n";
		echo $row->edicao . "&nbsp;\n";
		echo "</td>\n";
		echo "<td>\n";
		echo "<a href='alteracao_exclusao_livros.php?codigo=".$row->codigo ."'>";
		//echo "<a href='alteracao_exclusao_livros.php?codigo=".$row['codigo'] . "'>";
		echo "<img src='imagens/b_edit.png' border='0'><img src='imagens/b_drop.png' border='0'></a>&nbsp;\n";
		echo "</td>\n";
		echo "</tr>\n";
		echo "<tr><td colspan='9' height='3' bgcolor='#F0F0F0'></td></tr>\n";
	 }
	}	
	 else{
		echo "<p>Nenhum livro foi encontrado!</p>";
	}
	echo "</table>";
	//fecha a conexao
	$conn = null;
	}
	catch(PDOException $e){
		print "Erro!: " .$e->getMessage()."<br/>";
		die();
 }
	?>
	</div> <!-- Fim da div#principal -->

	<div id="auxiliar">
	<h4>MENU</h4>
	<ul id="nav">
		<li class="um"><a href="index.php">Home</a></li>
		<li><a href="inclusao_livros.php">Inclusao de Livros</a></li>
		<li><a href="consulta_livros.php">Consulta (Alteracao e Exclusao) de Livros</a></li>
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