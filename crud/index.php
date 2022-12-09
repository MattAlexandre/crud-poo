<?php

    include_once("modulos/controller.php");
    include_once("modulos/router.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title> estudantes </title>
</head>
<body>
    
               

                <main>


                    <article>
                        <h1> bem vindo caros alunos </h1>


                        <nav>
                            
                                <a href="index.php">    inicio   </a> 
                                <a href="?load=create"> registar </a> 
                            
                        </nav>

                        <section>
                            <!-- roteador - verificando validador -->
                            <?php
                                $router = new router();
                                if($router->validateGet($_GET['load'])){
                                    $router->loadLook($_GET['load']);
                                }
                               
                            ?>
                        </section>
                    </article>
                    
                


                </main>

                <footer>

                  
                    
                </footer>
</body>
</html>