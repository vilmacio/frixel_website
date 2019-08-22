<?php

$nome = addcslashes($_POST['nome'],'');
$email = addcslashes($_POST['email'],'');
$selecao = addcslashes($_POST['selecao'],'');
$video = addcslashes($_POST['video'],'');

$to = "contato@frixel.com.br";
$subject = "Contratação";
$body = "Nome: ".$nome."\n".
        "E-mail: ".$email."\n".
        "Tipo de serviço: ".$selecao."\n".
        "Tipo de vídeo: ".$video."\n";
$header = "From:host@frixel.com.br"."\n".
            "Reply-To:".$email."\n".
            "X=Mailer:PHP/".phpversion();

mail($to,$subject,$body,$header)

?>
 <font face="Arial" size="3">Sua solicitação foi enviada com <font color=green>SUCESSO</font>. Clique para retornar para a <a href="https://www.frixel.com.br">página principal</a>.</font>


