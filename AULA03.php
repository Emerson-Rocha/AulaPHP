<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /* Trabalhando com variáveis */


    $nomeComp  = "Emeson Rocha"; // string
    $idade = 38; // inteiro
    $ativar = true; // booleano true = 1 ,false 0
    $salario = 3000.00; /// float/ Double


?>



 <p> Nome: <?php   
   // forma de exibir o valor da variável na  navegador
    echo ($nomeComp);
                     ?> </p>




<p> Idade: <?php  
 
   // forma de exibir o valor da variável na  navegador
    echo $idade;
                     ?> </p>



<p> Usuário esta ativo no Sistema: <?php   
   // forma de exibir o valor da variável na  navegador 
   // print retorna um valor padrão;
    print_r($ativar);
                     ?> </p> 



<p>Salário : 
 <?php  
 
   // forma de exibir o valor da variável na  navegador
    printf("seu salario $ %s",  $salario) ;
   
  
    ?>
 </p>



 <hr>

<?php
//Posso saber qual tipo de dado e variável atraves da  função gettype


 echo gettype($ativar);

 echo "<br>"; 
 $ativar = "PHP";

 echo gettype($ativar);
?>




<?php


/* Tomar cuidado com (" ")/ (' ')*/

echo "<p>Olá $nomeComp, sua idade $idade, não está ativo $ativar, 
salário é $salario</p>";

echo '<p>Olá $nomeComp, sua idade $idade, não está ativo $ativar, 
salário é $salario</p>';


?>



</body>
</html>