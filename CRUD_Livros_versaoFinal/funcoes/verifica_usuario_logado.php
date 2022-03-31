<?php
#
// Iniciando a session
#
@session_start();
//if(isset($_SESSION['login']) and isset($_SESSION['senha']))
if(isset($_SESSION['michel']) and isset($_SESSION['12345']))	{
	// se existe as sessões coloca os valores em uma varivel
	
	$login_usuario = $_SESSION['login'];
	$senha_usuario = $_SESSION['senha'];
	echo "Usuario logado: " .  $_SESSION["login"];
	header("Location:falha_login.php");
} else {
	header("Location: livro.php");
	exit;
}
?>