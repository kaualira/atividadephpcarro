<!-- Exemplo de objetos  -->
<!-- Um objeto contém exatamente a mesma estruturas e as propriedades de uma classe, no entanto sua estrutura é dinamica, seus atributos podem mudar de valor durante a execução do programa e podemos declarar diversos objetos oriundo de mesma classe  -->

<?php
    // incluindo a classe que criada na pasta "Classes"
    include("classe_do_Objeto_carro.php");

    // Instanciando o novo objeto 
    $carro0 = new carro();

    // Atribuindo valores aos atributos 
    $carro0->ano        ="2012";
    $carro0->modelo     ="C4 VTR";
    $carro0->cor        ="Preto";
    $carro0->fabricante ="Citroen";
    $carro0->status     ="Disponivel";

    // Instanciando o novo objeto 
    $carro1 = new carro();

    // Atribuindo valores aos atributos 
    $carro1->ano        ="2014/2015";
    $carro1->modelo     ="Corcel 2";
    $carro1->cor        ="Amarelo";
    $carro1->fabricante ="Ford";
    $carro1->status     ="Indisponivel";

    $carro2 = new carro();

    $carro2->ano = "2024";
    $carro2->modelo = "BMW 320i GP 2.0 Flex";
    $carro2->cor = "Azul";
    $carro2->fabricante = "BMW";
    $carro2->status = "Indisponivel";

    $carro3 = new carro();

    $carro3->ano = "2023";
    $carro3->modelo = "Maserati GranTurismo";
    $carro3->cor = "Chumbo";
    $carro3->fabricante = "Maserati";
    $carro3->status = "Disponivel";

    $carro4 = new carro();

    $carro4->ano = "2017";
    $carro4->modelo = "Ferrari";
    $carro4->cor = "Vermelho";
    $carro4->fabricante = "Ferrari";
    $carro4->status = "Disponivel";

    $carro5 = new carro();

    $carro5->ano = "2012";
    $carro5->modelo = "Lamborghini";
    $carro5->cor = "Azul";
    $carro5->fabricante = "Lamborghini";
    $carro5->status = "Disponivel";

    //Imprimindo na tela do usúario os valores do objeto (carro0) acima:
    echo "Carro ". $carro0->status . ": <br/><br/>" ;

    echo "Fabricante do carro: ". $carro0->fabricante . "<br />
                        Modelo: ". $carro0->modelo . "<br />
                        de Cor: ". $carro0->cor . "<br />
                        Ano: ". $carro0->ano . "<br /> <hr>";

    // Imprimindo na tela do usuário os valores do objeto (carro1) acima: 
    echo "Carro ". $carro1->status . ": <br/><br/>" ;

    echo "Frabricante do carro: ". $carro1->fabricante . "<br />
                        Modelo: ". $carro1->modelo . "<br />
                        de Cor: ". $carro1->cor . "<br />
                        Ano: ". $carro1->ano . "<br /> <hr>";

    echo "Carro ". $carro2->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro2->fabricante . "<br />
                        Modelo: ". $carro2->modelo . "<br />
                        de Cor: ". $carro2->cor . "<br />
                        Ano: ". $carro2->ano . "<br /> <hr>";
                    
    echo "Carro ". $carro3->status . ": <br/><br/>";
                    
    echo "Fabricante do carro: ". $carro3->fabricante . "<br />
                        Modelo: ". $carro3->modelo . "<br />
                        de Cor: ". $carro3->cor . "<br />
                        Ano: ". $carro3->ano . "<br /> <hr>";
                    
    echo "Carro ". $carro4->status . ": <br/><br/>";
                    
    echo "Fabricante do carro: ". $carro4->fabricante . "<br />
                        Modelo: ". $carro4->modelo . "<br />
                        de Cor: ". $carro4->cor . "<br />
                        Ano: ". $carro4->ano . "<br /> <hr>";
                    
    echo "Carro ". $carro5->status . ": <br/><br/>";
                    
    echo "Fabricante do carro: ". $carro5->fabricante . "<br />
                        Modelo: ". $carro5->modelo . "<br />
                        de Cor: ". $carro5->cor . "<br />
                        Ano: ". $carro5->ano . "<br /> <hr>";

?>