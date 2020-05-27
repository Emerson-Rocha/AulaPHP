<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
   /* Operadores de Atribuição */
   
    /* Atribuição*/
    $num = 10;
  
    
    /* Atribuição e Adição
       $num = $num + 1
    */
    
    $num = 10;
     $num += 1;

     echo "<p>$num</p>";

     



     /*
       Atribuição e Subtração 
       $num = $num - 1
    */
    $num = 10;
    $num -= 1;

    echo "<p>$num</p>";






     /* Atribuição e Multiplicação  
       $num = $num * 2
    */
    $num = 10;
    $num *= 2;

    echo "<p>$num</p>";
   





   /*
       Atribuição e Divisão  
       $num = $num / 2
    */
    $num = 10;
    $num /= 2;

    echo "<p>$num</p>";




/* 
       Atribuição e Módulos  
       $num = $num % 3
    */

    $num = 10;
    $num %= 3;

    echo "<p>$num</p>";






     /* 
       Atribuição e concatenação
       $texto = "Olá " . " PHP";
     
    */
    $texto = "Olá " ;
    $texto .= " PHP ";
    echo "<p>$texto</p>";





   ?> 
</body>
</html>