<?php 

$soma=5+5;
$nome='rafael';
$sobrenome='Santana';
$idade=16;
$numerofavorito=10;
$altura=1.66; #não utilizar '1.66' pois as aspas simples é considerado como texto, também não utilizar vírgula ex: 1,66 por que será interpretado como dois números diferentes
$multiplicacao=2*2;
$nomecompleto=$nome.$sobrenome;
echo "o meu nome é $nome e a minha idade é $idade e minha altura $altura";

#"" -> colocou aspas é uma string
#1 -> colocou um numero é considerado inteiro (int)
#1.5 -> colocou numero quebrado, é considerado float /double 
#true (1) or false (0) -> é considerado boolean
# + - / * % --> operadores para numeros. Quando estivermos falando de texto, utilizar o . --> serve para concatenar, ex: $nomecompleto=$nome.$sobrenome; 
#aspas  simples é só texto, aspas duplas faz o template string -> diferenciar o que é texto e o que é variável ex: 'o meu nome é $nome' a variável não seria reconhecida, diferentemente de "o meu nome é $nome", que a variável seria considerada

?>

<?php 
$soma=2+2;
$subtracao=2-2;
$vezes=2*2;
$divisao=2/2;

echo "o resultado da soma 2+2 é igual a: $soma, <br> o resultado da subtracao 2-2 é igual a $subtracao, <br> o resultado da multiplicacao 2x2 é igual a $vezes, <br> o resultado da divisão 2/2 é igual a $divisao.";

?>





