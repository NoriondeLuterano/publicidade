<html lang="pt-br"><head>
<meta charset="UTF-8">
<title>Lator</title>
<link href="css/style_assistente_pesquisa.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>


</head>
<body>
 <header>
   <a href="index.php">Lator</a>
   <form id="pesquisador" action="pesquisador.php" method="GET">
    <input name="encontre" placeholder="Procurar" type="text"><select name="tipo">
      <option>Produto</option>
      <option>Serviço</option>
      <option>Fornecedores</option>
      <option>localidade da empresa</option>
      <option>informação da empresa</option>
    </select><button style="padding: 5px;">Encontrar</button>
</form>
   <nav>
     <a href="#">Como funciona</a>
     <a href="#">Contato</a>
     <a href="#">Cadastro</a>
     <a href="#">Login</a>
   </nav>
 </header>

<div id="filtro_pesquisa">
  <h2>Filtro</h2>
 <form action="php/filtro.php" method="post">
  <input nome="categoria" style="display: none;" type="text">
  <input nome="localidade" placeholder="eu quero..." type="text">
  <input nome="localidade" placeholder="localidade" type="text">
  <br>
  <select name="categoria">
      <option>Categoria</option>
      <option>Produto</option>
      <option>Serviço</option>
      <option>Fornecedores</option>
      <option>localidade de empresa</option>
      <option>informação de empresa</option>
    </select>
  
  <input nome="localidade" placeholder="localidade" type="text">

  <input nome="caracteristicas" placeholder="características" type="text">

  <input nome="loja" placeholder="pesquisar por empresa/loja" type="text">

  <br>
  <button>Enviar</button>
</form>

</div>

<div id="resultado_pesquisa">
  <div class="produtos">
  <img src="imgs/produtos/pote-ração.jpg">

<span class="nome_produto">Pote de Ração</span>
<div class="container_descricao">
  <span class="descricao">Descrição</span>
  <p> 
  texto texto texto texto texto texto texto texto texto texto texto
  texto texto texto texto texto texto texto texto texto texto texto
  texto texto texto texto texto texto texto texto texto texto texto
  texto texto texto texto texto texto texto texto texto texto texto
  texto texto texto texto texto texto texto texto texto texto texto
</p>
</div>
 
  <span class="precos">R$ 100,50</span>
  <span class="nome_loja">Loja:</span>
  <span>Lojas americanas</span>
</div>
</div>
<footer></footer>

<style type="text/css"></style><style type="text/css"></style></body></html>