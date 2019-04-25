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

$soma = ($n1+$n2+$n3+$n4+$n5);
$media = $soma/5;

print "\nA soma dos números é $soma\n";
print "A média dos números é $media\n\n";

?>