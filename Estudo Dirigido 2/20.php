<?php 

$quadrado = "";
$triangulo = "";

function exibir_quadrado($quadrado){
$quadrado = array(
    "* * * * * * * *",
    "* * * * * * * *",
    "* * * * * * * *",
    "* * * * * * * *",
    "* * * * * * * *",
    "* * * * * * * *",
    "* * * * * * * *",
    "* * * * * * * *");
    foreach ($quadrado as $key => $value) {
        print "$value \n";
    }
}

function exibir_triangulo1($triangulo){
    $triangulo = array(
        "* ",
        "* * ",
        "* * * ",
        "* * * * ",
        "* * * * * ",
        "* * * * * * ",
        "* * * * * * * ",
        "* * * * * * * *");
    
    foreach ($triangulo as $key => $value) {
        print "$value \n";
    } 
}

function exibir_triangulo2($triangulo){
    $triangulo = array(
        "              *",
        "            * *",
        "          * * *",
        "        * * * *",
        "      * * * * *",
        "    * * * * * *",
        "  * * * * * * *",
        "* * * * * * * *");
    
    foreach ($triangulo as $key => $value) {
        print "$value \n";
    }
}


print "\n";
exibir_quadrado($quadrado);
print "\n";
exibir_triangulo1($triangulo);
print "\n";
exibir_triangulo2($triangulo);
print "\n";

?>
