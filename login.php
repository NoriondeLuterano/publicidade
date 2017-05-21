<html lang="pt-br"><head>
<meta charset="UTF-8">
<title>Lator</title>
<link href="css/style_login.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>


</head>
<body>
 <header>
   <a href="index.php">Lator</a>
   <form id="pesquisador" action="pesquisador.php" method="GET">
    <input placeholder="Encontrar lojas e serviços..." name="encontre" type="text">
    <button style="padding: 5px;">Encontrar</button>
   </form>
   <nav>
     <a href="como_funciona.html">Como funciona</a>
     <a href="contato.php">Contato</a>
     <a href="cadastro.php">Cadastro</a>
     <a href="login.php">Login</a>
   </nav>
 </header>


<div id="login">
  <form action="php/verificador.php" method="post">
    <span>Email:</span><br>
    <input name="emai" type="email"><br>
    <span>Senha:</span><br>
    <input name="pass" type="password"><br>
    <button>Enviar</button>
<button>Cadastrar-se</button>
  </form>
  
  <a href="#">Recuperar Conta</a>
</div>
<footer></footer>

</body><style type="text/css"></style></html>