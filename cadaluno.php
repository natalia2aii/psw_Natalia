<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade</title>
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
        #foot{
        color: white;
        margin:0;
        padding-top: 25px;
        }
    </style>
</head>
<body style="margin: 0;">

<?php
        include_once('header.html');
    ?>

    <div class="menu" style="height:550px; background-color:darkseagreen; margin:0; justify-content: center; text-align: center;">
       <form action="mostraaluno.php" method="post">
       <p class="text" style="padding-top:10px;"> Nome: <br> <input class="barra" type="text" name="Nome" placeholder="Digite seu nome" ></p>
       <p class="text"> Curso: <br> <input class="barra" type="text" name="curso" placeholder="XXX.XXX.XXX-XX" required ></p>
       <p class="text"> Email: <br> <input class="barra" type="text" name="email" placeholder="Digite seu email"></p>
       <p class="text"> Endereço: <br> <input class="barra" type="text" name="endereço" placeholder="Digite seu endereço"></p>
       <p class="text"> Matrícula: <br> <input class="barra" type="text" name="matricula" placeholder="Digite sua matricula" required></p>
       <p class="text"> Turma: <br> <input class="barra" type="text" name="turma" placeholder="Digite sua turma"></p>
       <p class="text"> CPF: <br> <input class="barra" type="text" name="cpf" placeholder="Digite seu Curso"></p>
       
       <button type="submit" value="Cadastrar" style="margin-left:25px; margin-top:15px; border-radius: 10px;">
        <p id="botão">Enviar os Dados</p>
        </button>
    </form>
    </div>

    <?php
        include_once('footer.html');
    ?>
    
</body>
</html>