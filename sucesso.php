<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style-form.css" rel="stylesheet">
    <link href="css/estilo-bt.css" rel="stylesheet">
</head>
<body>

<!--<script>alert('Cadastro realizado com sucesso.\n<?php echo "Usuário: ".$_POST['usuario'];?>')</script>-->
<?php include('topo.php');?>
<div class="sucesso">
    <h4 style="text-align: left";>Olá, <?= htmlspecialchars($_POST['nome']); ?>.<br>
    O usuário <?php echo "<strong>".$_POST['usuario']."</strong>"; ?> foi cadastrado no sistema com os dados abaixo:</h4>
    <fieldset><legend>Cadastro realizado</legend>
        <?php
            echo "Nome: ".$_POST['nome']."<br>";
            echo "Telefone: ".$_POST['tel']."<br>";
            echo "Sexo: ".$_POST['sexo']."<br>";
            echo "Endereço: ".$_POST['rua']." - ".$_POST['complemento']."<br>";
            echo $_POST['bairro']." - ".$_POST['cid_uf']."<br>";
            echo "CEP: ".$_POST['cep']."<br>";
        ?>
    </fieldset>
    <br>
    <a class="bt bt-vd" href="form.php">Voltar</a>
</div>
<?php include('rodape.php');?>
</body>
</html>