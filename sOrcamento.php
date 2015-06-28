<?php

	// Recupera os dados dos campos
	$nome		= $_POST['nome'];
	$email		= $_POST['email'];	 
	$msg		= $_POST['mensagem'];	 
	$ass	= $_POST['assunto'];	 		

//$to = 'contato@blserv.com.br';
$to = 'contato@infocolumbia.com.br';
$subject = "Solicitacao de Orcamento";
$mensagem = "<b>Nome: </b>".$nome."</br>".
			"<b>Email: </b>".$email."</br>".
			"<b>Assunto: </b>".$ass."</br>".			
			"<b>Mensagem: </b>".$msg."</br>";
						
$message = $mensagem;
$from = "contato@infocolumbia.com.br";
$headers = "From:" . $from. "\r\nContent-Type: text/html";
mail($to,$subject,$message,$headers);



		echo "<script type='text/javascript'>";

        echo "alert('Solicitacao de Orcamento enviada com sucesso.');";

		echo "</script>";

echo '<script type="text/javascript">
<!--
window.location = "pOrcamento.php"
//-->
 </script>';



	
?>