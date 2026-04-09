<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
        if ($email == 'vihhbarboza@gmail.com' && $senha == '1234455' ) {
            # vamos para a pagina restrita
            $nome='Vitoria';
             header('Location: restrito.php?nome='. $nome);
             exit();



        }
        else {
            //voltou ao formulario
                    header('Location: form.php?erro=1');
                    exit();

        }

?>