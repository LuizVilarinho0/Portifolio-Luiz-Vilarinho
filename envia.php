<?php
    $nome = addslashes($_POST['Nome']);
    $email = addslashes($_POST['E-mail']);
    $telefone = addslashes($_POST['Telefone']);
    $assunto = addslashes($_POST['Assunto']);
    $mensagem = addslashes($_POST['Mensagem']);

    $para = "luizvilarinho948@gmail.com";
    $assunto = "Coleta de dados - Site";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Assunto: ".$assunto."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: luizvilarinho948@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }


?>