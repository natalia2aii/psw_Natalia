<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <style>
        #title{
            font-size: 20px;
            font-weight: bolder;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            padding-top: 35px;
        }
        table{
            text-align:left; 
            width: 500px; 
            height:300px;
            margin-left:400px;
            background-color: white;
        }
        table, th, td {
            border:1px solid black;
        }
        .conteudo{
            background-color: lavender;
            height: 415px;
            padding-top: 50px;
            
        }
    </style>
</head>
<body style="margin:0; padding:0;">

<?php
        include_once('header.html')
    ?>

    <div class="conteudo">
        <table>
        <tr>
            <th>Nome</th>
            <td>
              <?php
              echo $_POST ['Nome'];
              ?>  
            </td>
        </tr>
            <tr><th>CPF</th>
            <td>
            <?php
              echo $_POST ['cpf'];
              ?>  
              </td>
        </tr>
            <tr><th>Email</th>
            <td>
            <?php
              echo $_POST ['email'];
              ?>  
            </td>
        </tr>
            <tr><th>Endereço</th>
            <td>
            <?php
              echo $_POST ['endereço'];
              ?>  
            </td>
        </tr>
            <tr><th>Matrícula</th>
            <td>
            <?php
              echo $_POST ['matricula'];
              ?>  
            </td>
        </tr>
            <tr><th>Turma</th>
            <td>
            <?php
              echo $_POST ['turma'];
              ?>  
            </td>
        </tr>
            <tr><th>Curso</th>
            <td>
            <?php
              echo $_POST ['curso'];
              ?>  
            </td>
        </tr>
        </table>

        <div class="button" style="margin-left: 625px; margin-top:25px;">
        <form action="editaraluno.php" method="post">

    <input type="hidden" name="nome" value="<?php echo $_POST ['Nome'];?>">
    <input type="hidden" name="email" value="<?php echo $_POST ['email'];?>">
    <input type="hidden" name="curso" value="<?php echo $_POST ['curso'];?>">
    <input type="hidden" name="cpf" value="<?php echo $_POST ['cpf'];?>">
    <input type="hidden" name="turma" value="<?php echo $_POST ['turma'];?>">
    <input type="hidden" name="endereço" value="<?php echo $_POST ['endereço'];?>">
    <input type="hidden" name="matricula" value="<?php echo $_POST ['matricula'];?>">

    <input type="submit" value="EDITAR" style="margin-left: 10px; width:70px; background-color:darkgray; margin-bottom: 10px;">
    </form>

    <form action="home.php" method="post">
    <button type="submit" value="inicio" style="margin-left: 10px; height: 45px; width:70px; background-color: rgb(110, 110, 255);">
        <p>Inicio/p>
        </button>
    </form>
    
</div>
 </div>

    <?php
        include_once('footer.html')
    ?>

</body>
</html>