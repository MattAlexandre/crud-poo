<?php 

    $controller = new controllerEstudents();
    if(isset($_POST['registrar'])){
        $r = $controller->create($_POST['name'], $_POST['age'], $_POST['birth_date'],
                                 $_POST['RA'], $_POST['note1'], $_POST['note2'], $_POST['note3'],);


            if($r){
                echo "registro realizado com sucesso =>";
            }else{
                echo "o aluno reistrado ja existe, tente novamente =>";
            }
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title> registrar </title>
</head>
<body>

    <!-- formulario registrar --> 

            <h1> <strong> Registro de um novo estudante  </strong></h1>

            <form action="" method="POST">

                <h1> registro </h1>

                <label> nome </label><br>
                <input type="text" id="ip_name" name="name" require><br><br>

                <label> idade </label><br>
                <input type="number" id="ip_age" name="age"  min="1" max="99" require><br><br>

                <label> data de nascimento  </label><br>
                <input type="date" id="ip_birth_date" name="birth_date" require><br><br>

                <label> RA </label><br>
                <input type="number" id="ip_RA" name="RA" min="10" max="9" require><br><br>


                <!-- notas -->
                <label> primeira nota </label><br>
                <input type="number" id="ip_note1" name="note1" min="0" max="10" require><br><br>

                <label> primeira nota </label><br>
                <input type="number" id="ip_note2" name="note2" min="0" max="10" require><br><br>

                <label> primeira nota </label><br>
                <input type="number" id="ip_note3" name="note3" min="0" max="10" require><br><br>


                <input type="submit" value="registrar" id="ip_registrar" name="register">


            </form>

    
</body>
</html>
