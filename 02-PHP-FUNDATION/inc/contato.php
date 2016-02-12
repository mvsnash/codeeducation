<?php
if(isset($_POST['act'])=="enviar"){


    $mensagem = "Dados enviados com sucesso, abaixo seguem os dados que você enviou:<br/>";

    while(list($campo, $valor) = each($_POST)) {

        if ($campo != "act")  $mensagem .= "<b>".ucwords($campo).":</b> ".$valor."<br/>";

    }
    

} 


if(isset($mensagem)) { ?>


    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <div class="msg">
            <?php echo $mensagem; ?>
        </div>

    </div>

<?php 
}

echo $conteudo;
?>


    <form class="form-horizontal" method="post" role="form" style="margin-top:150px;;">
        <input type="hidden" name="act" value="enviar" />


        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Seu nome</label>
            <div class="col-sm-3">
                <input type="input" name="nome" required="true" class="form-control"/>
            </div>
        </div>


        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-3">
                <input type="email" name="email" class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <label for="assunto" class="col-sm-2 control-label">Assunto</label>
            <div class="col-sm-3">
                <input type="input" name="assunto" class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Mensagem</label>
            <div class="col-sm-3">
                <textarea name="msg"  class="form-control"></textarea>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
            </div>
        </div>

    </form>
