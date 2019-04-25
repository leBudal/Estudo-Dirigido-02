<?php 
 
print "\nDigite uma letra: ";
$letra = fgetc(STDIN);

if($letra =="a" or $letra =="e"or $letra =="i" or $letra =="o"or $letra =="u"){
    print "$letra é vogal";
}else{
    print"$letra é consoante";
}

?>