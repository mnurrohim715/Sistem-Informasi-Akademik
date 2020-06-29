<?php

class Input_nilai extends CI_Controller
{

    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
    $this->load->view('templates_guru/header');
    $this->load->view('templates_guru/sidebar',$data);
    $this->load->view('guru/input_nilai');
    $this->load->view('templates_guru/footer');
    }

    public function indo_10()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_indo'] = $this->nilai_model->tampil_data_indo10('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/indo_10',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_indo10($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_indo']=$this->nilai_model->edit_data($where,'b_indo')->result();
        $data['detail'] = $this->nilai_model->ambil_id_indo($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_formindo10',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_indo10()
    {
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_indo');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/indo_10');
    }



    public function indo_11()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_indo'] = $this->guru_model->tampil_data_indo11('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/indo_11',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_indo11($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_indo']=$this->nilai_model->edit_data($where,'b_indo')->result();
        $data['detail'] = $this->nilai_model->ambil_id_indo($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_formindo11',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_indo11()
    {
       
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_indo');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/indo_11');
    }



    public function indo_12()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_indo'] = $this->guru_model->tampil_data_indo12('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/indo_12',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_indo12($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_indo']=$this->nilai_model->edit_data($where,'b_indo')->result();
        $data['detail'] = $this->nilai_model->ambil_id_indo($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_formindo12',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_indo12()
    {
       
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_indo');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/indo_12');
    }


    public function ing_10()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_inggris'] = $this->guru_model->tampil_data_ing10('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/ing_10',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_ing10($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_inggris']=$this->nilai_model->edit_data($where,'b_inggris')->result();
        $data['detail'] = $this->nilai_model->ambil_id_ing($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_forming10',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_ing10()
    {
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_inggris');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/ing_10');
    }


    public function ing_11()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_inggris'] = $this->guru_model->tampil_data_ing11('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/ing_11',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_ing11($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_inggris']=$this->nilai_model->edit_data($where,'b_inggris')->result();
        $data['detail'] = $this->nilai_model->ambil_id_ing($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_forming11',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_ing11()
    {
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_inggris');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/ing_11');
    }


    public function ing_12()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_inggris'] = $this->guru_model->tampil_data_ing12('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/ing_12',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_ing12($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_inggris']=$this->nilai_model->edit_data($where,'b_inggris')->result();
        $data['detail'] = $this->nilai_model->ambil_id_ing($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_forming12',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_ing12()
    {
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_inggris');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/ing_12');
    }


    public function mtk_10()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_mtk'] = $this->guru_model->tampil_data_mtk10('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/mtk_10',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_mtk10($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_mtk']=$this->nilai_model->edit_data($where,'b_mtk')->result();
        $data['detail'] = $this->nilai_model->ambil_id_ing($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_formmtk10',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_mtk10()
    {
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_mtk');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/mtk_10');
    }


    public function mtk_11()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_mtk'] = $this->guru_model->tampil_data_mtk11('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/mtk_11',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_mtk11($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_mtk']=$this->nilai_model->edit_data($where,'b_mtk')->result();
        $data['detail'] = $this->nilai_model->ambil_id_ing($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_formmtk11',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_mtk11()
    {
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_mtk');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/mtk_11');
    }


    public function mtk_12()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $data['b_mtk'] = $this->guru_model->tampil_data_mtk12('data_siswa')->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/mtk_12',$data);
        $this->load->view('templates_guru/footer');
    }
    public function  edit_mtk12($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['b_mtk']=$this->nilai_model->edit_data($where,'b_mtk')->result();
        $data['detail'] = $this->nilai_model->ambil_id_ing($id);
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/nilai_formmtk12',$data);
        $this->load->view('templates_guru/footer');
    }
    public function update_aksi_mtk12()
    {
        $id= $this->input->post('id');
        $name=$this->input->post('name');
        $n1= $this->input->post('n1');
        $n2= $this->input->post('n2');
        $n3= $this->input->post('n3');
        $uts= $this->input->post('uts');
        $uas= $this->input->post('uas');
 
        $data= array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'uts' => $uts,
            'uas' => $uas
        );
        $where = array(
            'id' => $id
        );
        $this->nilai_model->update_data($where,$data,'b_mtk');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Nilai Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('guru/input_nilai/mtk_12');
    }
    
    
    

}