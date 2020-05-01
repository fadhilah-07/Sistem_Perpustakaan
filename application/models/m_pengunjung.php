<?php  

class m_pengunjung extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_pengunjung');
	}
	public function input_data($data)
    {
        $this->db->insert('tb_pengunjung', $data);
    }
}