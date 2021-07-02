<?php
class UserModel extends CI_Model
{
    function insertkonsumen($konsumen)
    {
        return $this->db->insert("konsumen", $konsumen);
    }

    function login()
    {
        $ID_Nama = $this->input->post("ID_Nama");
        $Password= $this->input->post("Password");
        $this->db->where("ID_Nama", $ID_Nama);
        $this->db->where("Password", $Password);
        return $this->db->get("konsumen");
    }
}
