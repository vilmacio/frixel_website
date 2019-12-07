<?php

$nome = addcslashes($_POST['nome'],'');
$estado = addcslashes($_POST['estado'],'');
$telefone = addcslashes($_POST['telefone'],'');
$email = addcslashes($_POST['email'],'');
$experiencia = addcslashes($_POST['experiencia'],'');
$motivacao = addcslashes($_POST['motivacao'],'');

$to = "contato@frixel.com.br";
$subject = "Pedido para ser colaborador";
$body = "Nome: ".$nome."\n".
        "Estado: ".$estado."\n".
        "Telefone: ".$telefone."\n".
        "E-mail: ".$email."\n".
        "Experiência: ".$experiencia."\n".
        "Motivação: ".$motivacao."\n";
$header = "From:host@frixel.com.br"."\n".
            "Reply-To:".$email."\n".
            "X=Mailer:PHP/".phpversion();

mail($to,$subject,$body,$header);

$msg = '
<html>
    <body>
            <div style="margin: 12px;">
                    <div style="margin-top: 52px; margin-bottom: 22px;">
                        <img src="https://www.frixel.com.br/img/logo/frixel-dark.png" style="width: 100px" alt="frixel">
                        <p style="font-family: Calibri, sans-serif; float: right; margin: auto;">Email service</p>
                    </div>
                    <div style="border: solid 1px #9c9c9c; border-radius: 15px; padding: 22px;">
                        <h1 style="font-size: 17pt; font-weight: bolder; text-align: center; color: #545454; margin-bottom: 2rem; font-family: Calibri, sans-serif;">Recebemos sua solicitação!</h1>
                        <p style="font-size: 11pt; color: #000000; font-family: Calibri, sans-serif;">
                       Olá!
                       <br><br>
                       Sua solicitação para ser um colaborador Frixel já está em análise e por enquanto basta aguardar. Enviaremos
                       uma resposta em até 1 dia útil.
                       <br><br>
                       Boa Sorte!
                       <br>
                </p>
            </div>
        
            <footer style="margin-top: 29px;">
                    <p style="font-family: Calibri, sans-serif; font-size: 7pt; color:#757575; text-align: center;">Enviamos este e-mail porquê você cadastrou-se no processo de seleção para ser colaborador(a) da Frixel. Caso tenha recebido este e-mail por engano, <a href="https://www.frixel.com.br/legal/email-cancel/send-cancel-email-user.html">clique aqui</a>. Saiba mais lendo nossa <a href="https://www.frixel.com.br/legal/privacidade/">política de privacidade</a>.</a></p>
                    <p style="font-family: Calibri, sans-serif; font-size: 7pt; color:#757575; text-align: center;">Este e-mail é um serviço Frixel - <a href="https://www.frixel.com.br">Acessar o site.</a></p>
                    <p style="font-family: Calibri, sans-serif; font-size: 7pt; color:#757575; text-align: center;">© 2019-2020 Frixel Studios. Todos os direitos reservados.</p>
            
                </footer>
        </div>
    </body>
</html>';

$to2 = $email;
$subject2 = "Solicitação enviada";
$body2 = $msg;
$header2 = "From:frixel@frixel.com.br"."\n".
            "Content-type: text/html"."\n".
            "X=Mailer:PHP/".phpversion();

mail($to2,$subject2,$body2,$header2);

?>
<html>
    <head>
    <link href="../css/bootstrap.css" rel="stylesheet"/>
        <link href="../css/style.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <title>Colaborar</title>
    </head>
    <body>
        <div class="container text-center">
        	<img src="img/checkmark.png" class="img-fluid mt-2" width="17%" alt="Verified">
        	<h2 class="b display-4 text-center mb-3">Tudo certo!</h2>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Sua solicitação foi enviada com SUCESSO.<br><br>Fique de olho em seu e-mail, nas fases iniciais, a comunicação ocorrerá por lá.<br><br><br><br></h5>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Clique para retornar à <a href="https://www.frixel.com.br">página principal</a>.</h5>
        </div>
    </body>
 </html>

