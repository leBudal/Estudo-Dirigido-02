<?php

print "\nDigite um número: ";
$n1 = (int) fgets(STDIN);

print "Digite um número: ";
$n2 = (int) fgets(STDIN);

print "Digite um número: ";
$n3 = (int) fgets(STDIN);

print "Digite um número: ";
$n4 = (int) fgets(STDIN);

print "Digite um número: ";
$n5 = (int) fgets(STDIN);

if($n1>$n2 && $n1>$n3 && $n1>$n4 && $n1>$n5){
    print "$n1 é o maior número";
}elseif ($n2>$n1 && $n2>$n3 && $n2>$n4 && $n2>$n5){
    print "$n2 é o maior número";
}elseif ($n3>$n1 && $n3>$n2 && $n3>$n4 && $n3>$n5){
    print "$n3 é o maior número";
}elseif ($n4>$n1 && $n4>$n2 && $n4>$n3 && $n4>$n5){
    print "$n4 é o maior número";
}elseif ($n5>$n1 && $n5>$n2 && $n5>$n3 && $n5>$n4){
    print "$n5 é o maior número";
}
    
?>