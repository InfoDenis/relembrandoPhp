<?php

//Função setlocale para definir o idioma padrão da aplicação
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//LC_ALL - Constante padrão do php para informar que todos os nós estarão trabalhando com o mesmo idioma/data/horário
//Padrões de linguagem pt_BR-padrão linux, pt_BR.utf-8 padrão UTF-8, portuguese padrão windows

echo ucwords(strftime("%A, %B"));