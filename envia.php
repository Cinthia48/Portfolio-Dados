<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['e,ail']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "cinthia.cecilia48@gmail.com";
    $assunto = "Formulário do Portfólio - recrutador";

    $corpo =  "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: cinthia.cec67@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!")
    }else{
        echo("Houve um erro ao enviar o E-mail!")
    }


?>
