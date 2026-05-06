<?php
$n1=readline("Digite a first nota: ");
$n2=readline("Digite a segunda nota: ");
$n3=readline("Digite a terceira nota: ");
$n4=readline("Digite a quarta nota: ");
$freq=readline("Digite a frequência: ");
$med=($n1+$n2+$n3+$n4)/4;


if($freq<75){
    echo "Reprovado por falta ";
}else{
    if($med>=6){
        echo "Aprovado";
    }else{
        $notarec=readline("Digite a nota da recuperação: ");
        $medfinal=($med+$notarec);
        if($medfinal>5){
            echo "Aprovado na recuperação";
        }else{
            echo "Reprovado, nos vemos ano que vem";
        }
    }
}

?> 