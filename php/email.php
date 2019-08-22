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

mail($to,$subject,$body,$header)

?>
 <font face="Arial" size="3">Sua solicitação foi enviada com <font color=green>SUCESSO</font>. Clique para retornar para a <a href="https://www.frixel.com.br">página principal</a>.</font>


