<?php
function enviar_email($email, $nome){
require_once('class.phpmailer.php'); //chama a classe de onde você a colocou.
require_once('class.pop3.php'); //chama a classe de onde você a colocou.
require_once('class.smtp.php'); //chama a classe de onde você a colocou.

$mail = new PHPMailer\PHPMailer\PHPMailer(); // instancia a classe PHPMailer

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'iftech.2019.web@gmail.com'; // usuario gmail.   
$mail->Password = 'jairoesamuel'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ver enviado.
$mail->From = $email; 
$mail->FromName = $nome; 

$mail->addAddress($email); // email do destinatario.

$mail->Subject = "Aqui vai o assunto do email, pode vim atraves de variavel."; 
$mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";

if(!$mail->Send()){}

//            $to = $email;
//	    $subject = "Confimação de cadastro para $nome";
//	    $header = "IFTech: Confimação de cadastro";
//	    $message = "Ola $nome. Seu cadastro foi efetuado com sucesso, agora podera aproveitar todas as ofertas de nosso site.";
//
//	        $sentmail = mail($to,$subject,$message,$header);
//
//	        if($sentmail)
//	        {
//	            echo "
//	            <script language='JavaScript'>
//	            window.alert('Foi enviado um e-mail de confirmação para o seu endereço de e-mail. Clique para voltar à página inicial.')
//	            window.location.href='index.php';
//	            </script>
//	            ";
//	        }
//	        else
//	        {
//	            echo "
//	            <script language='JavaScript'>
//	            window.alert('Não foi possível enviar um e-mail de confirmação para o seu endereço de e-mail. Clique para voltar à página inicial.')
//	            window.location.href='index.php';
//	            </script>
//	            ";
//	        }
//}
}