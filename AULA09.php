<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*  Expressões Condicionais */

## Expressão Simples if;

$var = 10;

if($var < 15 ){

    echo "O valor da  variável é \$valor  " . $var ." e menor ";
}






echo "<br>";

## Expressão Composta if-else;
$var = 16;
if($var < 15 ){
    echo "O valor da  variável é \$valor  " . $var ." e menor ";
}
else{
    echo "O valor da  variável é \$valor  " . $var ." e maior ";
}





### Expressão Encadeada if-elseif-else ;

echo "<br>";
$var = 21;

if($var < 15 ){
    echo "O valor da  variável é \$valor  " . $var ." e menor ";
}
else if ( ($var >= 15) and ($var <= 20 )) {
    echo "se encontra em uma faixa 15 a 20";
}
else{
    echo "se encontra acima de 20";
}





### Expressão de Múltipla escolha swicth;
// Poder usar qualquer tipo de dados de variável
echo "<br>";
$var = "PHP";

switch("PHP"){

 case "php":
      echo " o valor da \$var é " .$var;
      break;

 case "Php":
      echo " o valor da \$var é " .$var;
      break;
 
 case "PHP":
     echo " o valor da \$var é  " .$var;
     break;
 
     default:
       echo " Nenhuma Opções" ;
        

}





### Expressão Ternaria ?  :  ; 

echo "<br>";

(10 == 10)  ? $v = "igual" : $v= "diferente";
echo $v;
?>

    
</body>
</html>