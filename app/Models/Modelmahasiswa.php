<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model {

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('kampus')->get();
    }

    function simpan($data)
    {
        return $this->db->table('kampus')->insert($data);
    }

    function hapusdata($nim)
    {
        return $this->db->table('kampus')->delete(['nim_mhs' => $nim]);
    }

    function ambildata($nim)
    {
        return $this->db->table('kampus')->getWhere(['nim_mhs' => $nim]);
    }

    function editdata($data, $nim)
    {
        return $this->db->table('kampus')->update($data, ['nim_mhs' => $nim]);
    }
}
?>