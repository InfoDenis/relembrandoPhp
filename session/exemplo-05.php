<?php

require_once("config.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());
echo "<br>";
switch (session_status()) {
  case PHP_SESSION_DISABLED:
    echo "As Sessões estão desabilitadas";
    break;
  
  case PHP_SESSION_NONE:
    echo "As Sessões estão habilitadas mas, não existem sessões";
    break;

  case PHP_SESSION_ACTIVE:
    echo "As Sessões estão ativadas";
    break;
}