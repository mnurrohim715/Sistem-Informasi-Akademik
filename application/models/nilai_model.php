<?php

class Nilai_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function ambil_id_indo($id)
    {
        $hasil = $this->db->where('id',$id)->get('b_indo');
        if($hasil -> num_rows() > 0)
        {
            return $hasil->result();

        }else 
        {
            return false;
        }
    } 
    public function ambil_id_ing($id)
    {
        $hasil = $this->db->where('id',$id)->get('b_inggris');
        if($hasil -> num_rows() > 0)
        {
            return $hasil->result();

        }else 
        {
            return false;
        }
    }
    public function ambil_id_mtk($id)
    {
        $hasil = $this->db->where('id',$id)->get('b_mtk');
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
    public function tampil_data_indo10($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','10 IPA 1');
        return $this->db->get('b_indo');
    }
    public function tampil_data_indo11($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','11 IPA 1');
        return $this->db->get('b_indo');
    }
    public function tampil_data_indo12($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','12 IPA 1');
        return $this->db->get('b_indo');
    }

    public function tampil_data_ing10($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','10 IPA 1');
        return $this->db->get('b_inggris');
    }
    public function tampil_data_ing11($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','11 IPA 1');
        return $this->db->get('b_inggris');
    }
    public function tampil_data_ing12($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','12 IPA 1');
        return $this->db->get('b_inggris');
    }

    public function tampil_data_mtk10($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','10 IPA 1');
        return $this->db->get('b_mtk');
    }
    public function tampil_data_mtk11($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','11 IPA 1');
        return $this->db->get('b_mtk');
    }
    public function tampil_data_mtk12($table)
    {
        $this->db->select("*");
        $this->db->where_in('kelas','12 IPA 1');
        return $this->db->get('b_mtk');
    }
    
}