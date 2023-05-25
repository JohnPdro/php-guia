<?php
    //Sintaxe e Variáveis
    #comentario
    /* comentario de varias linhas */
    
// A linguagem PHP é Case senssitive - diferencia maiusculas e minusculas

// formas de exibição echo, print, print_r
echo "Olá";
echo "<h1>PHP - Estudando</h1>"; // echo é o mais utilizado
print("<h3>Aula 02</h3>"); // print tem poucas diferenças do echo
print_r("Vamos estudar!!!"); // mais utilizado para debugar mas funciona com texto normalmente averá conflito com variaveis

$valor = 10;
print_r("Vamos estudar!!!");

echo "<h2>Mensagem</h2>";
echo 10.5 . "<br>";


// Variaveis
$nome = "Guto"; //texto = string
$idade = 36; // numerico inteiro = integer
$altura = 1.75; // numerico decimal = double
$fumante = false; // booleano = boolean

echo gettype($nome)  . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($fumante) . "<br>";


echo $nome;
echo "<br>";
echo $nome . $idade;
echo "<br>";
echo $nome . " - " . $idade . "<br>"; // O . é utilizado para concatenar 
echo "Nome: " . $nome . "<br>"; 
echo "Nome: $nome <br>"; // Aspas duplas interpreta a variavel 
echo 'Nome: $nome <br>'; // Aspas simple não interpreta a variavel


// Operações  

echo "<h1> Operações </h1>";
$n1 = 10;
$n2 = 2;
echo $n1+$n2;
echo "<br>";
echo "n1 + n2 = " . $n1+$n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % $n2 . "<br>";
echo $n1 ** $n2 . "<br>";


?>