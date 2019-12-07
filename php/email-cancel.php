<?php
$email = addcslashes($_POST['email'],'');

$to = "ajuda@frixel.com.br";
$subject = "Cancelamento de e-mail";
$body = "Não enviar mais e-mails para: ".$email."\n".;
$header = "From:host@frixel.com.br"."\n".
            "Reply-To:".$email."\n".
            "X=Mailer:PHP/".phpversion();

mail($to,$subject,$body,$header);

?>

<html>
    <head>
        <link href="../css/bootstrap.css" rel="stylesheet"/>
        <link href="../css/style.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <title>Tudo certo!</title>
    </head>
    <body>
        <div class="container text-center">
        	<img src="img/checkmark.png" class="img-fluid mt-2" width="17%" alt="Verified">
        	<h2 class="b display-4 text-center mb-3">Tudo certo!</h2>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Você não receberá mais e-mails da Frixel.<br></h5>
        </div>
    </body>
 </html>