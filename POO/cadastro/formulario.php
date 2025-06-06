<?php   
        require_once 'Usuario.php';
    $nome=$_POST["nome"];
    $email=$_POST["email"];

        try {
            $usuario =  new Usuario($nome,$email);
            echo $usuario->getNome()."<br>";
           echo $usuario->getEmail()."<br>";
        } catch (Exception $erro) {
            echo "Erro ao criar o Usuario".$erro->getMessage();
          
        }


        // $usuario->setNome("Lunne");
        // $usuario->setEmail("Lunne@gmail.com");
        // $usuario->setCpf("999.999.999.22");



        echo "<pre>";
        print_r($usuario);
        echo "</pre>";
?>