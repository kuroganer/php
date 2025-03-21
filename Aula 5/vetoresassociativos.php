<?php
    include '../Aula 4/funcao.php';// n acha mas n para a função Warning
    /*
    require //Não acha e para o busca pois é requerido, obrigatório/Fatal error
    require_once //é paa ser incluido somente uma vez, mas obrigatoriamente / Fatal error
    include_once //é paa ser incluido somente uma vez, mas se não achar não para a execução Warning
    */
    //CRIANDO VETORES ASSOCIATIVOS

    $estadosBrasileiros =   
         [
        'SP' => 'São Paulo',
        'RJ'=> 'Rio de Janeiro',
        'DF'=> 'Brasília',
        'TO'=> 'Tocantins',
        'AL'=> 'Alagoas',
        'SC'=> 'Santa Catarina'

        ];

    $dadosPessoais=
     [
        'NOME'=>'José Alves',
        'Formação'=> 'Ciências da Computação',
        'Celular' => '(61)9877-8582'  
     ];
//inserindo novos elementos no vetor associativo
    $dadosPessoais['EMAIL']='joalves1952@gmail.com';
    $dadosPessoais['CPF']='024.132.458-22';
//array_push, e array_unshift insere de foma indexada no valor associativo com posição numerica
    func_exibir($dadosPessoais);
    func_exibir($estadosBrasileiros);


//Recuperando dados do vetor associativo
    echo $estadosBrasileiros['SP'];echo "<br>";
    echo $dadosPessoais['NOME'];echo "<br>";
    echo "Nome: ".$dadosPessoais['NOME'];echo "<br>";//obrigatoria a concatenação

/*//Excluindo elementos do vetor
    array_pop($estadosBrasileiros);
    unset($estadosBrasileiros['DF']);
    array_shift($estadosBrasileiros);
    func_exibir($estadosBrasileiros);
*/
//Mesclando vetores associativos

$dadosA =
    [
        "NOME" => "MARIA",
        "IDADE"=> "20",
        "PROFISSÃO" => "ESTUDANTE"

    ];
$dadosB=
    [
        "CPF"=> "888.888.888.88" ,
        "CEL"=> "(61)8989898989",
        "EMAIL"=>"maria@gmail.com"

    ];
//$dados_Completos = array_merge($dadosA,$dadosB);
    $dados_Completos= ($dadosA+$dadosB);
//Extrair as cghaves do vetor
    $chaves = array_keys($dados_Completos);
//Ordenar um vetor associativos pelos seus valores
    $numeros =
    [
        'a'=>5,
        'b'=>8,
        'c'=>3
    ];
    //sort($numeros);
    //Ordenar um valor associativo juntamente com seus indices
    //arsort($numeros);
//ORDENAR O VETOR COM BASE EM SUAS CHAVES

ksort($estadosBrasileiros);
func_exibir($estadosBrasileiros);

    func_exibir($numeros);


    func_exibir($chaves);


    func_exibir($dados_Completos);

    $dadosGerais =
    [
        "Funcionario1"=> 
        [
            "Nome"=> "João",
            "Cargo"=> "Gerente",
            "EMAIL"=> "joao@gmail.com",
            "Contatos"=>
            [
                "Cel1"=>("61 9856 7689"),
            ]
        ],
        "Funcionario2"=> 
        [
            "Nome"=> "MARIA ",
            "Cargo"=> "Presidente",
            "EMAIL"=> "Maria@gmail.com"
        ]
        ];
        $dadosGerais['Funcionario2']["CPF"]= "888.888.888.00";
        $dadosGerais['Funcionario1']["Contatos"]["Cel2"]= ("61 9999 1465");

        func_exibir($dadosGerais);
        
        echo $dadosGerais["Funcionario2"]["Nome"];echo "<br>";

        echo $dadosGerais["Funcionario2"]["Cargo"];echo "<br>";

?>