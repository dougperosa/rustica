<?php

require_once('phpmailer/class.phpmailer.php');

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;

//Indica a porta de conexão para a saída de e-mails
$mailer->Port = 25;

$mailer->CharSet = 'UTF-8';

//Endereço do Host do SMTP Locaweb
$mailer->Host = '192.168.1.5';

//define se haverá ou não autenticação no SMTP
$mailer->SMTPAuth = true;

//Login de autenticação do SMTP
$mailer->Username = 'rustica@unimed-erechim.com.br';

//Senha de autenticação do SMTP
$mailer->Password = 'TI@2015!Erechim';

//Nome que será exibido para o destinatário
$mailer->FromName = 'Rustica Unimed Erechim';

//Obrigatório ser a mesma caixa postal configurada no remetente do SMTP
$mailer->From = 'rustica@unimed-erechim.com.br';

//Destinatário
$mailer->AddAddress($email, 'Cadastro Rustica Unimed Erechim');

$mailer->Subject = 'Inscrição na Rustica Unimed Erechim realizado com sucesso!';
$mailer->Body = $_POST['nome'] . ', sua inscrição foi realizado com sucesso! Seu número de inscrição é ' . $numero .
        '. Para maiores informações, acesse os menus Programação e Regulamento do site www.unimed-erechim.com.br/corridasunimed.';

if (!$mailer->Send()) {
    echo "E-mail não enviado";
    echo "Erro: " . $mailer->ErrorInfo;
    exit;
}
?>