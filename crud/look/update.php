<?php 

        $controller = new controllerEstudents();
        if(isset($_GET['id_estudante'])){
            $row = $controller->look($_GET['id']);
        }else{
            header('location: index.php');
        }

        if(isset($_POST['enviar'])){
            $controller->update($_GET['id_estudante'], $_POST['name'], $_POST['age'], $_POST['birth_date'], $_POST['RA'], );
            header('location: index.php');
        }



?>

        
<form action="" method="POST">

            <h1> registro </h1>

            <label> nome </label><br>
            <input type="text" id="ip_name" values="<?php echo $row['name']?>" name="name" require><br><br>

            <label> idade </label><br>
            <input type="number" id="ip_age" values="<?php echo $row['age']?>" name="age"  min="1" max="99" require><br><br>

            <label> data de nascimento  </label><br>
            <input type="date" id="ip_birth_date" values="<?php echo $row['birth_date']?>" name="birth_date" require><br><br>

            <label> RA </label><br>
            <input type="number" id="ip_RA" values="<?php echo $row['RA']?>" name="RA" min="10" max="9" require><br><br>


            <!-- notas -->
            <label> primeira nota </label><br>
            <input type="number" id="ip_note1" values="<?php echo $row['note1']?>" name="note1" min="0" max="10" require><br><br>

            <label> primeira nota </label><br>
            <input type="number" id="ip_note2" values="<?php echo $row['note2']?>"name="note2" min="0" max="10" require><br><br>

            <label> primeira nota </label><br>
            <input type="number" id="ip_note3" values="<?php echo $row['note3']?>" name="note3" min="0" max="10" require><br><br>


            <input type="submit" value="registrar" id="ip_registrar" name="atualizar">


</form>

