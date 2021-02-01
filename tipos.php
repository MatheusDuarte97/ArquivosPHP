<?php

/**
 * 4 tipos escalares
 * boolean
 * int
 * float
 * string
 */

 // INT
    echo "<h1>"."Inteiros"."</h1>"."<br />";
 $age = 24; // Numero decimal
 $binario = 0b01010001;
 $octal = 0235;
 $hexa = 0x45F;
 echo "Binario: ".$binario."<br />";
 echo "Octal: ".$octal."<br />";
 echo "Hexa: ".$hexa."<br />";
 // Overflow de inteiros
 $num = PHP_INT_MAX;
 $soma = $num + 1; // Nessa linha e convertido para float
 echo "<br />";
 var_dump($soma);
 echo "<br />";
 $p = 14.4;
 echo "Ponto flutuante para inteiro: ".(int)$p."<br />";

//FLOAT 
echo "<h1>"."Float"."</h1>"."<br />";


$t = 1.999;
$r = 1.999;
$eps = 0.001;

if (abs($t - $r) < $eps) {

    echo "iguais";
}
//echo $t;


 echo "<br />";


 // BOOLEAN
 echo "<h1>"."Boolean"."</h1>"."<br />";

 $entrar = "";
 $bloqueado = false;

 echo "Entrar: ".$entrar."<br />";
 echo var_dump($entrar);
 echo "<br />"; 
 echo (bool)$entrar; 
 echo "<br />";
 echo "Bloqueado: ".$bloqueado."<br />";



