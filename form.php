<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style-form.css" rel="stylesheet">
    <title>Formulário</title>
    <link rel="icon" type="image/x-icon" href="ico.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

</head>
<body>
<?php include('topo.php');?>
    <script>
        $(document).ready(function () { 
            var $cep = $("#cep");
            $cep.mask('00000-000', {reverse: true});
        });
        $(document).ready(function () { 
            var $tel = $("#tel");
            $tel.mask('(00) 00000-0000', {reverse: false});
        });
    </script>
    <div>
        <form action="sucesso.php" method="post">
            <fieldset><legend>Identificação</legend>
                <input class="form" type="text" name="nome" size="50" placeholder="Nome completo"/><br>
                <input class="form" type="text" id="tel" name="tel" maxlength="15" placeholder="Telefone"/>
                <fieldset><legend class="menor">Sexo</legend>
                    <input type="radio" name="sexo" id="masc" value="Masculino" checked>
                    <label for="masc">Masculino</label></br>
                    <input type="radio" name="sexo" id="fem" value="Feminino"/>
                    <label for="fem">Feminino</label></br>
                </fieldset>
                <input class="form" type="text" name="usuario" maxlength="10" placeholder="Usuário"/>
                <input class="form" type="password" name="senha" size="10" maxlength="6" placeholder="Senha"/> (máximo 6 dígitos)
            </fieldset>

            <fieldset><legend>Localização</legend>
                <input class="form" type="text" name="rua" maxlength="100" placeholder="Endereço"/>
                <input class="form" type="text" name="complemento" maxlength="100" placeholder="Complemento"/><br>
                <input class="form" type="text" name="bairro" maxlength="60" placeholder="Bairro"/>
                <input class="form" type="text" name="cid_uf" maxlength="100" placeholder="Cidade/UF"/>
                <input class="form" type="text" id="cep" name="cep" placeholder="CEP"/>
            </fieldset>
            <br><br>
            <input class="bt bt-az" type="submit" />
            <input class="bt bt-lj" type="reset" value="Apagar"></p>
        </form>
    </div>
    <?php include('rodape.php');?>
</body>
</html>