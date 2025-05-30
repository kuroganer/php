<?php
   
    require_once'Aluno.php';

    $pessoa = new Pessoa;
     $pessoa2 = new Pessoa;

     $pessoa->setNome("João");
     $pessoa->setIdade(30);
     $pessoa->setSexo("M");
     $pessoa->fazerAniversario();

     $pessoa2->setNome("Maria");
     $pessoa2->setIdade(40);
     $pessoa2->setSexo("F");
     $pessoa2->fazerAniversario();


     if ($pessoa->getSexo()== "M"){
        $pessoa->setSexo("Masculino");
     }
     else{
        $pessoa->setSexo("Feminino");
     }
     $pessoa2->getSexo()=="M"? $pessoa2->setSexo("Masculino"):$pessoa2->setSexo("Feminino");

     echo "Ola meu nome é".$pessoa->getNome()."<br>". "tenho ". $pessoa->getIdade()."anos <br> e sou do sexo ". $pessoa->getSexo();
     echo "<pre>";
    print_r($pessoa);
    echo "</pre>";
    echo "<br> <br>";
    echo "<pre>";
    print_r($pessoa2);
    echo "</pre>";
    echo "<br> <br>";
    echo "Ola meu nome é ".$pessoa2->getNome()."<br>". " tenho ". $pessoa2->getIdade()." anos <br> e sou do sexo ". $pessoa2->getSexo();

    echo "<hr>";
    echo "<hr>";
    echo "<h2>Alunos</h2>";
    echo "<hr>";
    $aluno = new Aluno;

    $aluno->setNome("Fred");
    $aluno->setIdade(22);
    $aluno->setSexo("M");
    $aluno->setMatricula(12444477722);
    $aluno->setCurso("Técnico de informatica");
    echo "<pre>";
    print_r($aluno);
    echo "</pre>";

   



?>