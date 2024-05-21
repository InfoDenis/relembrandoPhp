<?php

//Funções recursivas - chama a ela mesma

$hierarquia = array(
  array(
    'nome_cargo' => 'CEO',
    'subordinados' => array(
      //Inicio: Diretor - Diretor Comercial
      array(
        'nome_cargo' => 'Diretor Comercial',
        'subordinados' => array(
          //Inicio: Gerente de Vendas
          array(
            'nome_cargo' => 'Gerente de Vendas'
          )
          //Termino: Gerente de Vendas
        )
      ),
      //Término: Diretor - Diretor Comercial
      //Inicio: Diretor Financeiro
      array(
        'nome_cargo' => 'Diretor Financeiro',
        'subordinados' => array(
          //Inicio: Gerente de Contas a pagar
          array(
            'nome_cargo' => 'Gerente de Contas a Pagar',
            'subordinados' => array(
              //Inicio: Supervisor de Pagamentos
              array(
                'nome_cargo' => 'Supervisor de Pagamentos'
              )
              //Término: Supervisor de Pagamentos
            )
          ),
          //Termino: Gerente de Contas a pagar
          //Inicio: Diretor de Compras
          array(
            'nome_cargo' => 'Diretor de Compras',
            'subordinados' => array(
              //Inicio: Gerente de compras
              array(
                'nome_cargo' => 'Gerente de compras',
                'subordinados' => array(
                  //Inicio: Supervisor de Suprimentos
                  array(
                    'nome_cargo' => 'Supervisor de Suprimentos'
                  )
                  //Término: Supervisor de Suprimentos
                )
              )
              //Término: Diretor de compras
            )
          )
          //Término: Gerente de Compras
        )  
      )
      //Termino: Diretor Financeiro
    )
  )
);

function exibe($cargos) {

  $html = '<ul>';

  foreach ($cargos as $cargo) {
    $html .= '<li>';
    $html .= $cargo['nome_cargo'];

    if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

      $html .= exibe($cargo['subordinados']);

    }

    $html .= '</li>'; 
  }

  $html .= '</ul>';

  return $html;

}

echo exibe($hierarquia);