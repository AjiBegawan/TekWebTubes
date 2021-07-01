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
            "Toko" => $this->input->post("toto")
        );
        return $this->db->insert('Barang', $barang);
    }

    function update($id)
    {
        $barang = array(
            "ID_Barang" => $this->input->post("id"),
            "Nama_Barang" => $this->input->post("nama"),
            "harga" => $this->input->post("harga"),
            "Stok" => $this->input->post("stok"),
            "Toko" => $this->input->post("toko")
        );
        $this->db->where("ID_Barang", $id);
        return $this->db->update('Barang', $barang);
    }

    function getId($id)
    {
        $this->db->where("ID_Barang", $id);
        return $this->db->get('barang');
    }

    function delete($id)
    {
        $this->db->where("ID_Barang", $id);
        return $this->db->delete("barang");
    }
}
