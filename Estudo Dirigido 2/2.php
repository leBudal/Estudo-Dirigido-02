<?php 

print "\nDigite um número: " ;
$num = fgets(STDIN);

if ($num>0){
    print "\nO número $num é positivo\n";
}else{
    print "\nO número $num é negativo\n";
}

?>