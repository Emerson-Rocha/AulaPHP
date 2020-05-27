<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    /* Operadores Aritméticos*/
    // declaração de variáveis
    $num01 = 10;// inteiro
    $num02 = 2; // inteiro
    $num03 = "10"; // string
    $soma ;

    /*adição*/
      echo "<h3>Adição</h3>";
      $soma = $num01 + $num02;
      echo " <p>O valor de : $num01 + $num02 =  $soma</p>"  ;

      $soma = $num01 + $num03;
      echo "<p> O valor de : $num01 + $num03 =  $soma</p>"  ;
      
      //@
      @$soma = 10 + " Olá";
      echo "<p> O valor =  $soma</p>"  ;






   /* Subtração */

   echo "<h3>Subtração</h3>";
   $soma = $num01 -  $num02;
   
   echo "<p> O valor de : $num01 - $num02 =  $soma</p>"  ;
   
   $soma = $num01 - $num03;
   echo "<p> O valor de : $num01 - $num03 =  $soma</p>"  ;
    //@
   @$soma = 10 - " Olá";
   echo "<p> O valor =  $soma</p>"  ;
   
   




/* Multiplicação*/
    echo "<h3>Multiplicação</h3>";
    $soma = $num01 * $num02;
    echo "<p> O valor de : $num01 x $num02 =  $soma</p>"  ;

    $soma = $num01 * $num03;
    echo "<p> O valor de : $num01 x $num03 =  $soma</p>"  ;
    //@
    @$soma = 10 * " Olá";
    echo "<p> O valor =  $soma</p>"  ;








    
   /*Divisão*/
    echo "<h3>Divisão</h3>";
    $soma = $num01 / 2;
    echo "<p> O valor de : $num01  	&divide;  2 =  $soma</p>"  ;

    $soma = $num01 / $num03;
    echo "<p> O valor de : $num01 	&divide;  $num03 =  $soma</p>"  ;





/*Módulos*/
    echo "<h3>Módulo</h3>";
    $soma = $num01 % 3;
    echo "<p> O valor de : $num01 	&divide;  3  resto é  $soma</p>"  ;

    $soma = $num01 % $num03;
    echo "<p> O valor de : $num01 	&divide;  $num03 resto é  $soma</p>"  ;

    









    ?>


</body>
</html>