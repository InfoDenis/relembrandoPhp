<?php
//Setando todas data/hora para o padrão brasileiro
//LC_ALL, Muda todas as configurações
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A %B");