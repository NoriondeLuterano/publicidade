<html lang="pt-br"><head>
<meta charset="UTF-8">
<title>Lator</title>
<link href="css/style_contato.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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

 <div id="contato">
  <form action="contato.php" method="post">
  <fieldset>
  <legend>Contato:</legend>
    <input placeholder="seu nome" type="text">
    <input placeholder="sua profissão" type="text"><br>
    <select>
      <option>sugestão</option>
      <option>critica</option>
      <option>elogio</option>
    </select><br>
    <input placeholder="seu email" type="text">
    <input placeholder="assunto" type="text"><br>
    <textarea name="corpo"></textarea><br>
    <button style="font-size: 20px;">enviar</button>
    </fieldset>
  </form>
 </div>


 





 
<footer></footer>
<style type="text/css"></style></body><style type="text/css"></style></html>