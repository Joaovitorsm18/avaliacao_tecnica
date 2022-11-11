<?php
 $nome = $_POST["txt_name"];
 $idade = $_POST["txt_idade"];
 $profissao = $_POST["txt_profissao"];
 $email = $_POST["txt_email"];
 $telefone = $_POST["txt_tel"];
 $data = $_POST["data"];
;
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-
    MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <title>Seja bem vindo</title>
 </head>
 <body>
<div class="container mt-4">
    <div class="row">
     <div class="col-sm"></div>
        <div class="col-sm-8">
            <div><h1 class="text-success">Obrigado por cadastrar</h1></div>
            <form>
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" value="<?php echo "".$nome?>" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Idade:</label>
                    <input type="text" value="<?php echo "".$idade?>" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Profissão:</label>
                    <input type="text" value="<?php echo "".$profissao?>" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" value="<?php echo "".$email?>" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Telefone:</label>
                    <input type="text" value="<?php echo "".$telefone?>" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Data de Preenchimento:</label>
                    <input type="date" value="<?php echo "".$data?>" class="form-control" disabled>
                </div>
            </form>
        </div>
    <div class="col-sm"></div>
</div>
 <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>