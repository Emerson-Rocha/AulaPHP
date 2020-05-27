<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Operadores Lógicos. */ 
// Operadores lógicos realizam comparações entre expressões e retorna valores booleano (true / falso) 

$var01 = 10;
$var02 = "PHP";
$var03 = "10";
$var04 = "PHP";
$bool = false;


// Lógico - &&(e)
         //10               //"PHP"
$bool = ($var01 <= 20 ) && ($var02 != "php");
 print_r("Op. Lógico && = " . (int)$bool);
 echo ("<br>");




// Lógico - ||(ou)
         //10               //"PHP"
$bool = ($var01 >= 20 ) || ($var02 != "PHP");
  print_r("Op. Lógico || = " . (int)$bool);
  echo ("<br>");


// Lógico - ||(negação)
         //10            
$bool = !($var01 >= 20 ) ;
print_r("Op. Lógico !() = " . (int)$bool);
echo ("<br>");



// Lógico - or (ou )
         //10                 //10
$bool = !($var01 >= 20 ) or !($var01 >= 20 );
   print_r("Op. Lógico or = " . (int)$bool);
   echo ("<br>");




// Lógico - AND  (E )
         //10                 //10
$bool = ($var01 >= 20 ) and !($var01 >= 20 );
   print_r("Op. Lógico AND = " . (int)$bool);
   echo ("<br>");


// Lógico - XOR  (somente uma expressão pode ser verdadeiro, não ambas )
 // obs: fazer um teste  
$bool = (false) xor  (false);
  // $bool = (2>1) XOR (1==1);
   print_r("Op. Lógico xor = " .(int)$bool);
   echo ("<br>");



?>

    
</body>
</html>