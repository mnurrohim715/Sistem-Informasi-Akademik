<?php

class Kelas1_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function tampil_data_kelas1A($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','10 IPA 1');
        return $this->db->get('data_siswa');
    }
    public function tampil_data_kelas1B($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','10 IPA 2');
        return $this->db->get('data_siswa');
    }
    
    public function ambil_id_kelas($id)
    {
        $hasil = $this->db->where('id_siswa',$id)->get('data_siswa');
        if($hasil -> num_rows() > 0)
        {
            return $hasil->result();
 
        }else
        {
            return false;
        } 
    }
    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}