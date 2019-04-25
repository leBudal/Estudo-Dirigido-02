<?php 
 print "\nDigite o sexo (F/M): ";
$sexo = fgetc(STDIN);

if($sexo == "F" or $sexo == "f"){
    print "F - Feminino";
}elseif ($sexo == "M" or $sexo == "m"){
    print "M - Masculino";
}else{
    print "Sexo inválido";
}


?>