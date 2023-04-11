<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            background-color:darkslateblue;
            height: 415px;
            padding-top: 50px;
        }
    </style>
</head>
<body style="margin: 0;">
    
<?php
        include_once('header.html');
    ?>

    <div class="main" style="text-align: center;">
    <form action="mostraaluno.php" method="post">
    <button type="submit" value="sim" style="margin-left: 10px; height: 55px; width:150px; background-color: pink;">
        <p>Já estou cadastrado (a)</p>
        </button> 
    </form>

        <form action="cadaluno.php" method="post">
    <button type="submit" value="no" style="margin-left: 10px; height: 55px; width:150px; margin-top: 25px; background-color: pink;">
        <p>Quero me Cadastrar</p>
        </button>
    </form>


    </div>

    <?php
        include_once('footer.html')
    ?>

</body>
</html>