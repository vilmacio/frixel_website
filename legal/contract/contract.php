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
        <div>
            <div style="background-color: #f5f5f5; padding: 1rem; margin-bottom: 2rem; text-align: center;">
                <img src="https://www.frixel.com.br/img/logo.png" alt="frixel">
            </div>
            <div>
                <h1 style="font-size: 18pt; font-weight: bolder; text-align: center; color: #545454; margin-bottom: 2rem; font-family: Calibri, sans-serif;">Parabéns, você é um(a) colaborador(a) Frixel!</h1>
                <p style="font-size: 12pt; text-align: justify; color: #545454; font-family: Calibri, sans-serif;">
                        Olá!
                       <br><br>
                        Percebemos que você aceitou nossos termos e agora está pronto(a) para trabalhar com a gente.
                       <br><br>
                       Você faz parte do primeiro grupo de colaboradores da nossa produtora. Como já dito anteriormente, por enquanto, os colaboradores da Frixel podem trabalhar apenas em home office,
                       já que ainda não fazemos produções externas, gravações ou captações.
                       <br><br>
                       A partir deste momento, podemos entrar em contato com você por meio do WhatsApp a partir do número cadastrado
                       no primeiro formulário que você preencheu. Caso este número não seja do seu WhatsApp, confirme seu número enviando
                       uma mensagem pra gente clicando no botão abaixo. Lembre-se de informar seu nome.
                </p>        
            </div>
            <div style="text-align: center; margin: 2rem;">
                <a target="_blank" href="https://www.frixel.com.br/legal/temp/CONTi772mkniOMDSAJnmnjnksndhnsdakjINJSNKSAD5559/KSAnjsjdjakjjkalmHHVSA4Nkn72b29nsallnJBJSUH29J/fileCON.html">
                <button style="display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                cursor: pointer;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                border: 1px solid transparent;
                padding: 0.9rem 0.9rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                color: white;
                background-color: #249048;">Enviar mensagem</button></a>
            </div>

            <div>
                <p style="font-size: 12pt; text-align: justify; color: #545454; font-family: Calibri, sans-serif;">
                    Nos próximos meses haverá uma grande expanção do site e das mídias sociais da Frixel somada com campanhas de marketing intensivas a fim
                    de atrair jobs para nossos colaboradores. Além disso, planejamos expandir nossos serviços para outras áreas do design gráfico pouco exploradas no mercado. 
                    Portanto, pedimos paciência caso demore um pouco para você começar a trabalhar, estamos em uma fase importante e ao mesmo tempo difícil de crescimento e esperamos que
                    você cresça com a gente.
                    <br><br>
                   Se surgir alguma dúvida, basta enviar um e-mail para <span style="color: #246d90">ajuda@frixel.com.br</span>. 
                   Estamos à disposição para esclarecimentos tanto por e-mail quanto por WhatsApp.
                   <br><br>
                   Obrigado!
                   <br><br>
            </p>
            </div>
        
        <footer style="background-color: #f5f5f5; padding: 2rem; text-align: center;">
            <p style="font-family: Calibri, sans-serif; font-size: 9pt;">Este e-mail é um serviço Frixel - <a href="www.frixel.com.br">Acessar o site.</a></p>
            <img src="https://www.frixel.com.br/img/logo.png" alt="frixel">
            <p style="font-family: Calibri, sans-serif; font-size: 9pt;">© 2019-2020 Frixel Studios. Todos os direitos reservados.</p>
        </footer>
        </div>
    </body>
    </html>';
    
if($x=='Li e CONCORDO com os termos descritos acima.'){
	$msg=$msgAceito;

}

else{
	$msg='Deu ruim!';

}

$to2 = $email;
$subject2 = "Frixel Studios - Bem-Vindo(a)!";
$body2 = $msg;
$header2 = "From:contato@frixel.com.br"."\n".
            "FromName:Frixel"."\n".
            "Content-type: text/html"."\n".
            "X=Mailer:PHP/".phpversion();

mail($to2,$subject2,$body2,$header2);


?>
<html>
    <head>
        <link href="https://www.frixel.com.br/css/bootstrap.css" rel="stylesheet"/>
        <link href="https://www.frixel.com.br/css/style.css" rel="stylesheet"/>
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