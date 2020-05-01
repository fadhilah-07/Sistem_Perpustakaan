<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {
    public function login($user, $pass) {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $this->db->where('user', $user);
        $this->db->where('password', md5($pass));

        $data = $this->db->get();

        if ($data->num_rows() == 1) {
            return $data->row();
        } else {
            return false;
        }
    }
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */