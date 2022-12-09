<?php

        $controller = new controllerEstudents();
            if(isset($_GET['id_estudante'])){
                $row = $controller->look($_GET['id']);
            }else{
                header('location: index.php');
            }




?>

<strong> Nome </strong> <?php echo $row['name']; ?> <br> <br>

<strong> idade  </strong> <?php echo $row['age']; ?> <br> <br>

<strong> date de nascimento  </strong> <?php echo $row['birth_date']; ?> <br> <br>

<strong> RA  </strong> <?php echo $row['RA']; ?> <br> <br>