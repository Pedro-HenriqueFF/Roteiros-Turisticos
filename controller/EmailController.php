<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once(PATH_SOURCE . "Exception.php");
    require_once(PATH_SOURCE . "PHPMailer.php");
    require_once(PATH_SOURCE . "SMTP.php");
    require_once(PATH_MODEL . "dbModel.php");

    if (!isset($_SESSION)){
        session_start();
    }

    class Email{
        public function enviar($email, $mensagem){
            // Instância da classe
            $mail = new PHPMailer(true);
            try
            {
                // Configurações do servidor
                $mail->isSMTP();        //Devine o uso de SMTP no envio
                $mail->SMTPAuth = true; //Habilita a autenticação SMTP
                $mail->CharSet = 'UTF-8';
                $mail->Username   = 'futurismo.titantech@gmail.com';
                $mail->Password   = 'senha';
                // Criptografia do envio SSL também é aceito
                $mail->SMTPSecure = 'tls';
                // Informações específicadas pelo Google
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                // Define o remetente
                $mail->setFrom('futurismo.titantech@gmail.com', 'Futurismo');
                // Define o destinatário
                $mail->addAddress($email, $email);
                // Conteúdo da mensagem
                $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
                $mail->Subject = 'Nosso catálogo foi atualizado para você!';
                $mail->Body    = $mensagem;
                $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
                // Enviar
                $mail->send();
                echo 'A mensagem foi enviada!';
            }
            catch (Exception $e)
            {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            }
        }
?>