<?php

echo date("d/m/Y H:i:s");//Função date - consultar manual do php para parâmetros da função date
//Usa-se a letra "i" para representar os minutos porque a letra "m" já está sendo utilizada para representar o mês
//Sempre mostrará a hora e idioma do servidor!!!

echo "<br>";

//Timestamp mostra a quantidade de segundos desde 01 de Janeiro de 1970 até agora
//01 de Janeiro de 1970 é a partir desta data no padrão UTC no calendário Gregoriano que é o marco zero do calendário usado pelo sistema IUNIX
echo time();
