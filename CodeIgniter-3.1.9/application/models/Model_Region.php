<?php

class Model_Region extends CI_Model
{
    public function GetAllRegion($nomRegion)
    {
        $sql = $this->db->query("select nomRegion, scoreRegion from region.".$nomRegion);
        return $sql->result();
    }
}