<?php //Author: Nicolas Coiado;
    $salario = 2000;//Definindo valor do salário padrão;

    echo "<b>Bônus dos profissionais:</b> </br>"; //Criando título;
    Diretor($salario);//Chamando a função diretor;
    Comum($salario);//Chamando a função Comum;
    Estagiario($salario);//Chamando a função Estagiario;

    function Diretor($salar){ //Criando a função que calculará o bônus salarial do Diretor;
        $bonus= ($salar*20)/100; //Contabilizando bônus;
        echo "O diretor recebe R$ $bonus de bônus;";//Exibindo bônus;
        echo"</br>";//Realizando quebra de linha
    }

    function Comum($salar){ //Criando a função que calculará o bônus salarial do funcionário comum;
        $bonus= ($salar*10)/100; //Contabilizando bônus;
        echo "O funcioário comum recebe R$ $bonus de bônus;";//Exibindo bônus;
        echo"</br>";//Realizando quebra de linha
    }

    function Estagiario($salar){ //Criando a função que calculará o bônus salarial do estagiário;
        $bonus= ($salar*5)/100; //Contabilizando bônus;
        echo "O estagiário recebe R$ $bonus de bônus.";//Exibindo bônus;
        echo"</br>";//Realizando quebra de linha
    }

?>