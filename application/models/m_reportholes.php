<?php
class m_reportholes extends CI_Model {

    public function input_data ($data){
        $this->db->insert('tb_laporan', $data);
    }
}