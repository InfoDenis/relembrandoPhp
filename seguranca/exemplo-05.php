<form action="" method="post">

  <input type="text" name="busca">
  <button type="submit"> Enviar </button>

</form>

<?php

///Cross-site Scripting - XSS
if (isset($_POST["busca"])) {

  // echo strip_tags($_POST["busca"]);//retirando qualquer tag
  // echo strip_tags($_POST["busca"], "<strong>");//escolhendo tags que serão permitidas
  echo htmlentities($_POST["busca"]);

}

?>