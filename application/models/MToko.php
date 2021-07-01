<?php
class MToko extends CI_Model
{
    function getToko()
    {
        return $this->db->get("barang");
    }
}
