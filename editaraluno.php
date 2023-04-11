<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .barra{
            width: 600px;
            height: 25px;
            border-radius: 5px;
        }
        .text{
            margin-top:0px; 
            margin-left: 25px;
        }
    </style>
</head>

<body style="margin:0; padding:0;">

<?php
        include_once('header.html')
    ?>

<div class="caixa" style="height: 560px; background-color: Lavender; margin:0; justify-content: center; text-align: center;">
<form action="mostraaluno.php" method="post">
<p class="text" style="padding-top:10px;"> Nome: <br> <input class="barra" type="text" name="Nome" value="<?php echo $_POST ['nome'];?>" required/></p>
<p class="text"> Email: <br> <input class="barra" type="text" name="cpf" value="<?php echo $_POST ['email'];?>" required/></p>
<p class="text"> Endereço: <br> <input class="barra" type="text" name="email" value="<?php echo $_POST ['endereço'];?>" required/></p>
<p class="text"> CPF: <br> <input class="barra" type="text" name="endereço" value="<?php echo $_POST ['cpf'];?>" required/></p>
<p class="text"> Matrícula: <br> <input class="barra" type="text" name="matricula" value="<?php echo $_POST ['matricula'];?>" required/></p>
<p class="text"> Turma: <br> <input class="barra" type="text" name="turma" value="<?php echo $_POST ['turma'];?>" required/></p>
<p class="text"> Curso: <br> <input class="barra" type="text" name="curso" value="<?php echo $_POST ['curso'];?>" required/> </p>

<div class="botao">
        <button type="submit" class="btn">
            <b>Alterar</b>
        </button>

</div>
</div>

<?php
        include_once('footer.html');
    ?>
    
</body>
</html>


