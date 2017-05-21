<html lang="pt-br"><head>
<meta charset="UTF-8">
<title>Lator</title>
<link href="css/style_home.css" rel="stylesheet">
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

 <div id="banner">
  <img src="imgs/home/homer2.jpg" style="height: 100%;width: 100%;">
 </div>


 <div id="tela_logar_home">
  <form action="verificador.php" method="POST">
    <span>Email:</span>
    <br>
    <input name="email" type="text">
    <br>
    <span>Senha:</span>
    <br>
    <input name="pass" type="password">
    <button>Enviar</button>
    <button>Cadastrar-se</button>
  </form>
   
 </div>

<p>encontre aqui, os serviços e produtos que você precisa perto de você</p>

<section id="informacao_superficial">
  <article>
    <div class="explicacao">
     <img src="imgs/home/explicacao_banner_2.jpg">
</div>
<h5>Dê um busca</h5>
<p>
Não fique perdido, encontre qualquer estabelecimento que você precisa em qualquer lugar e hora.
</p>
  </article>
  
  <article>
    <div class="explicacao">
     <img src="imgs/home/explicacao_banner_1.jpg">
    </div>
  
  <h5>Produtos e serviços</h5>
  <p>A lator oferece vários produtos e serviços de empresas perto de você ou onde você precisar.</p>
  </article>
  
  <article>
    <div class="explicacao">
     <img src="imgs/home/explicacao_banner_3.jpg">
    </div>
  <h5>Empresas</h5>
  <p>Precisando entrar em contato com alguma empresa, você pode buscar localidades,telefones, horário de atendimento e outras informações que necessitar.</p>
  </article>
</section>

 
<footer></footer>
</body>
</html>