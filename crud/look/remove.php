<?php

        $controller = new controllerEstudents();
        if(isset($_GET['id_estudante'])){
            $row = $controller->look($_GET['id']);
        }else{
            header('location: index.php');
        }

        if(isset($_POST['remove'])){
            $controller->remove($_GET['id_estudante']);
            header('location: index.php');
        }
?>



<h2> desejar excluir o aluno : <?php echo $row['name'] ?></h2><br>


<form>
        <br>
        <input type="submit" name="remove" value="exluir"> 
</form>