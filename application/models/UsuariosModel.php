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
         'pw_senha' => $password
      ];
      $query = $this->db->select('id_usuario');
      $query = $this->db->from('usuarios');
      $query = $this->db->where($where);
      return ($query->count_all_results() === 1);
   }

}
