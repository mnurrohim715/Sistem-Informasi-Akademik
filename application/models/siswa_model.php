<?php

class Siswa_model extends CI_Model
{
    public function ambil_data($id)
    {
        $this->db->where('username',$id);
        return $this->db->get('user')->row();
    }
    public function data_user()
    {
        $this->db->where('username');
        return $this->db->get('user')->row();
    }
    public function data_siswa()
    {
        $this->db->where('name');
        return $this->db->get('data_siswa')->row();
    }
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function ambil_id_siswa($id)
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
    
    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
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
    public function tampil_data_guruindo($table)
    {
        $this->db->select("*");
        $this->db->where_in('mengajar','BAHASA INDONESIA');
        return $this->db->get('data_guru');
    }
    public function tampil_data_guruing($table)
    {
        $this->db->select("*");
        $this->db->where_in('mengajar','BAHASA INGGRIS');
        return $this->db->get('data_guru');
    }
    public function tampil_data_gurumtk($table)
    {
        $this->db->select("*");
        $this->db->where_in('mengajar','MATEMATIKA');
        return $this->db->get('data_guru');
    }
}