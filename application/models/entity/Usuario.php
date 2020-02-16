<?php

class Usuario {

   public $id;
   public $login;
   public $email;
   public $nome;
   public $celular;
   public $outrocontato;
   public $cpf;
   public $rg;
   public $orgao;
   public $orgao_estado;
   public $endereco;
   public $residencia;
   public $enderecocomplemento;
   public $enderecobairro;
   public $cidade;
   public $estado;
   public $cep;

   public function __construct($data) {
      $this->id = $data['id_usuario'];
      $this->login = $data['nm_login'];
      $this->email = $data['nm_email'];
      $this->nome = $data['nm_nome'];
      $this->celular = $data['nu_celular'];
      $this->outrocontato = $data['nu_outrocontato'];
      $this->cpf = $data['nu_cpf'];
      $this->rg = $data['nu_rg'];
      $this->orgao = $data['nm_orgao'];
      $this->orgao_estado = $data['nm_orgao_estado'];
      $this->endereco = $data['nm_endereco'];
      $this->residencia = $data['nu_residencia'];
      $this->enderecocomplemento = $data['nm_enderecocomplemento'];
      $this->enderecobairro = $data['nm_enderecobairro'];
      $this->cidade = $data['nm_cidade'];
      $this->estado = $data['nm_estado'];
      $this->cep = $data['nu_cep'];
   }
}
