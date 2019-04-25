<?php 

print "\nDigite a primeira nota: ";
$n1 = (int) fgets(STDIN);

print "Digite a segunda nota: ";
$n2 = (int) fgets(STDIN);

$media = ($n1+$n2)/2;

if($media==10){
    print "Aluno Aprovado com Distinção";   
}elseif($media<7){
    print "Aluno Reprovado com media $media";
}elseif($media>=7){
    print "Aluno Aprovado com media $media";
}

?>