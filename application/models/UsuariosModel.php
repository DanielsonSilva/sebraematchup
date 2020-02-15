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

   public function validarUsuario($username, $password) : bool
   {
      $where = [
         'nm_login' => $username,
      ];
      $query = $this->db->select('id_usuario');
      $query = $this->db->from('usuarios');
      $query = $this->db->where($where);
      if ($query->count_all_results() === 1) {
         $sql = "SELECT pw_senha FROM usuarios WHERE nm_login = ?";
         $query = $this->db->query($sql, [$username]);
         return password_verify($password, $query->row(0)->pw_senha);
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

   public function gravar($username, $senha) : bool
   {
      $data = [
         'nm_login' => $username,
         'pw_senha' => password_hash($senha, PASSWORD_DEFAULT)
      ];
      return $this->db->insert('usuarios', $data);
   }

}
