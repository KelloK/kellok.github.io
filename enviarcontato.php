<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>
	<?php 
		//Recebendo os dados do formulário.
		$nome= $_POST["nome"];
		$email = $_POST["email"];
		$assunto = $_POST["assunto"];
		$mensagem = $_POST["comentario"];
		
		$conteudo = "Nome: $nome <br>E-mail: $email<br> Assunto: $assunto<br> Mensagem: $mensagem";
		$seuemail = "alexplat11@hotmail.com";
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charse=iso-8859-1\r\n";
		$headers .= "From: $email \r\n";
		$assunto = "Teste - Contato do site";
		
		$enviar = mail($seuemail, $assunto, $conteudo, $headers);
		
		if($enviar){
		echo "<script type='text/javascript'>
		alert('Contato Enviado com Sucesso!');
		window.location.href='contato.html';
		</script>";}
		else 
		{
			echo "<script type='text/javascript'>
			alert('Ocorreu algum erro ao enviar o formulário');
			</script>";	
		}				
		?>
</body>
</html>