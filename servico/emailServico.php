<?php
function enviar_email($email, $nome){
	 
            $to = $email;
	    $subject = "Confimação de cadastro para $nome";
	    $header = "IFTech: Confimação de cadastro";
	    $message = "Ola $nome. Seu cadastro foi efetuado com sucesso, agora podera aproveitar todas as ofertas de nosso site.";

	        $sentmail = mail($to,$subject,$message,$header);

	        if($sentmail)
	        {
	            echo "
	            <script language='JavaScript'>
	            window.alert('Foi enviado um e-mail de confirmação para o seu endereço de e-mail. Clique para voltar à página inicial.')
	            window.location.href='index.php';
	            </script>
	            ";
	        }
	        else
	        {
	            echo "
	            <script language='JavaScript'>
	            window.alert('Não foi possível enviar um e-mail de confirmação para o seu endereço de e-mail. Clique para voltar à página inicial.')
	            window.location.href='index.php';
	            </script>
	            ";
	        }
}
?>