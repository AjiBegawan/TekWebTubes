<?php
class MToko extends CI_Model
{
    function getToko()
    {
        return $this->db->get("barang");
    }

    function insert()
    {
        $barang = array(
            "ID_Barang" => $this->input->post("id"),
            "Nama_Barang" => $this->input->post("nama"),
            "harga" => $this->input->post("harga"),
            "Stok" => $this->input->post("stok"),
            "Foto" => $this->input->post("foto")
        );
        return $this->db->insert('Barang', $barang);
    }
}
