<?php
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//include("funcoes/verifica_usuario_logado.php");
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
$data_hora_processamento = date("Y-m-d H:i:s"); 
$ComandoSQL = "";

$ComandoSQL = "";

if ($_POST['form_operacao'] == "inclusao_livros") {
	require_once '../funcoes/conexao.php';
	
	try{
// abre conexão com o banco
		
// recebe os dados do formulário
	//$codigo_livro = $_POST['codigo_livro'];
	$codigo = $_POST['codigo'];
	$nome_livro = $_POST['nome_livro'];
	$autor = $_POST['autor'];
	$tema = $_POST['tema'];
	$editora = $_POST['editora'];
	$ano_publicacao = $_POST['ano_publicacao'];
	$quantidade_livros = $_POST['quantidade_livros'];
	$edicao = $_POST['edicao'];
	
	$stmt = $conn->prepare('INSERT INTO tb_livros VALUES(:codigo,:nome_livro,:autor,:tema,:editora,:ano_publicacao,:quantidade_livros,:edicao)');
	$stmt->bindValue(':codigo',$codigo);
	$stmt->bindValue(':nome_livro',$nome_livro);
	$stmt->bindValue(':autor',$autor);
	$stmt->bindValue(':tema',$tema);
	$stmt->bindValue(':editora',$editora);
	$stmt->bindValue(':ano_publicacao',$ano_publicacao);
	$stmt->bindValue(':quantidade_livros',$quantidade_livros);
	$stmt->bindValue(':edicao',$edicao);
	$stmt->execute();
	}
	
	//$ComandoSQL = "select * from tb_livros where codigo = $codigo";
	catch (PDOException $e){
		//caso ocorra uma exceção, exibe na tela
		print "Erro!: " . $e->getMessage(). "\n";
		die();
	}
	  echo "<script>alert('Livro cadastrado com sucesso!');window.location='inclusao_livros.php';</script>";
	
	}		
	/*$num_rows = mysql_num_rows($result); 
	if ($num_rows>0)
	{
		echo "<script>alert('Livro já cadastrado!');
		window.location='inclusao_livros.php';</script>";
		exit;
	}
	$ComandoSQL = "insert into tb_livros (codigo, nome_livro, autor, tema,";
	$ComandoSQL .= " editora, ano_publicacao, quantidade_livros, edicao)";
	$ComandoSQL .= " values ($codigo, '$nome_livro' , '$autor' , '$tema',";
	$ComandoSQL .= " '$editora', $ano_publicacao, $quantidade_livros , '$edicao')";
	
	//echo $ComandoSQL;
	//exit;*/
	
	/*$query = "insert into livros (codigo,nome_livro,tema,editora,ano_publicacao,quantidade_livros,edicao,data_hora_processamento)
			values ('$codigo','$nome_livro','$tema','$editora','$ano_publicacao','$quantidade_livros','$edicao','$data_hora_processamento')";
	mysql_query($query,$vConexao);
	//mysql_query($ComandoSQL, $vConexao); 
	mysql_close($vConexao);
	echo "<script>alert('Livro cadastrado com sucesso!');window.location='inclusao_livros.php';</script>";*/

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
 <meta charset="utf-8"> 
<!--<title>CRUD Livros</title>-->
<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title> Ajax -  Cadastro de Livros</title>
	
</head>
<body>
<div class="container">

 <!-- conferir se existe imagem <div class="header"><img src="" width="" height="">-->
<div id="tudo">
<div id="conteudo">
	<div id="topo">
	  <h1>Livraria IF Sudeste MG</h1>
	</div>
	<div id="principal">
	  <h2>CADASTRO DE LIVROS</h2>
	  <h3>INCLUSAO DE LIVROS</h3>
	  <a href="index.php">Para efetuar Inclusao de Livros faca seu login!</a>
   </div>
    <div id="lista_livros">
	  <form method="POST" action="inclusao_livros.php" name="form_inclusao_livro">
		<table width="600">
		<tr>
		<td class="td_r">Codigo:</td>
			<td>
  			  <input name="codigo" type="text" id="codigo" size="1" maxlength="10" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Nome Livro:</td>
			<td>
			  <input name="nome_livro" type="text" id="nome_livro" size="30" maxlength="30" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Autor:</td>
			<td>
			  <input name="autor" type="text" id="autor" size="5" maxlength="80" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Tema:</td>
			<td>
			  <input name="tema" type="text" id="tema" size="10" maxlength="80" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Editora:</td>
			<td>
  			  <input name="editora" type="text" id="editora" size="2" maxlength="80" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Ano Publicacao:</td>
			<td>
  			  <input name="ano_publicacao" type="text" id="ano_publicacao" size="3" maxlength="10" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Quantidade de Livros:</td>
			<td>
  			  <input name="quantidade_livros" type="text" id="quantidade_livros" size="2" maxlength="100" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Edicao:</td>
			<td>
			  <input name="edicao" type="text" id="edicao" size="10" maxlength="10" required="required">*
			</td>
		  </tr>
		  <tr>
			<td colspan='2'class="td_c">* dados obrigatorios </td>
		  </tr>
		  <tr>
			<td colspan='2' class="td_c">
				<br /><input type="hidden" name="form_operacao" value="inclusao_livros">
				<input type="submit" name="Button" value="Inserir Livro">
			</td>
		  </tr>
		  </table>
	  </form> 

	  </div> <!-- Fim da div#principal --> 

	<div id="auxiliar">
	<h4>MENU</h4>
	<ul id="nav">
		<li class="um"><a href="index.php">Home</a></li>
		<li><a href="inclusao_livros.php">Inclusao de Livros</a></li>
		<li><a href="consulta_livros.php">Consulta (Alteracao e Exclusao)de Livros</a></li>
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