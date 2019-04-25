<?php 
print "\nPreço do produto 1: ";
$p1 = fgets(STDIN);

print "Preço do produto 2: ";
$p2 = fgets(STDIN);

print "Preço do produto 3: ";
$p3 = fgets(STDIN);

if($p1<$p2 && $p1<$p3){
    print "Produto 1 é o mais barato";
}elseif ($p2<$p1 && $p2<$p3){
    print "Produto 2 é o mais barato";
}elseif ($p3<$p1 && $p3<$p2){
    print "Produto 3 é o mais barato";
}

?>