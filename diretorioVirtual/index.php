<?php

echo "TEste Denis";

/* Mudanças no httpd-vhosts.conf para criar diretório virtual no php - OBS: Adicionar endereço no arquivo hosts do windows

<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:/xampp/htdocs/relembrandoPhp/diretorioVirtual"
    ServerName aulacursophp.com.br
    ErrorLog "logs/dummy-host2.example.com-error.log"
    CustomLog "logs/dummy-host2.example.com-access.log" common
    <Directory "C:/xampp/htdocs/relembrandoPhp/diretorioVirtual">
        Order allow,deny
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>

*/
phpinfo();
