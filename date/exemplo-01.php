<?php
//Função Date não é sensivel ao setLocale somente pega dados do servidor!!!

echo Date("d/m/Y"); //Data padrão Brasil com 4 digitos no ano usar "Y"
echo "<br>";

echo Date("d/m/y"); //Data padrão Brasil com 2 digitos no ano usar "y"
echo "<br>";

echo Date("d/m/Y H:i:s"); //Data com Hora, minuto e segundo - usa-se "i" para minutos ao invés de "m" porque "m" já está sendo usado em mês.
echo "<br>";

//Timestamp é a quantidade de segundos desde 1º de Janeiro de 1970 até agora;
//1º de Janeiro de 1970 a partir desta data no padrão utc do calendário gregoriano é o marco 0 ultilizada no sistema unix
echo time();//Timestamp