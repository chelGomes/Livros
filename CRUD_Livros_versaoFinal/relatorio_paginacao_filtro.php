<?php
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//
// Define as variáveis locais 
//
$codigo = "";
$nome_livro = "";
$autor = "";
$tema = "";
$editora = "";
$ano_publicacao = 0;// fazer uma inicializaçao
$quantidade_livros = 0;// fazer uma inicializaçao
$edicao = 0;
$ComandoSQL = "";

$filtro = '';
$maximo = 0;
$pagina = 0;
$inicio = 0;

// abre conexão com o banco
require_once '../funcoes/conexao.php';

if (isset($_REQUEST['filtro'])) {
	$filtro = $_REQUEST['filtro'];
 }
 
// Maximo de registros por pagina
	$maximo = 5;
	
// Declaração da pagina inicial
	$pagina = intval(($_GET["pagina"]));
	if($pagina == "") {
    	$pagina = "1";
	}
 
// Calculando o registro inicial
	$inicio = $pagina - 1;
	$inicio = $maximo * $inicio;
// Conta os resultados no total da query
//
    $ComandoSQL = "select * from tb_livros where nome_livro like '$filtro%'";
	$result= $conn->query("SELECT * FROM tb_livros");
	//$result = mysql_query($ComandoSQL, $vConexao);
	$total = $conn->query("SELECT * FROM tb_livros");
	//$total = mysql_num_rows($result);
	
//echo $ComandoSQL;
//exit;
	$ComandoSQL = "select * from tb_livros where nome_livro like '$filtro%' 
	LIMIT $inicio, $maximo";
	$result= $conn->query("SELECT * FROM tb_livros");
	//$result = mysql_query($ComandoSQL, $vConexao);
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
	  <h1>Livraria IF Sudeste MG</h1>
	</div>
	<div id="principal">
	  <h2>CADASTRO DE LIVROS</h2>
	  <h3>CONSULTA DE LIVROS</h3>
<?php
	if($result)
	//if (mysql_num_rows($result)==0)
	{
              echo "<p>Nenhum livro foi encontrado!</p>\n";
	}
	else
	{
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
	  echo "<b>Quantidade<br />Livro</b>\n";
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
		echo "<tr><td colspan='9' height='3' bgcolor='#F0F0F0'></td></tr>\n";
	 }
	}	
	//mysql_close($vConexao);
	echo "</table>";
	$conn = null;
		$menos = $pagina - 1;
	$mais = $pagina + 1;
 	$pgs = ceil($total / $maximo);
	if($pgs > 1 ) {
 			echo "<br clear='all'/><br /><br />";
    // Mostragem de pagina
   		if($menos > 0) {
			echo "<a href='relatorio_paginacao_filtro.php?pagina=$menos&filtro=$filtro'>anterior</a>&nbsp; ";
   		}

    // Listando as paginas
		for($i=1;$i <= $pgs;$i++) {
			if($i != $pagina) {
				echo "<a href='relatorio_paginacao_filtro.php?pagina=$i&filtro=$filtro'>$i</a> | ";
			} else {
				echo " <strong><font color='#000'>$i</font></strong> | ";
			}
		}
 
		if($mais <= $pgs) {
			echo "<a href='relatorio_paginacao_filtro.php?pagina=$mais&filtro=$filtro'>Pr&oacute;xima</a>";
		}
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
		<li><a href="consulta_livros.php">Consulta (Alteracao e Exclusao)de Livros </a></li>
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