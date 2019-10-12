<?php
$nome = addcslashes($_POST['nome'],'');
$topico = addcslashes($_POST['topico'],'');
$email = addcslashes($_POST['email'],'');
$assunto = addcslashes($_POST['assunto'],'');
$mensagem = addcslashes($_POST['mensagem'],'');

$to = "ajuda@frixel.com.br";
$subject = "Solicitação de Ajuda";
$body = "Nome: ".$nome."\n".
        "E-mail: ".$email."\n".
        "Tópico: ".$topico."\n".
        "Assunto: ".$assunto."\n".
        "Mensagem: ".$mensagem."\n";
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
        <title>Ajuda</title>
    </head>
    <body>
        <div class="container text-center">
        	<img src="img/checkmark.png" class="img-fluid mt-2" alt="Verified">
        	<h2 class="b display-4 text-center mb-3">Tudo certo!</h2>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Sua solicitação foi enviada com SUCESSO.<br><br>Fique de olho em seu e-mail, nas fases iniciais, a comunicação ocorrerá por lá.<br><br><br><br></h5>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Clique para retornar à <a href="www.frixel.com.br">página principal</a>.</h5>
        </div>
    </body>
 </html>