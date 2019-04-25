<?php 
 print "\nDigite um número: ";
 $a = (int) fgets(STDIN);

 print "\nDigite um número: ";
 $b = (int) fgets(STDIN);

 if ($a>$b) {
    print "\nO maior número é $a\n";
 } else{
    print "\nO maior número é $b\n";
}

?>