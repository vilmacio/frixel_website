<?php

$cliente = addcslashes($_POST['cliente'],'');
$nome = addcslashes($_POST['nome'],'');
$email = addcslashes($_POST['email'],'');
$selecao = addcslashes($_POST['selecao'],'');
$descricao = addcslashes($_POST['descricao'],'');

$to = "contato@frixel.com.br";
$subject = "Contratação";
$body = "Cliente: ".$cliente."\n".
        "Nome: ".$nome."\n".
        "E-mail: ".$email."\n".
        "Tipo de serviço: ".$selecao."\n".
        "Descrição do projeto: ".$descricao."\n";
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
        <title>Contratar</title>
    </head>
    <body>
        <div class="container text-center">
        	<img src="img/checkmark.png" class="img-fluid mt-2" width="17%" alt="Verified">
        	<h2 class="b display-4 text-center mb-3">Tudo certo!</h2>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Sua solicitação foi enviada com SUCESSO.<br><br> Fique de olho em seu e-mail, a comunicação ocorrerá por lá.<br><br><br><br></h5>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Clique para retornar à <a href="https://www.frixel.com.br">página principal</a>.</h5>

        </div>
    </body>
 </html>
 

