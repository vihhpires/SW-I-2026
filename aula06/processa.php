<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //email = luiagomes@gmail.com
    // senha= 1234
    
        if ($email == 'luiagomes@gmail.com' && $senha == '1234' ) {
            # vamos para a pagina restrita
            $nome='loiza';
             header('Location: restrito.php?nome='. $nome);



        }
        else {
            //voltou ao formulario
                    
                    header('Location: index.html?nome='. $nome);
                    //header('Location: formulario.php');

        }

?>