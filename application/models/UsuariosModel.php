<?php
class UsuariosModel extends CI_Model {

   public function __construct()
   {
      $this->load->database();
   }

   public function getUsuarios()
   {
      $query = $this->db->get('usuarios');
      return $query->result_array();
   }

   public function validarUsuario($username, $password)
   {
      $where = [
         'nm_email' => $username,
      ];
      $query = $this->db->select('id_usuario');
      $query = $this->db->from('usuarios');
      $query = $this->db->where($where);
      if ($query->count_all_results() === 1) {
         $sql = "SELECT id_usuario, pw_senha FROM usuarios WHERE nm_email = ?";
         $query = $this->db->query($sql, [$username]);
         if (password_verify($password, $query->row(0)->pw_senha)) {
            return $query->row(0)->id_usuario;
         }
      }
      return false;
   }

   public function jaExisteUsuario($username) : bool
   {
      $where = [
         'nm_login' => $username
      ];
      $query = $this->db->select('id_usuario');
      $query = $this->db->from('usuarios');
      $query = $this->db->where($where);
      return ($query->count_all_results() !== 0);
   }

   public function gravar($data) : bool
   {
      $data = [
         'nm_login' => $data['username'],
         'pw_senha' => password_hash($data['password'], PASSWORD_DEFAULT),
         'nm_email' => $data['email'],
         'nm_nome' => $data['nome'],
         'nu_celular' => $data['cel'],
         'nu_outrocontato' => $data['fone'],
         'nu_cpf' => $data['cpf'],
         'nu_rg' => $data['rg'],
         'nm_orgao' => $data['orgaoRG'],
         'nm_orgao_estado' => $data['estadoRG'],
         'nm_endereco' => $data['rua'],
         'nu_residencia' => $data['numero'],
         'nm_enderecocomplemento' => $data['complemento'],
         'nm_enderecobairro' => $data['bairro'],
         'nm_cidade' => $data['cidade'],
         'nm_estado' => $data['estado'],
         'nu_cep' => $data['cep'],
      ];
      return $this->db->insert('usuarios', $data);
   }

}
