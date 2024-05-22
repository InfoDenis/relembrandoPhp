<?php

echo "***** Usando for para fazer um campo select ***** <br>";

echo "<select>";

for ($i = date("Y"); $i >= date("Y") - 100 ; $i--) { 
  //echo "<option value=$i> $i </option>"; //Usando interpolação de variável
  echo '<option value="'.$i.'"> '.$i.'</option>';
}

echo "</select>";