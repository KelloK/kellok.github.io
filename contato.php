<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="principal">
    
    <header id="cabecalho">
   
    <?php 
			include("topo.php");
		?>
	</header>
	<nav id="menu">
		<?php
			include("menu1.php");			
		?>
    </nav>
        	
	<section id="corpo" style="margin-left: 350px;" >
    
    <h1 style="text-align:left; margin-left: 50px;">Fale Conosco</style></h1>
    
    <br>
    
	<form id="form1" name="form1" method="post" action="enviarcontato.php">
    <p>
    	<label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" />
    </p>
    <p>
    	<label for="email">E-mail:</label>
        <input type="text" name="email" id="email" />
    </p>
    <p>
    	<label for="assunto">Assunto</label>
        <select name="assunto" id="assunto">
        	<option>Sugestão</option>
            <option>Reclamação</option>
            <option>Elogios</option>
        </select>
    </p>
    <p>
    	<label for="comentario">Comentário</label>
        <br>
        <textarea name="comentario" id="comentario" cols="45" rows="5"></textarea>
    </p>
    <p>
    	<input type="submit" name="enviar" id="enviar" value="enviar">
    </p>
    </form>
	</section>
    </style>
    	<?php
			include("rodape.php");
		?>
</body>
</html>