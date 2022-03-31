<form name="frm" method="POST" action"livroMD5.php">
	Senha: <input type="text" name="txtValor"/>
	<br/><br/>
	<input type="submit" value="Realizar Conversao para MD5">
</form>
<?php
	if(isset($_POST["txtValor"])){
		$string = $_POST["txtValor"];
		echo md5($string);
	}
?>