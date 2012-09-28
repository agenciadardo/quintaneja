<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Enviando mensagem de <?php echo $_POST["textbox-nome"]; ?></title>
        <?php

        if (PATH_SEPARATOR == ";") { 
            $quebraLinha = "\r\n";
        }
        else {
            $quebraLinha = "\n";
        }
                 
        $destinatario = "contato@festaquintaneja.com.br";
        $paginaOrigem = $_SERVER["HTTP_REFERER"];

        $nome = $_POST["textbox-nome"];
        $email = $_POST["textbox-email"];
        $numeroTelefone = $_POST["textbox-telefone"];
        $estado = $_POST["textbox-estado"];
        $mensagem = $_POST["textarea-mensagem"];
        
        $conteudo = 
       '<p><b>Nome:</b> ' . $nome . '</p>
        <p><b>E-mail:</b> '. $email . '</p>
        <p><b>Telefone:</b> ' . $numeroTelefone . '</p>
        <p><b>Estado:</b> ' . $estado . '</p>
        <p><b>Mensagem:</b><pre> '. $mensagem . '</pre></p>';
        
        $assunto = basename($paginaOrigem) == "aniversario" ? "[ Aniversário ] Mensagem" : "[ Contato ] Mensagem";
        $headers .= "MIME-Version: 1.1" . $quebraLinha;
        $headers .= "Content-type: text/html; charset=utf-8" . $quebraLinha;
        $headers .= "From: " . $email . $quebraLinha;

        if(!mail($destinatario, $assunto, $conteudo, $headers , "-r" . $destinatario)) {
            mail($destinatario, $assunto, $conteudo, $headers);
        }

        echo "<meta http-equiv='refresh' content='0;url=" . $paginaOrigem . "?enviado=1#obrigado' />";

        ?>
    </head>
    <body>

    </body>
</html>