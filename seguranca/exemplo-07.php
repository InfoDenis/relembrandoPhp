<?php

//SSL e PHP SESSION HIJACKING
//Ajuda a evitar um ataque de sessão
session_start();
//Depois de verificar login e senha, reinicie o id
session_destroy();

session_start();

session_regenerate_id();

echo session_id();