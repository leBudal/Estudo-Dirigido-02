<?php 

print "\nDigite um número: ";
$a = (int) fgets(STDIN);

print "Digite um número: ";
$b = (int) fgets(STDIN);

print "Digite um número: ";
$c = (int) fgets(STDIN);

if($a>$b && $b>$c){
    print "A ordem decrescente é: $a $b $c";
}elseif($a>$c && $c>$b){
    print "A ordem decrescente é: $a $c $b";
}elseif($b>$a && $a>$c){
    print "A ordem decrescente é: $b $a $c";
}elseif($b>$c && $c>$a){
    print "A ordem decrescente é: $b $c $a";
}elseif($c>$a && $a>$b){
    print "A ordem decrescente é: $c $a $b";
}elseif($c>$b && $b>$a){
    print "A ordem decrescente é: $c $b $a";
}

?>