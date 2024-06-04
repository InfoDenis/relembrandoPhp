<?php

//Static - Permite que tanto um atributo quanto um método possam ser chamados ou acessado sem que você crie a representação daquela classe ou crie um objeto

class Documento {

  private $numero;

  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    $resultado = Documento::validarCPF($numero);// ::Usado para acessar métodos staticos

    if ($resultado === false) {

      throw new Exception("CPF informado não é válido.", 1);

    }

    $this->numero = $numero;
  }

  public static function validarCPF($cpf):bool {

    //Verifica se um cpf foi informado
    if (empty($cpf)) return false;

    //Elimina possível máscara
    $cpf = preg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    //Verifica se o número de digitos é igual a 11
    if (strlen($cpf) != 11) {
    
      return false;
    
    } else if ($cpf == '00000000000' ||   //Verifica se nenhuma das sequências inválidas abaixo foi digitada.
               $cpf == '11111111111' ||   //Caso afirmativo, retorna false
               $cpf == '22222222222' || 
               $cpf == '33333333333' || 
               $cpf == '44444444444' || 
               $cpf == '55555555555' || 
               $cpf == '66666666666' || 
               $cpf == '77777777777' || 
               $cpf == '88888888888' || 
               $cpf == '99999999999' ) {
              
             return false;
              
    } else {
    
      //Calcula os digitos verificadores para verificar se o CPF é válido
      for ($t = 9; $t < 11; $t++)  {
      
        for ($d = 0, $c = 0; $c < $t; $c++) {
        
          $d += $cpf[$c] * (($t + 1) - $c);
        
        }
      
        $d = ((10 * $d) % 11) % 10;

        if ($cpf[$c] != $d) {
          return false;
        }
      
      }
    
      return true;
    
    }

  }

}

$cpf = new Documento();
$cpf->setNumero("36131452144");

var_dump($cpf->getNumero());
