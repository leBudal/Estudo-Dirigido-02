<?php

print "\nDigite um número Base: ";
$base = (int) fgets (STDIN);

print "Digite um número Expoente: ";
$expo = (int) fgets (STDIN);

$resultado = $base**$expo;

print "$base^$expo é igual a $resultado\n";

?>