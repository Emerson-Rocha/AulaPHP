<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*   Executa um grupo de comandos, repetidas vezes, enquanto um 
   determinada condição for verdadeira,  ou seja, a cada interação
   do loop a expressão fornecida é avaliada e caso seja verdadeiro,
   uma nova rodada é executada, caso contrário(false) interromipida 
   a repetição 
*/


#### Expressão while; 
 //
 $var = 1;
while($var <= 10 ){
    echo $var ."<br>";
    //contador de volta e comparação da condição    
    $var = $var + 1;
}





### Expressão do...while;
echo "<br>";
$var = 1;
do{
    echo $var ."<br>";
    //contador de volta e comparação da condição    
    $var = $var + 1;
}while($var <= 10 );
    



### Expressão for;

echo "<br>";
for($var = 1 ; $var <= 10 ; $var++){
    echo $var ."<br>";   
}



/* Podemos fazer loop dentro de loop */

for($linha = 1 ; $linha <= 10 ; $linha++){
    for($coluna =1; $coluna <= 3;$coluna++){
        $valor = $linha * $coluna;
        echo "valor de $linha x $coluna =  $valor  <br>  ";
    }  
   echo "<br>";
}




?>

    
</body>
</html>