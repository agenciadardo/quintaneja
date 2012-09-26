<div class="texto-pagina">
    <span>Endereço:</span><br />
    <p>
        Rua Princesa Isabel, 210 - Centro - Mauá - SP.
    </p>

    <span>Telefone:</span><br />
    <p>
        11 4547-2777
    </p>
</div>

<div class="formulario">
    <?php if (empty($_GET['enviado'])) { ?>

    <form id="formulario" method="post" action="<?php bloginfo('template_url') ?>/enviar-email.php">
        <label for="textbox-nome">Nome: </label>
        <input type="text" name="textbox-nome" id="textbox-nome" />
        
        <br />

        <label for="textbox-email">E-mail: </label>
        <input type="text" name="textbox-email" id="textbox-email" />
        
        <br />

        <label for="textbox-telefone">Telefone: </label>
        <input type="text" name="textbox-telefone" id="textbox-telefone" />

        <br />

        <label for="textbox-estado">Estado: </label>
        <input type="text" name="textbox-estado" id="textbox-estado" />

        <br />

        <label for="textarea-mensagem">Mensagem: </label>
        <textarea name="textarea-mensagem" id="textarea-mensagem"></textarea>

        <br />

        <div class="botao-enviar">
            <input type="submit" id="botao-enviar" value="Enviar" />       
        </div>

    </form>

    <?php 
    }
    else { ?>
    
        <h3 id="obrigado" style="text-align:center;">
            Mensagem enviada com sucesso.<br />
            Obrigado!
        <h3>
    </p> 
    <?php } ?>

</div>