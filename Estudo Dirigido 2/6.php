<?php

print "\nDigite um número: ";
$n1 = (int) fgets(STDIN);

print "Digite um número: ";
$n2 = (int) fgets(STDIN);

print "Digite um número: ";
$n3 = (int) fgets(STDIN);

if($n1>$n2 && $n1>$n3){
    print "$n1 é o maior número";
}elseif ($n2>$n1 && $n2>$n3){
    print "$n2 é o maior número";
}elseif ($n3>$n1 && $n3>$n2){
    print "$n3 é o maior número";
}
    
?>

