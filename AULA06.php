<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  /* Operadores de Comparação - Volta resultado booleano*/
  
  $var01 = "10";
  $var02 = 10;
  $resBool;
  
  $resBool = $var01 == $var02;
  echo "Igualdade == " . (int)$resBool;
  



  
  echo "<br>";

  $var01 = "PHP";
  $var02 = "PHP";
  $resBool;
  
  $resBool = $var01 === $var02;
  echo "Idêntico === " . (int) $resBool;




  echo "<br>";

  $var01 = "PHP";
  $var02 = "php";
  $resBool;
  
  $resBool = $var01 != $var02;
  echo " Diferente  != " . (int) $resBool;




  echo "<br>";

  $var01 = "PHP";
  $var02 = "PHP";
  $resBool;
  
  $resBool = $var01 !== $var02;
  echo " Diferente  !== " . (int) $resBool;
  


 
  echo "<br>";

  $var01 = 10 ;
  $var02 = 2 ;
  $resBool;
  
  $resBool = $var01 < $var02;
  echo " Menor   < " . (int) $resBool;




  echo "<br>";

  $var01 = 10 ;
  $var02 = 2 ;
  $resBool;
  
  $resBool = $var01 > $var02;
  echo " Maior  > " . (int) $resBool;




  echo "<br>";

  $var01 = 10 ;
  $var02 = 10 ;
  $resBool;
  
  $resBool = $var01 <= $var02;
  echo " Menor ou igual  <= " . (int) $resBool;



  echo "<br>";

  $var01 = 10 ;
  $var02 = 11 ;
  $resBool;
  
  $resBool = $var02 >= $var01;
  echo " Maior ou igual  >= " . (int) $resBool;
  ?>  
</body>
</html>