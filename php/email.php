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
    <div>
    	<div style="background-color: #f5f5f5; padding: 1rem; margin-bottom: 2rem; text-align: center;">
    		<img src="https://www.frixel.com.br/img/logo.png" width="20%" alt="frixel">
    	</div>
    	<div>
    		<h1 style="font-weight: bolder; text-align: center; color: #545454; margin-bottom: 2rem; font-family: Calibri, sans-serif;">Recebemos sua solicitação</h2>
    		<p style="font-size: 1.5rem; text-align: justify; color: #545454; font-family: Calibri, sans-serif;">
       			Olá!
       			<br><br>
       			Sua solicitação para ser um colaborador Frixel já está em análise e por enquanto basta aguardar. Enviaremos
       			uma resposta em até 1 dia útil.
       			<br><br>
       			Boa Sorte!
       			<br><br><br>
    		</p>
    	</div>
    
    <footer style="background-color: #f5f5f5; text-align: center; padding: 2rem;">
        <p style="font-family: Calibri, sans-serif;">Este e-mail é um serviço Frixel - <a href="www.frixel.com.br">Acessar o site.</a></p>
        <img src="https://www.frixel.com.br/img/logo.png" width="10%" alt="frixel">
        <p style="font-family: Calibri, sans-serif;">© 2019-2020 Frixel Studios. Todos os direitos reservados.</p>

    </footer>
    </div>
</body>
</html>';

$to2 = $email;
$subject2 = "Frixel Studios - Solicitação enviada";
$body2 = $msg;
$header2 = "From:contato@frixel.com.br"."\n".
            "FromName:Frixel"."\n".
            "Content-type: text/html"."\n".
            "X=Mailer:PHP/".phpversion();

mail($to2,$subject2,$body2,$header2);

?>
<html>
    <head>
        <link href="../css/bootstrap.css" rel="stylesheet"/>
        <link href="../css/style.css" rel="stylesheet"/>
        <title>Colaborar</title>
    </head>
    <body>
        <div class="container text-center">
        	<img src="img/checkmark.png" class="img-fluid mt-2" width="12%" alt="Verified">
        	<h2 class="b display-4 text-center mb-3">Tudo certo!</h2>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Sua solicitação foi enviada com SUCESSO.<br><br>Fique de olho em seu e-mail, nas fases iniciais, a comunicação ocorrerá por lá.<br><br><br><br></h5>
            <h5 face="Arial" size="3" class="text-center text-frixel-color">Clique para retornar à <a href="www.frixel.com.br">página principal</a>.</h5>
        </div>
    </body>
 </html>

