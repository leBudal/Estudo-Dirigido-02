<?php 

$c = 1;
$impar = 0;
$par = 0;


while($c<=10){ 
print "\nDigite um número: ";
$n = (int) fgets(STDIN);
$c = $c+1;

    if($n%2!=0){
        $impar = $impar+1;
    }else{
        $par = $par+1;
    }
}

print "\nNúmeros impares: $impar";
print "\nNúmeros pares: $par\n\n";

?>