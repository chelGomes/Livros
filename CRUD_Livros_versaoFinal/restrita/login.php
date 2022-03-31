<title>Login</title>
<?php
// recebe os dados do formulário
	
require_once '../funcao/conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$ComandoSQL= "select * from tb_usuario where  login = '" . $login . "' and senha = '" . md5($senha) . "'";
$result= $conn->query($ComandoSQL);
//
if ($result->rowCount()>0) {
	@session_start();

	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	//$_SESSION['michel'] = $login;
	//$_SESSION['12345'] = $senha;
	header('Location: index.php'); 
}
else
{
	// inicializa a sessão
	@session_start();
	// limpa a sessão
	$_SESSION = array(); // colocando a session com um array vazio faz com ela
					 // fique vazia sem nenhuma variavel nela, liberando o espaço
					 
	// destroy a sessão
	session_destroy();

	// redireciona o link para a página de aviso de erro ao autenticar usuário
		header("Location: falha_login.php");
}

?>