<?php

$email = addcslashes($_POST['email'],'');
$id = addcslashes($_POST['id'],'');
$x = addcslashes($_POST['radi'],'');


$to = "financeiro@frixel.com.br";
$subject = "Contrato ".$id;
$body = "E-mail: ".$email."\n".
        "ID do colaborador: ".$id."\n".
        "Resultado: ".$x."\n";
$header = "From:host@frixel.com.br"."\n".
            "Reply-To:".$email."\n".
            "X=Mailer:PHP/".phpversion();

mail($to,$subject,$body,$header);

$msg='';

$msgAceito='<html>
    <body>
    <div style="margin: 12px;">
    <div style="margin-top: 52px; margin-bottom: 22px;">
        <img src="https://www.frixel.com.br/img/logo/frixel-dark.png" style="width: 35%" alt="frixel">
        <p style="font-family: Calibri, sans-serif; float: right; margin: auto;">Email service</p>
    </div>
    <div style="border: solid 1px #9c9c9c; border-radius: 15px; padding: 22px;">
        <h1 style="font-size: 17pt; font-weight: bolder; text-align: center; color: #545454; margin-bottom: 2rem; font-family: Calibri, sans-serif;">Parabéns, você é um(a) colaborador(a) Frixel!</h1>
        <p style="font-size: 11pt; color: #000000; font-family: Calibri, sans-serif;">
                Olá!
               <br><br>
                Percebemos que você aceitou nossos termos e agora está pronto(a) para trabalhar com a gente.
               <br><br>
               Você faz parte do primeiro grupo de colaboradores da nossa produtora. Como já dito anteriormente, por enquanto, os colaboradores da Frixel podem trabalhar apenas em home office,
               já que ainda não fazemos produções externas, gravações ou captações.
               <br><br>
               A partir deste momento, podemos entrar em contato com você por meio do WhatsApp a partir do número cadastrado
               no primeiro formulário que você preencheu. Caso este número não seja do seu WhatsApp, responda este e-mail com seu número correto.
               <br><br>
                Nos próximos meses haverá uma grande expanção do site e das mídias sociais da Frixel somada com campanhas de marketing intensivas a fim
                de atrair jobs para nossos colaboradores. Além disso, planejamos expandir nossos serviços para outras áreas do design gráfico pouco exploradas no mercado. 
                Portanto, pedimos paciência caso demore um pouco para você começar a trabalhar, estamos em uma fase importante e ao mesmo tempo difícil de crescimento e esperamos que
                você cresça com a gente.
                <br><br>
                Se surgir alguma dúvida, basta enviar um e-mail para <span style="color: #246d90">ajuda@frixel.com.br</span>. 
                Estamos à disposição para esclarecimentos.
                <br><br>
                Obrigado!
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


$msgRecuso='<html>
<body>
        <div style="margin: 12px;">
                <div style="margin-top: 52px; margin-bottom: 22px;">
                    <img src="https://www.frixel.com.br/img/logo/frixel-dark.png" style="width: 35%" alt="frixel">
                    <p style="font-family: Calibri, sans-serif; float: right; margin: auto;">Email service</p>
                </div>
                <div style="border: solid 1px #9c9c9c; border-radius: 15px; padding: 22px;">
                    <h1 style="font-size: 17pt; font-weight: bolder; text-align: center; color: #545454; margin-bottom: 2rem; font-family: Calibri, sans-serif;">Você não aceitou nossos termos!</h1>
                    <p style="font-size: 11pt; color: #000000; font-family: Calibri, sans-serif;">
                    Olá!
                   <br><br>
                    Lamentamos por você não aceitar os termos.
                   <br><br>
                    Nosso vínculo se encerra por aqui, lembrando que você pode se inscrever novamente após algum tempo.
                   <br><br>
                   No momento que você lê este e-mail, os seus dados já foram devidamente deletados do nosso sistema, assim como consta na nossa <a href="https://www.frixel.com.br/legal/privacidade/">política de privacidade</a>.
                   <br><br>
                   Obrigado!
                   <br><br><br>
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
    
if($x=='Li e CONCORDO com os termos descritos acima.'){
	$msg=$msgAceito;

}

else{
	$msg=$msgRecuso;

}

$to2 = $email;
$subject2 = "Resposta contratual";
$body2 = $msg;
$header2 = "From:financeiro@frixel.com.br"."\n".
            "FromName:Frixel"."\n".
            "Content-type: text/html"."\n".
            "X=Mailer:PHP/".phpversion();

mail($to2,$subject2,$body2,$header2);


?>
<html>
    <head>
        <link href="https://www.frixel.com.br/css/bootstrap.css" rel="stylesheet"/>
        <link href="https://www.frixel.com.br/css/style.css" rel="stylesheet"/>
        <link href="https://www.frixel.com.br/css/bootstrap.css" rel="stylesheet"/>
        <link href="https://www.frixel.com.br/css/style.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://www.frixel.com.br/js/bootstrap.js" type="text/javascript"></script>
        <title>Contract</title>
    </head>
    <body>
        <div class="container text-center">
        	<img src="https://www.frixel.com.br/php/img/checkmark.png" class="img-fluid mt-2" width="12%" alt="Verified">
        	<h2 class="b display-4 text-center mb-3">Tudo certo!</h2>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Os dados foram enviados com SUCESSO.<br><br><br></h5>
        </div>
    </body>
 </html>