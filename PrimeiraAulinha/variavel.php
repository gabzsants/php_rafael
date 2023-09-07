<?php 
$soma=5+5;
$nome='Rafael';

#ex 1: criar variáveis para seu: sobrenome,idade, num favorito, altura e conta de multiplicação.
$sobrenome='Duraes';
$idade=16;
$numerofavorito=10;
$altura=1.66; #não utilizar '1.66' pois as aspas simples é considerado como texto, também não utilizar vírgula, por ex: 1,66 por que será interpretado como dois números diferentes
$multiplicacao=2*2;

#concatenar 
$nomecompleto=$nome.$sobrenome;
echo "o meu nome é $nome e a minha idade é $idade e minha altura $altura";

#anotações:
#"" -> colocou aspas é uma string
#1 -> colocou um numero é considerado inteiro (int)
#1.5 -> colocou numero quebrado, é considerado float /double 
#true (1) or false (0) -> é considerado boolean
# + - / * % --> operadores para numeros; Quando estivermos falando de texto, utilizar o . --> serve para concatenar, exemplo: $nomecompleto= $nome.$sobrenome; 
#aspas  simples é só texto, aspas duplas faz o template string -> diferenciar o que é texto e o que é variável exemplo: 'o meu nome é $nome' a variável não seria reconhecida, diferentemente de "o meu nome é $nome", que a variável seria considerada
?>

<?php 
#ex 2: fazer uma variável para cada operação e exibir na tela os resultados.
$soma=2+2;
$subtracao=2-2;
$vezes=2*2;
$divisao=2/2;
echo "<h1>o resultado da soma 2+2 é igual a: $soma, <br> o resultado da subtracao 2-2 é igual a $subtracao, <br> o resultado da multiplicacao 2x2 é igual a $vezes, <br> o resultado da divisão 2/2 é igual a $divisao.</h1>";
?>





