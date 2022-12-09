<?php

    // instanciando controle estudantes 
    $controller = new controllerEstudents();

    $result = $controller->index();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title> estudantes </title>
</head>
<body>
    
                <header>
                        
                    <nav>
                        <a href="index.html">     menu      </a>
                        <a href="entrar.html">   entrar    </a>
                       

                    </nav>

                    <div id="div">

                        <h1> titulo </h1>


                    </div>

                
                </header>

                <main>
                        <table>
                            <tr>
                                <th> nome               </th>
                                <th> idade              </th>
                                <th> data de nascimento </th>
                                <th> RA                 </th>
                            </tr>

                            <!-- laço de repetição - atribundo os alunos na tabela --> 
                            <?php while($row = mysql_fetch_array($result)): ?>

                                        <tr>
                                            <td> <?php echo $row['id_estudante']?> </td>
                                            <td> <?php echo $row['nome']?> </td>
                                            <td> <?php echo $row['idade']?> </td>
                                            <td> <?php echo $row['data_nascimento']?> </td>
                                            <td> <?php echo $row['RA']?> </td>

                                            <td>
                                                <a href="?load=look&id=<?php   echo $row['id']; ?>"> look   </a>
                                                <a href="?load=update&id=<?php echo $row['id']; ?>"> update  </a>
                                                <a href="?load=remove&id=<?php echo $row['id']; ?>"> remove </a>
                                            </td>
                                        </tr>

                            <?php endwhile;?>

                        </table>

                

                </main>

                <footer></footer>

                    <h1> titulo </h1>

                    <p> 
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit . Reiciendis quibusdam aliquid voluptatibus qu
                    idem suntnetur ipsam consectetur hic labore, numqua
                    m illum inc idunt debitis consequuntur repudiandae!
                    Quis expedita vel laudantium mollitia.
                    </p>
                    
                </footer>
</body>
</html>