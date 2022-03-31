<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Crud Livros</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <!--<SCRIPT LANGUAGE="JavaScript" SRC="javascript/isEmpty.js"></script>
  <SCRIPT LANGUAGE="JavaScript">
  
  function checkForm(){
    if(isEmpty(document.form_acesso.login.value)){
       alert("Por favor preencha o login do usuário!");
       document.form_acesso.login.focus();
       return false;
    }
    if(isEmpty(document.form_acesso.senha.value)){
       alert("Por favor preencha a senha de acesso!");
       document.form_acesso.senha.focus();
       return false;
    }
    document.form_acesso.submit();
  }
  </script>-->
</head>
<body>
<!--<form name="form_acesso" method="post" action="login.php">
  <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif">Livraria IF Sudeste MG</font></p>
  <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif">LP II - PHP - Area Restrita</font></p>
  <table width="350" border="1" align="center" cellpadding="2" cellspacing="1" bordercolor="#003300">
    <tr>
      <td width="35%" align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Codigo Usuario </font>: 
        <input name="login" type="text" id="login" size="15" maxlength="15"></td>
    </tr>
    <tr>
      <td align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
      <input name="senha" type="password"  id="senha" size="15" maxlength="15">
         </tr>
  </table>
   <div align="center"><br>
     <input type="button" name="Button" value="Entrar" onClick="checkForm()">
</div>
</form>-->
<div id="tudo">
	<div id="topo">
		<h1>Livraria</h1>
	</div>
	<div id="nav">
		<a href="index.php">Home</a>
	</div>
<form name="form_acesso" method="post" action="login.php">
			
  <table>
    <tr>
      <td width="35%" align="center"> Usu&aacute;rio: 
        <input name="login" type="text" id="login" size="15" maxlength="15" required="required"></td>
    </tr>
    <tr>
      <td  align="center">Senha:
      <input name="senha" type="password"  id="senha" size="15" maxlength="15" required="required">
      </td>
    </tr>
  </table>
   <div align="center"><br>
     <input type="submit" name="Button" value="Entrar">
	</div>
	</div>
</body>
</html>