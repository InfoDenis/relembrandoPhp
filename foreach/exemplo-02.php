<form>
  <input type="text" name="nome">
  <input type="date" name="dataNascimento">
  <input type="submit" value="Enviar">
</form>

<?php

echo "***** Usando foreach para recuperar dados de um formulário ***** <br>";

if (isset($_GET)) {

  foreach ($_GET as $key => $value) {
  
    echo "Nome do campo: $key <br>";
  
    echo "Valor do campo: $value <br><br>";
  
  }

}
