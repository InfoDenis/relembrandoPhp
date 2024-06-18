<?php

class Usuario {
  
  private $idUsuario;
  private $desLogin;
  private $desSenha;
  private $dtCadastro;

  public function __construct($login = "", $senha = "") {

    $this->setDesLogin($login);
    $this->setDesSenha($senha);

  }

  public function getIdUsuario() {

    return $this->idUsuario;

  }

  public function setIdUsuario($valorId) {

    $this->idUsuario = $valorId;

  }

  public function getDesLogin() {

    return $this->desLogin;

  }

  public function setDesLogin($valorLogin) {

    $this->desLogin = $valorLogin;

  }

  public function getDesSenha() {

    return $this->desSenha;

  }

  public function setDesSenha($valorSenha) {

    $this->desSenha = $valorSenha;

  }

  public function getDtCadastro() {

    return $this->dtCadastro;

  }

  public function setDtCadastro($valorDtCadastro) {

    $this->dtCadastro = $valorDtCadastro;

  }

  public function loadById($id) {

    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_usuarios WHERE idUsuario = :ID", array(
      ":ID" => $id
    ));

    if (isset($results[0])) {

      $this->setData($results[0]);

    }

  }

  public function __toString() {

    $retorno = array();
    $retorno["idUsuario" ] = $this->getIdUsuario();
    $retorno["login"     ] = $this->getDesLogin();
    $retorno["senha"     ] = $this->getDesSenha();
    $retorno["dtCadastro"] = $this->getDtCadastro()->format("d/m/Y H:i:s");

    return json_encode($retorno);

  }

  public static function getList() {

    $sql = new Sql();
    
    return $sql->select("SELECT * FROM tb_usuarios ORDER BY desLogin");

  }

  public static function search($login) {

    $sql = new Sql();
    
    return $sql->select("SELECT * FROM tb_usuarios WHERE desLogin LIKE :SEARCH ORDER BY desLogin", array(
      ':SEARCH' => "%$login%"
    ));

  }

  public function login($login, $pass) {

    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_usuarios WHERE desLogin = :LOGIN AND desSenha = :SENHA", array(
      ":LOGIN" => $login,
      ":SENHA" => $pass
    ));

    if (isset($results[0])) {

      $this->setData($results[0]);

    } else {

      throw new Exception("Login e/ou Senha invalidos!");

    }

  }

  public function setData($data) {

    $this->setIdUsuario($data['idUsuario']);
    $this->setDesLogin($data['desLogin']);
    $this->setDesSenha($data['desSenha']);
    $this->setDtCadastro(new DateTime($data['dtCadastro']));

  }

  public function insert() {

    $sql = new Sql();
    //sp_usuarios_insert - sp = storage procedure, usuarios = usuarios, insert = ação
    //CALL - chama a procedure no Mysql, para SQLSERVER usar EXECUTE
    //Para tal foi criado uma procedure no banco onde esta irá inserir o usuário e retornar os valores inseridos
    $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASS)", array(
      ':LOGIN' => $this->getDesLogin(),
      ':PASS'  => $this->getDesSenha()
    ));

    if (isset($results)) {

      $this->setData($results[0]);

    }

  }

}