<?php
echo "<h1>Estrutura de decisão</h1>";
/*
if
if else
if else if
*/

$idade = 20;
if($idade >= 18){
    echo "Pode dirigir"; //verdadeiro
}elseif($idade == 17){
    echo "Volte ano que vem";
}else{
    echo "Não pode dirigir"; //falso
}
?>