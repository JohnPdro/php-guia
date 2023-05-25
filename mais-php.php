<?php
    //Operadores Relacionais
    echo (20 > 30) . "FALSE<br>"; // maior
    echo (20 < 30) . "TRUE<br>"; // menor
    echo (10 == 10) . "TRUE<br>"; //igualdade  
    echo (10 != 10) . "FALSE<br>"; // diferente 
    echo (10 >= 10) . "TRUE<br>"; // maior ou igual
    echo (10 <= 10) . "TRUE<br>"; // menor ou igual

    // operadores lógicos
    echo (10 == 10 && 10 > 5) . "TRUE <br>"; // operador E
    echo (10 == 10 || 10 > 5) . "TRUE <br>"; // operador OU
    echo (!false) . "FALSE<br>"; // operador não(inversão)
?>