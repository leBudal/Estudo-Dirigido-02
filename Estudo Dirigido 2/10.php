<?php   
print "\nDigite o valor de a: ";
$a = (float) fgets(STDIN);

if ($a == 0) {
    print "O valor de a não pode ser 0!";
}else{
    print "Digite o valor de b: ";
    $b = (float) fgets(STDIN);

    print "Digite o valor de c: ";
    $c = (float) fgets(STDIN);

    $delta = (pow($b,2))-((4*$a)*$c);
    $x1    = (-$b + sqrt($delta))/ (2* $a);
    $x2    = (-$b - sqrt($delta))/ (2* $a);

    if($delta<0){
        print "A equação não possui raízes reais";
    }else{}

    if($delta>0){
        print "A equação possui duas raízes : $x1 e $x2";
    }elseif($delta==0){
        print "A equação possui duas raízes : $x1 e $x2";
    }
    
}
?>






