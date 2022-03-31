<?php
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include("funcoes/verifica_usuario_logado.php");
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

// abre conexão com o banco
require_once '../funcoes/conexao.php';
$codigo = $_GET['codigo'];
// abre conexão com o banco
switch ($_POST['form_operacao']){
	case "alteracao":
	try{
		
		$codigo = $_POST['codigo'];
		$nome_livro = $_POST['nome_livro'];
		$autor = $_POST['autor'];
		$tema = $_POST['tema'];
		$editora = $_POST['editora'];
		$ano_publicacao = $_POST['ano_publicacao'];
		$quantidade_livros = $_POST['quantidade_livros'];
		$edicao = $_POST['edicao'];
		
		$stmt = $conn->prepare('UPDATE tb_livros SET nome_livro =:nome_livro, autor =:autor, tema =:tema, editora =:editora, ano_publicacao =:ano_publicacao, 
								quantidade_livros =:quantidade_livros, edicao =:edicao WHERE codigo =:codigo');
			
			$stml->bindValue(':nome_livro', $nome_livro);
			$stml->bindValue(':autor', $autor);
			$stml->bindValue(':tema', $tema);
			$stml->bindValue(':editora', $editora);
			$stml->bindValue(':ano_publicacao', $ano_publicacao);
			$stml->bindValue(':quantidade_livros',$quantidade_livros);
			$stml->bindValue(':edicao',$edicao);
			$stml->execute();
					 
		 echo "<script>alert('Livro alterado com sucesso!');window.location='consulta_livros.php';</script>";
		 exit;
		 break;
	}
	catch(PDOException $e){
		//caso ocorra uma exceção, exibe na tela
		print "Erro!: " . $e->getMessage(). "\n";
		die();
	}

	case "exclusao":
	try{
		//recebe os dados formulario
	$codigo = $_POST['codigo'];
	$stmt = $conn->prepare('DELETE from tb_livros WHERE codigo =:codigo');
	$stmt->bindValue(':codigo',$codigo);
	$stmt->execute();
	  
	echo "<script>alert('Livro Excluído com sucesso!');window.location='consulta_livros.php';</script>";
	
}catch(PDOException $e){
		//caso ocorra uma exceção, exibe na tela
		print "Erro!: " . $e->getMessage(). "\n";
		die();
	}
}
//executa uma instrucao SQL de consulta
$ComandoSQL = "select * from tb_livros where codigo = '" . $codigo . "'";
$result = $conn->query($ComandoSQL);
if (!$result){
	echo "<script>alert('Livro não encontrado!');window.location='consulta_livros.php';</script>";
	exit;
}

$row = $result->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD Livros</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script LANGUAGE="JavaScript">
  function define_operacao(operacao){
    if (operacao == "alt") {
       document.form_alteracao_exclusao_livros.form_operacao.value = "alteracao";
    }
    if (operacao == "exc") {
       document.form_alteracao_exclusao_livros.form_operacao.value = "exclusao";
    }
    document.form_alteracao_exclusao_livros.submit();
  }
  </script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
	<div id="topo">
	  <h1>Livraria IF Sudeste MG</h1>
	</div>
	<div id="principal">
	  <a href="livro.php">Para efetuar ALteracao ou Exclusao de Livros faca seu login!</a>
	  <h2>CADASTRO DE LIVROS</h2>
	  <h3>ALTERACAO E EXCLUSAO DE LIVROS</h3>
	  <form method="POST" action="alteracao_exclusao_livros.php" name="form_alteracao_exclusao_livros">
		<table width="600">
		<tr>
			<td class="td_r">Codigo:</td>
			<td>
  			  <input name="codigo" type="text" id="codigo" size="1" maxlength="10" value=" <?php echo $row->codigo ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Nome Livro:</td>
			<td>
			  <input name="nome_livro" type="text" id="nome_livro" size="30" maxlength="30"value=" <?php echo $row->nome_livro ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Autor:</td>
			<td>
			  <input name="autor" type="text" id="autor" size="3" maxlength="3"value=" <?php echo $row->autor ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Tema:</td>
			<td>
			  <input name="tema" type="text" id="tema" size="10" maxlength="10"value="<?php echo $row->tema ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Editora:</td>
			<td>
  			  <input name="editora" type="text" id="editora" size="20" maxlength="20" value=" <?php echo $row->editora ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Ano Publicacao:</td>
			<td>
  			  <input name="ano_publicacao" type="text" id="ano_publicacao" size="3" maxlength="3" value=" <?php echo $row->ano_publicacao ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Quantidade de Livros:</td>
			<td>
  			  <input name="quantidade_livros" type="text" id="quantidade_livros" size="2" maxlength="2" value="<?php echo $row->quantidade_livros ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Edicao:</td>
			<td>
			  <input name="edicao" type="text" id="edicao" size="10" maxlength="10" value=" <?php echo $row->edicao ?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td colspan='2'class="td_c">* dados obrigatórios </td>
		  </tr>
		  <tr>
			<td colspan='2' class="td_c">
			  <input type="hidden" name="form_operacao" value="consulta">
			  <input name="alterar" type="button" value="Alterar" onClick="define_operacao('alt');">
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
			  <input name="excluir" type="button" value="Excluir" onClick="define_operacao('exc');">
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
		<li><a href="consulta_livros.php">Consulta (Alteracao e Exclusao)</a></li>
		<li><a href="relatorio_filtro.php">Relatorio</a></li>
	</ul>

	</div> <!-- Fim da div#auxiliar -->

	<div class="clear"></div>

</div> <!-- Fim da div#conteudo -->
<div id="rodape">
 <p> Desenvolvido por Suelen Souza e Michel Andrade </p>
</div>
</div> <!-- Fim da div#tudo -->
</body>
</html>